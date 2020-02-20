<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
    	'name',
    	'image_path',
    	'description',
    ];

    /** Renders */
    public function renderName()
    {
    	return $this->name;
    }

    public function renderImage()
    {
    	$path = asset('storage/default_images/no-image.png');

    	if ($this->image_path):
    		$path = asset('storage/' . $this->image_path);
    	endif;

    	return $path;
    }

    public function renderDescription()
    {
    	return $this->description;
    }
}
