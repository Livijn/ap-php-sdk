<?php

$subscription = new \AlternativePayments\Model\Subscription();
$subscription->setPlanId("pln_f0e8ddfxxxe");
$subscription->setCustomerId("cus_e0b56f09fxxxx5b");
$subscription->setPaymentId("pay_f2d95bddaxxxx5aa9");
$subscription->setIPAddress("127.0.0.1");
$res = \AlternativePayments\Subscription :: post($subscription);

var_dump($res);
