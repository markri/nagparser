<?php

namespace NagParser\Definitions;

class Contact extends Definition
{
    public function getContactName()
    {
        return $this->getOption('contact_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getContactGroups()
    {
        return $this->getOption('contactgroups');
    }

    public function getHostNotificationsEnabled()
    {
        return $this->getOption('host_notifications_enabled');
    }

    public function getServiceNotificationsEnabled()
    {
        return $this->getOption('service_notifications_enabled');
    }

    public function getHostNotificationPeriod()
    {
        return $this->getOption('host_notification_period');
    }

    public function getServiceNotificationPeriod()
    {
        return $this->getOption('service_notification_period');
    }

    public function getHostNotificationOptions()
    {
        return $this->getOption('host_notification_options');
    }

    public function getServiceNotificationOptions()
    {
        return $this->getOption('service_notification_options');
    }

    public function getHostNotificationCommands()
    {
        return $this->getOption('host_notification_commands');
    }

    public function getServiceNotificationCommands()
    {
        return $this->getOption('service_notification_commands');
    }

    public function getEmail()
    {
        return $this->getOption('email');
    }

    public function getPager()
    {
        return $this->getOption('pager');
    }

    public function getCanSubmitCommands()
    {
        return $this->getOption('can_submit_commands');
    }

    public function getRetainStatusInformation()
    {
        return $this->getOption('retain_status_information');
    }

    public function getRetainNonStatusInformation()
    {
        return $this->getOption('retain_nonstatus_information');
    }


} 