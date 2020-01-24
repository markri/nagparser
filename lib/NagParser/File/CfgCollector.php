<?php

namespace NagParser\File;


class CfgCollector
{
    /**
     * @var array
     */
    private $paths = array();

    /**
     * @var string
     */
    private $mergedContent;

    /**
     * Enter nagios config directory e.g. /usr/local/nagios/etc
     * @param string $directory
     */
    public function __construct($directory)
    {
        $directoryIterator = new \RecursiveDirectoryIterator($directory);
        $iterator = new \RecursiveIteratorIterator($directoryIterator);

        $cfgFiles = new \RegexIterator($iterator, '#.+\.cfg$#i', \RecursiveRegexIterator::GET_MATCH);

        foreach($cfgFiles as $cfgFile){
            $this->paths[] = $cfgFile[0];
        }
    }


    /**
     * Concat content of all files into one string, and return it.
     *
     * @return string
     */
    public function getMergedContent()
    {
        if ($this->mergedContent) {
            return $this->mergedContent;
        }

        $content = '';
        foreach ($this->paths as $path) {
            $content.= file_get_contents($path) . "\n";
        }

        $this->mergedContent = $content;

        return $this->mergedContent;
    }
} 