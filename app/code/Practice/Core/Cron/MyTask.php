<?php
namespace Practice\Core\Cron;

class MyTask
{
    public function execute()
    {
        // Add your custom logic here
        file_put_contents(BP . '/var/log/mytask.log', "Cron Executed at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
    }
}
