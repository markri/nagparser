<?php

namespace NagParser\Definitions;

class Hostdependency extends Definition
{

    public function getDependentHostName()
    {
        return $this->getOption('dependent_host_name');
    }

    public function getDependentHostgroupName()
    {
        return $this->getOption('dependent_hostgroup_name');
    }

    public function getHostName()
    {
        return $this->getOption('host_name');
    }

    public function getHostgroupName()
    {
        return $this->getOption('hostgroup_name');
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