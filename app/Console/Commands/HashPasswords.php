<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HashPasswords extends Command
{
    protected $signature = 'hash:passwords';
    protected $description = 'Hashes all user passwords for security';

    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->password = Hash::make($user->password);
            $user->save();
        }
        $this->info('Passwords have been hashed successfully!');
    }
}
