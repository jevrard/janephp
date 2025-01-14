<?php

namespace Github\Exception;

class IssuesListEventsForTimelineUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \Github\Model\ResponsePreviewHeaderMissing
     */
    private $responsePreviewHeaderMissing;
    public function __construct(\Github\Model\ResponsePreviewHeaderMissing $responsePreviewHeaderMissing)
    {
        parent::__construct('Preview Header Missing');
        $this->responsePreviewHeaderMissing = $responsePreviewHeaderMissing;
    }
    public function getResponsePreviewHeaderMissing() : \Github\Model\ResponsePreviewHeaderMissing
    {
        return $this->responsePreviewHeaderMissing;
    }
}