<?php

namespace NagParser\Definitions;

class Serviceextinfo extends Definition
{

    public function getHostName()
    {
        return $this->getOption('host_name');
    }

    public function getServiceDescription()
    {
        return $this->getOption('service_description');
    }

    public function getNotes()
    {
        return $this->getOption('notes');
    }

    public function getNotesUrl()
    {
        return $this->getOption('notes_url');
    }

    public function getActionUrl()
    {
        return $this->getOption('action_url');
    }

    public function getIconImage()
    {
        return $this->getOption('icon_image');
    }

    public function getIconImageAlt()
    {
        return $this->getOption('icon_image_alt');
    }

} 