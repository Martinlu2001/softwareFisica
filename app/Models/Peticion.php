<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Peticion
 *
 * @property $id
 * @property $name
 * @property $descripcion
 * @property $item
 * @property $cantidad
 * @property $aprobado
 * @property $time
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Peticion extends Model
{
    use HasFactory;
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'descripcion', 'item', 'cantidad', 'aprobado', 'time', 'date'];


}
