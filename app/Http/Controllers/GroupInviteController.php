<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\GroupInvite;
use App\Actions\ProcessGroupInvite;

class GroupInviteController extends Controller
{

    public function __invoke(GroupInvite $request, ProcessGroupInvite $processInvite, Group $group)
    {
        $processInvite->onQueue()->execute($request, $group, Auth::user());

        return response()->json('Group Invites is being processed');
    }
}