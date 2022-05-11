<?php

namespace DesignPatterns\Structural\Composite;

class HRDepartment extends Company
{

    public function add(Company $company): void
    {
    }

    public function remove(Company $company): void
    {
    }

    public function lineOfDuty(): void
    {
        print $this->name . ' 员工培训招聘管理' . PHP_EOL;
    }

    public function display($depth): void
    {
        $prefix = str_repeat('-', $depth);
        print $prefix . $this->name.PHP_EOL;
    }
}