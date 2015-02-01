<?php

namespace NagParser\Definitions;

class Serviceescalation extends Definition
{

    public function getHostName()
    {
        return $this->getOption('host_name');
    }

    public function getServiceDescription()
    {
        return $this->getOption('service_description');
    }

    public function getFirstNotification()
    {
        return $this->getOption('first_notification');
    }

    public function getLastNotification()
    {
        return $this->getOption('last_notification');
    }

    public function getNotificationInterval()
    {
        return $this->getOption('notification_interval');
    }

    public function getContactGroups()
    {
        return $this->getOption('contact_groups');
    }

} 