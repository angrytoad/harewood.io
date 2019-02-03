<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 03/02/2019
 * Time: 02:00
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class ContactFormSubmission extends Model
{
    use Uuids;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
        'created_at',
        'updated_at'
    ];
}
