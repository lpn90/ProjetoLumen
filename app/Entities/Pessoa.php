<?php
/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 14:39
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    /**
     * @return array
     */
    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }

}