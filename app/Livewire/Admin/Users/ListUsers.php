<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class ListUsers extends Component
{
    public $search = '';
    public $sortBy ='updated_at';
    public $sortDir ='DESC';
    public $state = [];
    public $user;
    public $editUser;
    public $name;
    public $nick;
    public $img;
    public $userRoles = [];
    public $roles = [];
    public $editingState = 0;
    public $editingUserID = 0;
    public $perPage = 2;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

public function setSortBy($sortBy)
{
    if($this->sortBy === $sortBy)
    {
        $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
        return;
    }

    $this->sortBy = $sortBy;
    $this->sortDir = 'DESC';

}


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

    }

    public function updateUserRole()
    {
        $r = Role::whereIn('title', $this->userRoles)->pluck('id')->toArray();
        $this->editUser->roles()->sync($r);
        $this->editingState = 0;
        $this->editingUserID = 0;
    }

    public function cancelEdit()
    {
        $this->editingState = 0;
        $this->editingUserID = 0;
    }

    public function render()
    {   $users = User::search($this->search)->with('roles')->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $roles = Role::pluck('title', 'id');
        return view('livewire.admin.users.list-users', [
            'users' => $users,
            'roles' => $roles,
        ])->layout('components.admin.layouts.app');
    }
}
