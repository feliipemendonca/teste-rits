<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Content extends Model
{
    use Sluggable;

    protected $table = 'contents';

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function files()
    {
        return $this->belongsTo('App\Http\Model\Files','file_id');
    }

    public function setData(&$content, $request)
    {
        $content->user_id = auth()->user()->id;
        $content->title = $request['title'];
        $content->subtitle = $request['subtitle'];
        $content->content = $request['content'];
        $content->video = $request['video'] ? $request['video'] : '';
    }
}
