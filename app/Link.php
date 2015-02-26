<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model {

	protected $guarded = [
        'id',
    ];

    public function committee(){
        return $this->belongsTo('App\Committee', 'committee');
    }

}
