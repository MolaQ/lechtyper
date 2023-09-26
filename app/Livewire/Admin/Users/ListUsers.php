<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class ListUsers extends Component
{
    public $state = [];
    public $user;
    public $editUser;
    public $name;
    public $nick;
    public $img;
    public $userRoles = [];
    public $roles = [];
    public $showEditModal = false;
    public $editingState = 0;
    public $editingUserID = 0;
    public $perPage = 1;

    use WithPagination;
    
    public function edit(User $user)
    {
        
        $this->editingState = 1;
        $this->editingUserID = $user->id;
        $this->editUser = $user;
        $this->roles = Role::pluck('title', 'id');
        $roles = [];
        $tab = $user->roles->toArray();
        foreach ($tab as $t) {
            array_push($roles, $t['title']);
        }
        $this->userRoles = $roles;
        $this->state = $user->toArray();
        $this->dispatch('show-form');
    }

    public function updateUserRole()
    {
        $r = Role::whereIn('title', $this->userRoles)->pluck('id')->toArray();
        $this->editUser->roles()->sync($r);
        //$this->dispatchBrowserEvent('hide-form', ['message' => 'Zaktualizowano uprawnienia użytkownika']);
        $this->editingState = 0;
        $this->editingUserID = 0;
    }

    public function cancelEdit()
    {
        $this->editingState = 0;
        $this->editingUserID = 0;
    }

    public function render()
    {   $paginator = User::paginate($this->perPage);
        $users = User::with('roles')->paginate($this->perPage);
        $roles = Role::pluck('title', 'id');
        return view('livewire.admin.users.list-users', [
            'users' => $users,
            'roles' => $roles,
            'paginator' => $paginator,
        ])->layout('components.admin.layouts.app');
    }
}
