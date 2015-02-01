<?php

namespace NagParser\Definitions;

class Contactgroup extends Definition
{

    public function getContactGroupName()
    {
        return $this->getOption('contactgroup_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getMembers()
    {
        return $this->getOption('members');
    }

    public function getContactgroupMembers()
    {
        return $this->getOption('contactgroup_members');
    }

} 