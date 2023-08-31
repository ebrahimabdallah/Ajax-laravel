<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;

class SearchAjax extends Model
{
    
    use Notifiable;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'full_text_searches.Name'  => 10,
            'full_text_searches.Email'   => 10,
            'full_text_searches.Age'   => 10,
            'full_text_searches.JobTittle'    => 10,
            'full_text_searches.Salary'  => 10,
            'full_text_searches.id'    => 10,
        ]
    ];

protected $fillable=[
    'Name','Email','JobTittle','Age','Salary',
];

}
