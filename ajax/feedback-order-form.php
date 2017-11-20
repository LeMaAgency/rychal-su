<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \WM\Common\Helper;

$form = new \WM\Forms\AjaxForm();
$form
    ->setRules(array(
        array('phone', 'required', array('message' => 'Телефон обязателен к заполненеию')),
        array('phone', 'phone', array('message' => 'Телефон дожен быть в формате +7 (988) 888-88-88')),
    ))
    ->setFields($_POST);

if($form->validate())
{
    $status = true;
    //отправка сообщения с событием FEEDBACK_FORM
    $status = $status && $form->sendMessage('FEEDBACK_ORDER_FORM', array(
            'PHONE' => $form->getField('phone'),
        ));

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));