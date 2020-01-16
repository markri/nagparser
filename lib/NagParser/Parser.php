<?php
namespace NagParser;

use NagParser\Definitions\Definition;
use NagParser\File\CfgCollector;


class Parser
{
    private $content;

    private $definitions = array();

    /**
     * @param string $directory
     */
    public function __construct($directory)
    {
        if (!file_exists($directory)) {
            throw new \InvalidArgumentException(sprintf('Root dir %s doesnt exist', $directory));
        }

        $cfgCollector = new CfgCollector($directory);
        $this->content = $cfgCollector->getMergedContent();
    }

    /**
     *
     */
    public function parse()
    {
        $this->removeComments();
        $this->parseDefinitions();
    }

    /**
     * Removes all comments from files
     */
    private function removeComments()
    {
        $this->content = preg_replace('/[#;].*/', '', $this->content);
    }

    /**
     * Parses all definitions
     */
    private function parseDefinitions()
    {
        preg_match_all('/define\s+(.+?)\s*{(.+?)}/is', $this->content, $matches);

        $definitions = $matches[1];

        foreach ($definitions as $key => $definitionName) {

            $class = sprintf('NagParser\Definitions\%s', ucfirst($definitionName));

            if (!class_exists($class)){
                throw new \Exception(sprintf('Invalid definition type %s found', $definitionName));
            }

            $definition = new $class($definitionName, $matches[2][$key]);
            $this->definitions[] = $definition;
        }
    }

    /**
     * Returns all definitions, or a subset if definition type is given
     *
     * @param string $type
     * @return array
     */
    public function getDefinitions($type = null)
    {
        if ($type == null) {
            return $this->definitions;
        }

        $return = array();

        foreach ($this->definitions as $definition) {
            /**
             * @var Definition $definition
             */
            if ($definition->getType() == $type) {
                $return[] = $definition;
            }
        }

        return $return;
    }

    public function getServiceDefinitions()
    {
        return $this->getDefinitions('service');
    }

    public function getHostDefinitions()
    {
        return $this->getDefinitions('host');
    }

    public function getCommandDefinitions()
    {
        return $this->getDefinitions('command');
    }

    public function getContactDefinitions()
    {
        return $this->getDefinitions('contact');
    }

    public function getContactgroupDefinitions()
    {
        return $this->getDefinitions('contactgroup');
    }

    public function getHostdependencyDefinitions()
    {
        return $this->getDefinitions('hostdependency');
    }

    public function getHostescalationDefinitions()
    {
        return $this->getDefinitions('hostescalation');
    }

    public function getHostextinfoDefinitions()
    {
        return $this->getDefinitions('hostextinfo');
    }

    public function getHostgroupDefinitions()
    {
        return $this->getDefinitions('hostgroup');
    }

    public function getServicedependencyDefinitions()
    {
        return $this->getDefinitions('servicedependency');
    }

    public function getServiceescalationDefinitions()
    {
        return $this->getDefinitions('serviceescalation');
    }

    public function getServiceextinfoDefinitions()
    {
        return $this->getDefinitions('serviceextinfo');
    }

    public function getServicegroupDefinitions()
    {
        return $this->getDefinitions('servicegroup');
    }

    public function getTimeperiodDefinitions()
    {
        return $this->getDefinitions('timeperiod');
    }

}