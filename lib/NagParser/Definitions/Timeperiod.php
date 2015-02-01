<?php

namespace NagParser\Definitions;

class Timeperiod extends Definition
{

    public function getServicegroupMembers()
    {
        return $this->getOption('timeperiod_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getExclude()
    {
        return $this->getOption('exclude');
    }
} 