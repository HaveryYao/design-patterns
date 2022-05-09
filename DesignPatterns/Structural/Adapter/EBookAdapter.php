<?php

namespace DesignPatterns\Structural\Adapter;

class EBookAdapter extends Book
{

    protected EBookInterface $eBook;

    /**
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->passStart();
    }

    public function turnPage()
    {
        $this->eBook->passNext();
    }
}