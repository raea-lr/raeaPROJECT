<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameUser')
            ->add('mailUser')
            ->add('mdpUser')
            ->add('telUser')
            ->add('roleUser', ChoiceType::class,[
                'required'=> true,
                'multiple'=> false,
                'expanded'=> false,
                'choises' => [
                    'User'=> 'ROLE_USER',
                    'Admin'=> 'ROLE_ADMIN',
                ],
            ])
        ;
        $builder->get('roleUser')
                ->addModelTransformer(new CallbackTransformer(
                    function ($roleUserArray){
                        return count ($roleUserArray) ? $roleUserArray[0] : null;
                    },
                    function ($roleUserString){
                        return [$roleUserString];
                    }
                ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
