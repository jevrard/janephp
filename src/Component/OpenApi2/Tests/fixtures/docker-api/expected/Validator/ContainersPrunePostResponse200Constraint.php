<?php

namespace Docker\Api\Validator;

class ContainersPrunePostResponse200Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('ContainersDeleted' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'SpaceReclaimed' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer'))))), 'allowExtraFields' => true)));
    }
}