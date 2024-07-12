<?php

namespace App\Models\Readonly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;
use App\Models\User;

class PostReadonly extends Model
{
    use ReadOnlyTrait;

    protected $table = 'posts';
    protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['author'];

    protected function author(): Attribute
    {
        return new Attribute(
            get: fn () => User::find($this->user_id)->name,
        );
    }
}
