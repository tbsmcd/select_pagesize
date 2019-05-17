<?php

class select_pagesize extends rcube_plugin
{
    public $task = 'settings';

    function init()
    {
        $rcube = rcube::get_instance();
        $this->add_hook('preferences_save', [$this, 'preferences_save']);
        $this->include_script('js/select_pagesize.js');
    }

    function preferences_save($args)
    {
        if ($args['prefs']['mail_pagesize'] > 50) {
            $args['prefs']['mail_pagesize'] = 50;
        }
        return $args;
    }
}