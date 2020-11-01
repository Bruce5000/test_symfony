<?php
namespace App\Controller;

use App\Form\InvoiceType;
use App\Entity\Invoice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class InvoiceController extends AbstractController
{
    public function index(Request $request)
    {
        $invoice = new Invoice();
        $form = $this->createForm(InvoiceType::class, $invoice);
       
        if ($request->isMethod('POST'))
        {           
            $form->submit($request->request->get($form->getName()));
    
            if ($form->isSubmitted() && $form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $numberInvoice = $form["numberInvoice"]->getData();
                $dateInvoice = $form["dateInvoice"]->getData()->format('Y-m-d');
                $description = $form["description"]->getData();
                $quantity = $form["quantity"]->getData();
                $amount = $form["amount"]->getData();
                $amountIVA = $form["amountIVA"]->getData();
                $totalIVA = $form["totalIVA"]->getData();
                
                $RAW_QUERY1 = "INSERT INTO invoice (DateInvoice, NumberInvoice, IdClient) VALUES('$dateInvoice', $numberInvoice, 1);";
                $RAW_QUERY2 = "INSERT INTO row_invoice (IdInvoice, description, quantity, amount, amountIVA, totalIVA)
                 VALUES(1, '$description', $quantity, '$amount', '$amountIVA', '$totalIVA');";
                
                $statement1 = $em->getConnection()->prepare($RAW_QUERY1);
                $statement1->execute();
                $statement2 = $em->getConnection()->prepare($RAW_QUERY2);
                $statement2->execute();
                return new Response('Data entered successfully'); 
            }
        }
        
        return $this->render(
            'invoice.html.twig',
            array('form' => $form->createView())
        );  
    }
}
?>