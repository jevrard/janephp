<?php

namespace Docker\Api\Validator;

class PluginConfigLinuxConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Capabilities' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'AllowAllDevices' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'Devices' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array'))))), 'allowExtraFields' => true)));
    }
}