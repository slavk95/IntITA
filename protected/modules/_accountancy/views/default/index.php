<?php
/* @var $this DefaultController */
//$this->pageTitle = 'INTITA - Бухгалтерія';
?>
<h1>Розділи</h1>
<ul>
    <li><?php echo CHtml::link('Список договорів',array('/_accountancy/userAgreements/index')); ?>
    <li><?php echo CHtml::link('Список рахунків',array('/_accountancy/invoices/index')); ?>
    <li><?php echo CHtml::link('Операції',array('/_accountancy/operation/index')); ?>
    <li><?php echo CHtml::link('Типи операцій',array('/_accountancy/operationType/index')); ?>
<ul>
