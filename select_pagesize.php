<?php

class select_pagesize extends rcube_plugin
{
    public $task = 'settings';

    function init()
    {
        $rcmail = rcube::get_instance();
        $pagesize_options = $rcmail->config->get('pagesize_options');
        $rcmail->output->set_env('pagesize_options', $pagesize_options);
        $this->add_hook('preferences_save', [$this, 'preferences_save']);
        $this->include_script('js/select_pagesize.js');
    }

    function preferences_save($args)
    {
        $rcmail = rcube::get_instance();
        if (!in_array($args['prefs']['mail_pagesize'], $rcmail->config->get('pagesize_options'))) {
            $args['prefs']['mail_pagesize'] = $rcmail->config->get('pagesize_options')[0];
        }
        return $args;
    }
}