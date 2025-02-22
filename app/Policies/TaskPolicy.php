<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    public function delete(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    public function addDependency(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    public function removeDependency(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
