<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 14:41
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';
    protected $fillable = [
        'descricao',
        'codepais',
        'ddd',
        'prefixo',
        'sufixo'
    ];
    
    public  function getNumeroAttribute()
    {
        return "{$this->codepais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

}