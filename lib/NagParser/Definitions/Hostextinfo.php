<?php

namespace NagParser\Definitions;

class Hostextinfo extends Definition
{
    public function getEscalationOptions()
    {
        return $this->getOption('host_name');
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