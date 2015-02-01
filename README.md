Nagios Config Parser
====================

Nagios Config Parser a simple parser written in PHP that parses Nagios config files (.cfg) into PHP objects,
All definitions available in Nagios [Nagios doc](http://nagios.sourceforge.net/docs/3_0/objectdefinitions.html) are read
into PHP objects with getters for all options (easiness of autocompletion).

Currently it doesnt parse relations between definitions (yet).


Why?
====
I wanted easy Nagios CFG editing, without repeated configs. So I came up with this parser to read all available services in order
to create auto-generated servicegroups. This way I'm sure that no service will be left uncategorized, and would surely be in one
of my servicegroups.