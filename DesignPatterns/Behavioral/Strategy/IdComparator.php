<?php

namespace DesignPatterns\Behavioral\Strategy;

class IdComparator implements ComparatorInterface
{
    public function compare($dataA, $dataB): int
    {
        if ($dataA['id'] == $dataB['id']) {
            return 0;
        }

        return $dataA['id'] > $dataB['id'] ? 1 : -1;
    }
}