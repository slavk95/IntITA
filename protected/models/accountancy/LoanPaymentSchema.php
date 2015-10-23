<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 22.10.2015
 * Time: 14:39
 */

class LoanPaymentSchema implements IPaymentCalculator{

    private $loanValue;
    private $payCount;

    function __construct($loan, $payCount){
        $this->loanValue = $loan;
        $this->payCount = $payCount;
     }

    public function getSumma(IBillableObject $payObject){
        return $payObject->getBasePrice() * (1 + $this->loanValue/100);
    }

    public function getCloseDate(IBillableObject $payObject, $startDate){
        var_dump($startDate);die();
        return $startDate + $payObject->getDuration();
    }

    public function getInvoicesList(IBillableObject $payObject, $startDate){
        return [];
    }
}