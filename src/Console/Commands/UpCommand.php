<?php

namespace CongnqNexlesoft\MaintenanceMode\Console\Commands;

class UpCommand extends Command
{
    /**
     * @var string
     */
    protected $name = 'up';

    /**
     * @var string
     */
    protected $description = 'Bring the application out of maintenance mode.';

    /**
     * Bring the application out of maintenance mode.
     */
    public function handle()
    {
        if ($this->maintenance->isDownMode()) {
            $this->setUpMode();
        } else {
            $this->info('The application was already alive.');
        }
    }
}
