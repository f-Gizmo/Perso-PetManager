<?php

namespace FG\PetManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use FG\PetManagerBundle\Repository\CategorieRepository;


class MascotteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pattern ='%';
        $builder
        ->add('capturable')
        ->add('baseName')
        ->add('attaque')
        ->add('speed')
        ->add('vie')
        //->add('mascotteCat',    MascotteCatType::class)
        ->add('MascotteCat', EntityType::class, array(
            'class' =>'FGPetManagerBundle:MascotteCat',
            'choice_label' =>'getDisplayIdCat',
            'multiple'=>false,
            'query_builder' =>function (CategorieRepository $repository) use ($pattern) { return $repository->getLikeQueryBuilder($pattern);}
            ))
        ->add('Enregistrer', submitType::class)
       ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FG\PetManagerBundle\Entity\Mascotte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fg_petmanagerbundle_mascotte';
    }


}
