<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}