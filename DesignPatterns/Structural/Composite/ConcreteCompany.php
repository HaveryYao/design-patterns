<?php

namespace DesignPatterns\Structural\Composite;

use function PHPUnit\Framework\objectEquals;

class ConcreteCompany extends Company
{
    protected array $children = [];

    public function add(Company $company): void
    {
        $this->children[] = $company;
    }

    public function remove(Company $company): void
    {
        $index = -1;
        foreach ($this->children as $key => $child) {
            if ($company === $child) {
                $index = $key;
                break;
            }
        }

        if ($index >= 0) {
            unset($this->children[$index]);
        }
    }

    public function lineOfDuty(): void
    {
        foreach ($this->children as $child) {
            $child->lineOfDuty();
        }
    }

    public function display($depth): void
    {
        $prefix = str_repeat('-', $depth);
        print $prefix . $this->name.PHP_EOL;
        foreach ($this->children as $child) {
            $child->display($depth + 2);
        }
    }
}