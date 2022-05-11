<?php

namespace Tests\Feature;

use DesignPatterns\Structural\Composite\ConcreteCompany;
use DesignPatterns\Structural\Composite\FinanceDepartment;
use DesignPatterns\Structural\Composite\HRDepartment;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testCompany()
    {
        $root = new ConcreteCompany('北京总公司');
        $root->add(new HRDepartment('总公司人力'));
        $root->add(new FinanceDepartment('总公司财务'));

        $cmp1 = new ConcreteCompany('华北分公司');
        $cmp1->add(new HRDepartment('华北分公司人力'));
        $cmp1->add(new FinanceDepartment('华北分公司财务'));
        $root->add($cmp1);

        $cmp2 = new ConcreteCompany('杭州办事处');
        $cmp2->add(new HRDepartment('杭州办事处人力'));
        $cmp2->add(new FinanceDepartment('杭州办事处财务'));
        $cmp1->add($cmp2);

        $cmp3 = new ConcreteCompany('南京办事处');
        $cmp3->add(new HRDepartment('南京办事处人力'));
        $cmp3->add(new FinanceDepartment('南京办事处财务'));
        $cmp1->add($cmp3);
        $this->expectOutputString(<<<EOD
                                    总公司人力 员工培训招聘管理
                                    总公司财务 公司财务收支管理
                                    华北分公司人力 员工培训招聘管理
                                    华北分公司财务 公司财务收支管理
                                    杭州办事处人力 员工培训招聘管理
                                    杭州办事处财务 公司财务收支管理
                                    南京办事处人力 员工培训招聘管理
                                    南京办事处财务 公司财务收支管理
                                    -北京总公司
                                    ---总公司人力
                                    ---总公司财务
                                    ---华北分公司
                                    -----华北分公司人力
                                    -----华北分公司财务
                                    -----杭州办事处
                                    -------杭州办事处人力
                                    -------杭州办事处财务
                                    -----南京办事处
                                    -------南京办事处人力
                                    -------南京办事处财务
                                    
                                    EOD
);
        $root->lineOfDuty();
        $root->display(1);
    }
}