<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($formData, $stateId)
    {
        state::query()->updateOrCreate(
            [
                'id' => $stateId,
            ],
            [
                'name' => $formData['name'],
                'country_id' => $formData['countryId']
            ]
        );
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
