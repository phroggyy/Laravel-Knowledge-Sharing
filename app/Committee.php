<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model {

	protected $guarded = [
        'id'
    ];

    public function links(){
        return $this->hasMany('App\Link', 'committee');
    }

}
