<?php

namespace App\Repositories\admin;

use App\Models\state;

class AdminStateRepository implements AdminStateRepositoryInterface
{
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
}
