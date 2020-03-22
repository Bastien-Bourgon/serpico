<?php


namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class DeleteBookForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('id', NumberType::class, [
'label' => 'Id',
'required' => true,
]);
}

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => Book::class,
    ]);
}
}