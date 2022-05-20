<?php

namespace DesignPatterns\Behavioral\Strategy;


class DateComparator implements ComparatorInterface
{

    public function compare($dataA, $dataB): int
    {
        $dateA = new \DateTime($dataA['date']);
        $dateB = new \DateTime($dataB['date']);
        if ($dateA == $dateB) {
            return 0;
        }

        return $dateA > $dateB ? 1 : -1;
    }
}