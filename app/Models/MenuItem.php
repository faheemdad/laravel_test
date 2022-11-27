<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function childMenus() {
        return $this->hasMany( MenuItem::class, 'parent_id')->where('parent_id', '!=', NULL);
    }
}
