<?php

namespace NagParser\Definitions;

class Service extends Definition
{
    public function getHostName()
    {
        return $this->getOption('host_name');
    }

    public function getHostgroupName()
    {
        return $this->getOption('hostgroup_name');
    }

    public function getServiceDescription()
    {
        return $this->getOption('service_description');
    }

    public function getDisplayName()
    {
        return $this->getOption('display_name');
    }

    public function getServicegroups()
    {
        return $this->getOption('servicegroups');
    }

    public function getIsVolatile()
    {
        return $this->getOption('is_volatile');
    }

    public function getCheckCommand()
    {
        return $this->getOption('check_command');
    }

    public function getInitialState()
    {
        return $this->getOption('initial_state');
    }

    public function getMaxCheckAttempts()
    {
        return $this->getOption('max_check_attempts');
    }

    public function getCheckInterval()
    {
        return $this->getOption('check_interval');
    }

    public function getRetryInterval()
    {
        return $this->getOption('retry_interval');
    }

    public function getActiveChecksEnabled()
    {
        return $this->getOption('active_checks_enabled');
    }

    public function getPassiveChecksEnabled()
    {
        return $this->getOption('passive_checks_enabled');
    }

    public function getCheckPeriod()
    {
        return $this->getOption('check_period');
    }

    public function getObsessOverService()
    {
        return $this->getOption('obsess_over_service');
    }

    public function getCheckFreshness()
    {
        return $this->getOption('check_freshness');
    }

    public function getFreshnessTreshold()
    {
        return $this->getOption('freshness_threshold');
    }

    public function getEventHandler()
    {
        return $this->getOption('event_handler');
    }

    public function getEventHandlerEnabled()
    {
        return $this->getOption('event_handler_enabled');
    }

    public function getLowFlapTreshold()
    {
        return $this->getOption('low_flap_threshold');
    }

    public function getHighFlapTreshold()
    {
        return $this->getOption('high_flap_threshold');
    }

    public function getFlapDetectionEnabled()
    {
        return $this->getOption('flap_detection_enabled');
    }

    public function getFlapDetectionOptions()
    {
        return $this->getOption('flap_detection_options');
    }

    public function getProcessPerfData()
    {
        return $this->getOption('process_perf_data');
    }

    public function getRetainStatusInformation()
    {
        return $this->getOption('retain_status_information');
    }

    public function getRetainNonstatusInformation()
    {
        return $this->getOption('retain_nonstatus_information');
    }

    public function getNotificationInterval()
    {
        return $this->getOption('notification_interval');
    }

    public function getFirstNotificationDelay()
    {
        return $this->getOption('first_notification_delay');
    }

    public function getNotificicationPeriod()
    {
        return $this->getOption('notification_period');
    }

    public function getNotificationOptions()
    {
        return $this->getOption('notification_options');
    }

    public function getNotificationsEnabled()
    {
        return $this->getOption('notifications_enabled');
    }

    public function getContacts()
    {
        return $this->getOption('contacts');
    }

    public function getContactGroups()
    {
        return $this->getOption('contact_groups');
    }

    public function getStalkingOptions()
    {
        return $this->getOption('stalking_options');
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