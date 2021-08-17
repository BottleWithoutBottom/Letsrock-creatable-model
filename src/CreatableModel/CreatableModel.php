<?php

namespace Letsrock\CreatableModel;

interface CreatableModel
{
    public function createByFactory(array $data);
}