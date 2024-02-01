<?php

namespace App\Console\Commands;

use App\Admin\Homepage\Models\HpSetting;
use App\Models\Admin\User;
use Illuminate\Console\Command;
use Nette\Utils\Validators;

class ResetAdminPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset-admin-password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset admin password';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $email = $this->ask('email');

        // if (!Validators::isEmail($email)) {
        //     $this->error('Invalid email, please check your email address');
        //     return Command::FAILURE;
        // }

        // Send to mail
        return Command::SUCCESS;
    }
}
