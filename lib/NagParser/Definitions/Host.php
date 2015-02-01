<?php

namespace NagParser\Definitions;

class Host extends Definition
{
    public function getHostname()
    {
        return $this->getOption('host_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getDisplayName()
    {
        return $this->getOption('display_name');
    }

    public function getAddress()
    {
        return $this->getOption('address');
    }

    public function getParents()
    {
        return $this->getOption('parents');
    }

    public function getHostgroups()
    {
        return $this->getOption('hostgroups');
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

    public function getObsessOverHost()
    {
        return $this->getOption('obsess_over_host');
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

    public function getFlapdetectionOptions()
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

    public function getContacts()
    {
        return $this->getOption('contacts');
    }

    public function getContactGroups()
    {
        return $this->getOption('contact_groups');
    }

    public function getNotificationInterval()
    {
        return $this->getOption('notification_interval');
    }

    public function getFirstNotificationDelay()
    {
        return $this->getOption('first_notification_delay');
    }

    public function getNotificationPeriod()
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

    public function getVrmlImage()
    {
        return $this->getOption('vrml_image');
    }

    public function getStatusmapImage()
    {
        return $this->getOption('statusmap_image');
    }

    public function get2dCoords()
    {
        return $this->getOption('2d_coords');
    }

    public function get3dCoords()
    {
        return $this->getOption('3d_coords');
    }
} 