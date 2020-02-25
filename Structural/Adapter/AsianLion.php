<?php
namespace DesignPatterns\Structural\Adapter;

class AsianLion implements Lion
{
    public function roar()
    {
        echo 'Asian Lion Roar';
    }
}