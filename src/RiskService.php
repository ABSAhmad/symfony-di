<?php

namespace App;

class RiskService
{
    /**
     * @param RiskManagementRule[] $riskRules
     */
    public function __construct(private iterable $riskRules)
    {
    dd(iterator_to_array($riskRules));
    }

    public function getAvailableMethods()
    {
        $paymentMethods = [
            'paypal' => 'PayPal',
            'postfinance' => 'Postfinance',
            'visa' => 'Visa',
            'mastercard' => 'MasterCard',
        ];

        foreach ($this->riskRules as $riskRule) {
            $paymentMethods = $riskRule->filter($paymentMethods);
        }

        return $paymentMethods;
    }
}
