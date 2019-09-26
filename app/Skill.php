<?php

namespace App;

use App\Completable;
use App\Completion;
use App\Module;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model implements Completable
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_bonus' => 'boolean',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function completions()
    {
        return $this->morphMany(Completion::class, 'completable');
    }
}
