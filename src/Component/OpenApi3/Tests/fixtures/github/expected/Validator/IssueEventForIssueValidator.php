<?php

namespace Github\Validator;

class IssueEventForIssueValidator implements \Github\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('id' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'node_id' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'url' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'actor' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')))), 'event' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'commit_id' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'commit_url' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'created_at' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'sha' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'html_url' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'message' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'issue_url' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'updated_at' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'author_association' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'body' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'lock_reason' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'submitted_at' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'state' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'pull_request_url' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'body_html' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'body_text' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string'))))), 'allowExtraFields' => false)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Github\Validator\ValidationException($violations);
        }
    }
}