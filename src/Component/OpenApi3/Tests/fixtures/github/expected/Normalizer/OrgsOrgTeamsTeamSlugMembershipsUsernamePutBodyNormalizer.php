<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrgsOrgTeamsTeamSlugMembershipsUsernamePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody();
        $validator = new \Github\Validator\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }
        $validator = new \Github\Validator\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}