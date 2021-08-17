<?php

namespace Letsrock\CreatableModel\Bitrix;

trait HighloadCreatableTrait
{
    public function createByFactory(array $data)
    {
        if (empty($data)) return false;

        return $this->add($data);
    }
}