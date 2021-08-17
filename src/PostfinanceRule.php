<?php

namespace App;

class PostfinanceRule implements RiskManagementRule
{
    public function filter(array $paymentMethods): array
    {
        unset($paymentMethods['postfinance']);

        return $paymentMethods;
    }
}
