<?php

namespace App;

interface RiskManagementRule
{
    public function filter(array $paymentMethods): array;
}
