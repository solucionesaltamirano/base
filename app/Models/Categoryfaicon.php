<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Categoryfaicon
 * @package App\Models
 * @version January 29, 2021, 1:31 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $faicons
 * @property string $name
 * @property string $class
 */
class Categoryfaicon extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categoryfaicons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:45',
        'class' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function faicons()
    {
        return $this->hasMany(\App\Models\Faicon::class, 'categoryfaicon_id');
    }
}
