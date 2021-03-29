<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Type;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\BlankValidator;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 255])
                ]
            ])
            ->add('nbPlace', IntegerType::class, [
                'constraints' => [
                    new Length(['max' => 4])
                ]
            ])
            ->add('ville', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 100])
                ]
            ])
            ->add('adresse', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 250])
                ]
            ])
            ->add('dateDebut', DateType::class)
            ->add('dateFin', DateType::class)
            ->add('cotisation', NumberType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 8])
                ]
            ])
            ->add('idType', EntityType::class, [
                'class' => Type::class, 'choice_label' => 'libelleType',])
            //Remplacer ce champ par une variable sessions contenant un objet Utilisateur
            ->add('idOrganisateur', EntityType::class, [
                'class' => Utilisateur::class, 'choice_label' => 'Email',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}

?>