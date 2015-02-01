<?php

namespace NagParser\Definitions;

class Hostescalation extends Definition
{

    public function getHostName()
    {
        return $this->getOption('host_name');
    }

    public function getHostgroupName()
    {
        return $this->getOption('hostgroup_name');
    }

    public function getContacts()
    {
        return $this->getOption('contacts');
    }

    public function getContactGroups()
    {
        return $this->getOption('contact_groups');
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

    public function getEscalationPeriod()
    {
        return $this->getOption('escalation_period');
    }

    public function getEscalationOptions()
    {
        return $this->getOption('escalation_options');
    }




} 