<?php

namespace App\Livewire\User;

use App\Models\User as userModel;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        Cache::store('redis')->remember('users_all', 3600, function () {
            return \App\Models\User::all();
        });
        $users = Cache::store('redis')->get('users_all');
        //dd($users); // Esto debe mostrar la colección de usuarios

        return view('livewire.user.user', compact('users'));
    }
}
