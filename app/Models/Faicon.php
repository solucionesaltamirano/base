<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faicon
 * @package App\Models
 * @version February 3, 2021, 7:47 pm UTC
 *
 * @property \App\Models\Categoryfaicon $categoryfaicon
 * @property string $value
 * @property integer $categoryfaicon_id
 */
class Faicon extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'faicons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'value',
        'categoryfaicon_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'value' => 'string',
        'categoryfaicon_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'value' => 'required|string|max:45',
        'categoryfaicon_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoryfaicon()
    {
        return $this->belongsTo(\App\Models\Categoryfaicon::class, 'categoryfaicon_id');
    }
}
