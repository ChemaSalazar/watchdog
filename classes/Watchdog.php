<?php

class Watchdog
{
    //unique identifier for a specific log message.
    protected $id;

    //specifies the watchdog type id & label: this is created on another table.
    protected $type_id;
    protected $label;

    //this variable holds the log data.
    protected $description;

    //timestamp variables
    protected $ts_created;
    protected $ts_updated;
    protected $ts_archived;

    //variables attached to a user or system call.
    /*
     * example of usage:
     *            - application has users with editing rights and need to track or create a history of edits.
     *            - application has automation, and you want to specify which function or task triggered a log.
     * */
    protected $user_id;
    protected $system_id;

}