<?php
namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Invoice implements UserInterface
{
    private $id;
    private $dateInvoice;
    private $numberInvoice;
    private $description;
    private $quantity;
    private $amount;
    private $amountIVA;
    private $totalIVA;

    public function __construct()
    {
        
    }

    public function getDateInvoice()
    {
        return $this->dateInvoice;
    }

    public function setDateInvoice($dateInvoice)
    {
        $this->dateInvoice = $dateInvoice;
    }

    public function getNumberInvoice()
    {
        return $this->numberInvoice;
    }

    public function setNumberInvoice($numberInvoice)
    {
        $this->numberInvoice = $numberInvoice;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmountIVA()
    {
        return $this->amountIVA;
    }

    public function setAmountIVA($amountIVA)
    {
        $this->amountIVA = $amountIVA;
    }

    public function getTotalIVA()
    {
        return $this->totalIVA;
    }

    public function setTotalIVA($totalIVA)
    {
        $this->totalIVA = $totalIVA;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return null;
    }

    public function getPassword()
    {
        return null;
    }

    public function getUsername()
    {
        return null;
    }

    public function eraseCredentials()
    {
        return null;
    }
}
?>