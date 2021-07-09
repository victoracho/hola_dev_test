<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr'=> array('class'=> 'form-control')
            ))
            ->add('username', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('password', PasswordType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('roles', ChoiceType::class, array(
                'choices' => array(
                    'Admin' => 'ROLE_ADMIN',
                    'Page 1' => 'ROLE_PAGE_1',
                    'Page 2' => 'ROLE_PAGE_2'
                ),
                'label' => false,
                'expanded' => true,
        ));
        $builder->get('roles')
        ->addModelTransformer(new CallbackTransformer(
            function ($rolesArray) {
                // transform the array to a string
                return count($rolesArray)? $rolesArray[0]: null;
            },
            function ($rolesString) {
                // transform the string back to an array
                return [$rolesString];
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}