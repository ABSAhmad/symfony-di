<?php

namespace App;

class PaypalRule implements RiskManagementRule
{
    public function filter(array $paymentMethods): array
    {
        unset($paymentMethods['paypal']);

        return $paymentMethods;
    }
}
