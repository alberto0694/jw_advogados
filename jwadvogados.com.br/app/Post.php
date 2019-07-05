<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use \Config;

class Post extends Model
{
    protected $fillable = ['titulo', 'descricao', 'slug', 'ativo', 'imagem', 'day', 'month', 'year', 'date'];

    public function imagens()
    {
        return $this->hasMany('App\ImagemPost');
    }

    public function addImagem($imagem){
        return $this->imagens()->save($imagem);
    }

    public function getImagemAttribute()
    {
        $imagem = $this->imagens()->get()->first();
        if($imagem){
            return $this->imagens()->get()->first()->caminho;
        }else{
            return '';
        }
    }

    public function deleteImagens()
    {
        $this->hasMany('App\ImagemPost')->delete();
    }

    public function getDayAttribute()
    {
        return $this->created_at->day;
    }

    public function getMonthAttribute()
    {
        return Config::get('app.meses_res')[$this->created_at->month - 1];
    }

    public function getYearAttribute()
    {
        return $this->created_at->year;
    }

    public function getDateAttribute()
    {
        // return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y');
        return Carbon::parse($this->created_at)->format('d/m/Y');

    }
}
