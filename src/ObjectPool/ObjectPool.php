<?php

namespace App\ObjectPool;

class ObjectPool
{
    private $objects = [];

    public function getObject()
    {
        if (empty($this->objects)) {
            return $this->createObject();
        } else {
            return array_pop($this->objects);
        }
    }

    public function releaseObject($object)
    {
        $this->objects[] = $object;
    }

    private function createObject()
    {
        return new \stdClass();
    }
}

