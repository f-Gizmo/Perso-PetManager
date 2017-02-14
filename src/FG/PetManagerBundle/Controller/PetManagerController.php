<?php
namespace FG\PetManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FG\PetManagerBundle\Entity\Mascotte;
use FG\PetManagerBundle\Entity\MascotteCat;
use FG\PetManagerBundle\Form\MascotteCatType;
use FG\PetManagerBundle\Form\MascotteType;


class PetManagerController extends Controller
{
	public function indexAction()
	{

		return $this->render('FGPetManagerBundle:Default:index.html.twig'/*, array(
			'mascotte' => $mascotte,
			'type' => $type
			)*/);
	}
	
	public function viewAction ($id)
	{
	$em = $this->getDoctrine()->getManager();
	$mascotte= $em->getRepository('FGPetManagerBundle:Mascotte')->find($id);
		return $this->render('FGPetManagerBundle:Default:view.html.twig', array (
			'basename' =>$mascotte->getBaseName()
			));
	}
	public function addAction(Request $request)
	{
		$mascotte=new Mascotte;
		$form=$this->createForm(MascotteType::class,$mascotte);

		if ($request->isMethod('POST')) {
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em=$this->getDoctrine()->getManager();
				$em->persist($mascotte);
				$em->persist($mascotte->getMascotteCat());
				$em->flush();

				$request->getSession()->getFlashBag()->add('ValidCreat','Votre mascoote est bien créer' );
				return $this->redirectToRoute('fg_pet_manager_add',array('id'=>$mascotte->getId()));
			}

		}
		return $this->render('FGPetManagerBundle:default:addMascotte.html.twig', array(
			'form' => $form->createView(),
			'title' =>'Création d\'une mascotte'
			));
	}
	public function addMascotteTypeAction(Request $request)
	{
			$mascotteCat= new MascotteCat;
			$form = $this->createForm(MascotteCatType::class, $mascotteCat);
			// test de la soumission du formulaire 

			if ($request ->isMethod('POST'))
			{
				$form->HandleRequest($request);
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();
					$em->persist($mascotteCat);
					$em->flush();

				$request->getSession()->getFlashBag()->add('validation', 'Type Enregistré');

				return $this->redirectToRoute('fg_pet_manager_type_add', array('id' => $mascotteCat->getId()));
				}
			}

			return $this->render('FGPetManagerBundle:Default:addMascotteType.html.twig', array(
				'form' =>$form->createView(),
				'title' =>'Ajout d\'un type pour les mascottes'
				));
	}
	public function editMascotteTypeAction(Request $request ,$id)
	{
			$mascotteCat= $this->getDoctrine()->getManager()->getRepository('FGPetManagerBundle:MascotteCat')->find($id);
			$form = $this->createForm(MascotteCatType::class, $mascotteCat);

			// test de la soumission du formulaire 

			if ($request ->isMethod('POST'))
			{
				$form->HandleRequest($request);
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();
					$em->persist($mascotteType);
					$em->flush();

				$request->getSession()->getFlashBag()->add('validation', 'Modification Enregistrée');

				return $this->redirectToRoute('fg_pet_manager_type_edit', array('id' => $mascotteCat->getId()));
				}
			}

			return $this->render('FGPetManagerBundle:Default:addMascotteType.html.twig', array(
				'form' =>$form->createView(),
				'title' =>'Edition du type'
				));
	}

}