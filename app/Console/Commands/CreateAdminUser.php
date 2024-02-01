<?php

namespace App\Console\Commands;

use App\Models\Admin\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Validators;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user which login to admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Enter username');
        $password = $this->secret('Enter password');
        $email = $this->ask('Enter email');

        if (!Validators::isEmail($email)) {
            $this->error('Invalid email, please check your email address');
            return Command::FAILURE;
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();
    
        $this->info('User created successfully');
        return Command::SUCCESS;
    }
}
