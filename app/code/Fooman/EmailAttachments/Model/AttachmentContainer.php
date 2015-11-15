<?php

namespace Fooman\EmailAttachments\Model;

class AttachmentContainer implements Api\AttachmentContainerInterface
{
    protected $attachments = [];

    public function hasAttachments()
    {
        return sizeof($this->attachments) >= 1;
    }

    public function addAttachment(Api\AttachmentInterface $attachment)
    {
        $this->attachments[] = $attachment;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function resetAttachments()
    {
        $this->attachments = [];
    }
}