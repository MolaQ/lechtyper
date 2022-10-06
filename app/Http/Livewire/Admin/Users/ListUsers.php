<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;

class ListUsers extends Component
{
    public $state = [];
    public $user;
    public $editUser;
    public $name;
    public $nick;
    public $img;
    public $a;
    public $userRoles = [];
    public $roles = [];

    public function edit(User $user)
    {

        $this->showEditModal = true;
        $this->editUser = $user;
        $this->name = $user->name;
        $this->nick = $user->screen_name;
        $this->img = $user->profile_image_url;
        $this->roles = Role::pluck('title', 'id');
        $roles = [];
        $tab = $user->roles->toArray();
        foreach ($tab as $t) {
            array_push($roles, $t['title']);
        }
        $this->userRoles = $roles;
        $this->state = $user->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function updateUserRole()
    {
        $r = Role::whereIn('title', $this->userRoles)->pluck('id')->toArray();
        $this->editUser->roles()->sync($r);
        $this->dispatchBrowserEvent('hide-form', ['message' => 'Zaktualizowano uprawnienia użytkownika']);
    }


    public function render()
    {
        $users = User::with('roles')->paginate(20);
        $roles = Role::pluck('title', 'id');
        return view('livewire.admin.users.list-users', [
            'users' => $users,
            'roles' => $roles,
        ]);
    }
}
