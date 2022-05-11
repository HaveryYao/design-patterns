<?php

namespace DesignPatterns\Structural\Composite;

class FinanceDepartment extends Company
{

    public function add(Company $company): void
    {
    }

    public function remove(Company $company): void
    {
    }

    public function lineOfDuty(): void
    {
        print $this->name . ' 公司财务收支管理'.PHP_EOL;
    }

    public function display($depth): void
    {
        $prefix = str_repeat('-', $depth);
        print $prefix . $this->name.PHP_EOL;
    }
}