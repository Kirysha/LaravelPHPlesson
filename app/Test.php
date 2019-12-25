<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected $fillable = ['text','is_enabled'];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];

    public static function t1() {
        $maxId = Test::query()->max('id');
        $res = Test::query()->where('id',$maxId);
        Test::query()->where('id',$maxId)->update(array('text' => 'So what about pepito?', 'is_enabled'=>'1'));
        return $res;
    }

    public static function t2(int $id) {
        $res = Test::query()->where('id',$id)->first();
        return $res;
    }

    public static function t3(string $text) {
        $res = Test::query()->where('text',$text)->first();
        return $res;
    }
}
