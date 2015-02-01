<?php

namespace NagParser\Definitions;

class Servicedependency extends Definition
{

    public function getDependentHostName()
    {
        return $this->getOption('dependent_host_name');
    }

    public function getDependentHostgroupName()
    {
        return $this->getOption('dependent_hostgroup_name');
    }

    public function getServicegroupName()
    {
        return $this->getOption('servicegroup_name');
    }

    public function getDependentServicegroupName()
    {
        return $this->getOption('dependent_servicegroup_name');
    }

    public function getDependentServiceDescription()
    {
        return $this->getOption('dependent_service_description');
    }

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

    public function getInheritsParent()
    {
        return $this->getOption('inherits_parent');
    }

    public function getExecutionFailureCriteria()
    {
        return $this->getOption('execution_failure_criteria');
    }

    public function getNotificationFailureCriteria()
    {
        return $this->getOption('notification_failure_criteria');
    }

    public function getDependencyPeriod()
    {
        return $this->getOption('dependency_period');
    }
} 