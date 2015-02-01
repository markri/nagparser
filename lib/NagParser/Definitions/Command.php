<?php

namespace NagParser\Definitions;

class Command extends Definition
{

    public function getCommandLine()
    {
        return $this->getOption('command_line');
    }

    public function getCommandName()
    {
        return $this->getOption('command_name');
    }

} 