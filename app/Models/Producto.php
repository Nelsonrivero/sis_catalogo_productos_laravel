<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre_producto
 * @property $referencia
 * @property $talla
 * @property $observaciones
 * @property $marca_id
 * @property $cantidad_inventario
 * @property $fecha_embarque
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre_producto' => 'required',
		'referencia' => 'required',
		'talla' => 'required',
		'marca_id' => 'required',
		'cantidad_inventario' => 'required',
		'fecha_embarque' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_producto','referencia','talla','observaciones','marca_id','cantidad_inventario','fecha_embarque'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
        return $this->belongsTo(Marca::class, 'marca_id');
    }
    

}
