<?php

namespace Sergeydrak\SubscriptionBundle\Form;

use Doctrine\ORM\EntityRepository;
use Sergeydrak\SubscriptionBundle\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Sergeydrak\SubscriptionBundle\Controller\RiderController;

class SubscriptionType extends AbstractType
{

    private $rider;

    public function __construct(RiderController $rider)
    {
        $this->rider = $rider;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add(
            'name',
            TextType ::class,
            [
              'label' => false,
              'required' => true,

              'attr' => [
                'placeholder' => 'Name',
                'class' => 'form-control',
              ],
              'constraints' => [
                new NotBlank(
                  ['message' => 'Name  cannot be blank']
                ),
                new Length(null, 5, 15),
              ],
            ]
          )
          ->add(
            'email',
            EmailType::class,
            [
              'label' => false,
              'required' => true,

              'attr' => [
                'placeholder' => 'Email',
                'class' => 'form-control',
              ],
              'constraints' => [
                new NotBlank(
                  ['message' => 'Email  cannot be blank']
                ),
                new Email(
                  ['message' => 'Please enter a valid email address.']
                ),
                new Length(null, 8, 30),
                new Callback(
                  [
                    $this,
                    'checkUniqueEmail',
                  ]
                ),
              ],

            ]
          )
          ->add(
            'category',
            EntityType::class,
            [
              'class' => Category::class,
              'query_builder' => function (EntityRepository $er) {
                  return $er->createQueryBuilder('cat')
                    ->orderBy('cat.name', 'ASC');
              },
              'required' => true,
              'choice_label' => 'name',
              'label' => false,
              'placeholder' => 'Select a category',
              'constraints' => [
                new NotBlank(
                  ['message' => 'Category  cannot be blank']
                ),
              ],
            ]
          );
    }

    public function checkUniqueEmail(
      $value,
      ExecutionContextInterface $context
    ) {
        $form = $context->getRoot();
        $data = $form->getData();
        $array_data = $this->rider->readLineByLine();

        foreach ($array_data as $value) {
                $mark = array_search($data['email'],$value);
        }

        if ($mark !== false) {
            $context
              ->buildViolation('The entered email is present in the system.')
              ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
              // Configure your form options here
          ]
        );
    }

}
