<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BranchProtectionRequiredStatusChecksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BranchProtectionRequiredStatusChecks';
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
        $object = new \Github\Model\BranchProtectionRequiredStatusChecks();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('enforcement_level', $data)) {
            $object->setEnforcementLevel($data['enforcement_level']);
        }
        if (\array_key_exists('contexts', $data)) {
            $values = array();
            foreach ($data['contexts'] as $value) {
                $values[] = $value;
            }
            $object->setContexts($values);
        }
        if (\array_key_exists('contexts_url', $data)) {
            $object->setContextsUrl($data['contexts_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        $data['enforcement_level'] = $object->getEnforcementLevel();
        $values = array();
        foreach ($object->getContexts() as $value) {
            $values[] = $value;
        }
        $data['contexts'] = $values;
        if (null !== $object->getContextsUrl()) {
            $data['contexts_url'] = $object->getContextsUrl();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchProtectionRequiredStatusChecksConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}