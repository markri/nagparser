<?php

namespace NagParser\Definitions;

class Servicegroup extends Definition
{

    public function getServicegroupName()
    {
        return $this->getOption('servicegroup_name');
    }

    public function getAlias()
    {
        return $this->getOption('alias');
    }

    public function getMembers()
    {
        return $this->getOption('members');
    }

    public function getServicegroupMembers()
    {
        return $this->getOption('servicegroup_members');
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