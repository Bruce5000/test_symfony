<?php
namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberInvoice', IntegerType::class)
            ->add('dateInvoice', DateType::class)
            ->add('description', TextType::class)
            ->add('quantity', IntegerType::class)
            ->add('amount', NumberType::class)
            ->add('amountIVA', NumberType::class)
            ->add('totalIVA', NumberType::class)
            ->add('submit', SubmitType::class)
        ;
    }   
}
?>