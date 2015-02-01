<?php

namespace NagParser\Definitions;

class Hostgroup extends Definition
{


    public function getHostgroupName()
    {
        return $this->getOption('hostgroup_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getMembers()
    {
        return $this->getOption('members');
    }

    public function getHostgroupMembers()
    {
        return $this->getOption('hostgroup_members');
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

} 