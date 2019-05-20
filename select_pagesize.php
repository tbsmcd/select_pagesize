<?php

class select_pagesize extends rcube_plugin
{
    public $task = 'settings';
    private $config;
    private $output;

    function init()
    {
        $rcmail = rcube::get_instance();
        $this->set_config($rcmail->config);
        $this->set_output($rcmail->output);

        $pagesize_options = $this->config->get('pagesize_options');
        $this->output->set_env('pagesize_options', $pagesize_options);

        $this->add_hook('preferences_save', [$this, 'preferences_save']);
        $this->include_script('js/select_pagesize.js');
    }

    function set_config($config)
    {
        $this->config = $config;
    }

    function set_output($output)
    {
        $this->output = $output;
    }

    function preferences_save($args)
    {
        if (!in_array($args['prefs']['mail_pagesize'], $this->config->get('pagesize_options'))) {
            $args['prefs']['mail_pagesize'] = $this->config->get('pagesize_options')[0];
        }
        return $args;
    }
}