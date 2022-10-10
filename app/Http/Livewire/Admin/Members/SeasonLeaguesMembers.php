<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\League;
use App\Models\MembersList;
use App\Models\User;
use Livewire\Component;

class SeasonLeaguesMembers extends Component
{
    public $members = [];
    public $search = "M";
    public $league = 1;
    public $season = 1;

    public function setLeague($league)
    {
        $this->league = $league;
    }

    public function removeFromLeague($userId)
    {

        $member = MembersList::where('season_id', $this->season)
            ->where('user_id', $userId)->first();
        $member->user_id = null;
        $member->save();
    }

    public function render()
    {
        $ids = League::all()->map->only('id', 'short');

        $this->members = MembersList::with('season','user','league')
            ->where('season_id', $this->season)
            ->where('league_id', $this->league)
            ->get();

        //dd($this->members);
        return view('livewire.admin.members.season-leagues-members', [
            'ids' => $ids,
        ]);
    }
}
