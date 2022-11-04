<?php

namespace Modules\Transaction\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class IncomingWood
 * @package App\Models
 * @version November 4, 2022, 7:10 pm WIB
 *
 * @property integer $template_wood_id
 * @property integer $supplier_id
 * @property integer $warehouse_id
 * @property integer $wood_type_id
 * @property integer $serial_number
 * @property string|\Carbon\Carbon $date
 * @property string $number_vehicles
 * @property boolean $type
 * @property number $total_volume
 * @property integer $created_by
 * @property integer $updated_by
 * @property string|\Carbon\Carbon $created_at
 * @property string|\Carbon\Carbon $updated_at
 */
class IncomingWood extends Model
{

    use HasFactory;

    public $table = 'incoming_wood';
    
    public $timestamps = true;

    public $fillable = [
        'template_wood_id',
        'supplier_id',
        'warehouse_id',
        'wood_type_id',
        'serial_number',
        'date',
        'number_vehicles',
        'type',
        'total_volume',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'template_wood_id' => 'integer',
        'supplier_id' => 'integer',
        'warehouse_id' => 'integer',
        'wood_type_id' => 'integer',
        'serial_number' => 'integer',
        'date' => 'datetime',
        'number_vehicles' => 'string',
        'type' => 'boolean',
        'total_volume' => 'float',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'template_wood_id' => 'nullable|integer',
        'supplier_id' => 'nullable|integer',
        'warehouse_id' => 'nullable|integer',
        'wood_type_id' => 'nullable|integer',
        'serial_number' => 'nullable|integer',
        'date' => 'nullable',
        'number_vehicles' => 'nullable|string|max:15',
        'type' => 'nullable|boolean',
        'total_volume' => 'nullable|numeric',
        'created_by' => 'nullable|integer',
        'updated_by' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
