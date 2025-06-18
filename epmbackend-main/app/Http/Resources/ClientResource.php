<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'client_type' => $this->client_type, // ✅ Ensure it's included
            'contact_detail' => $this->contact_detail,
            'hire_on_id' => $this->hire_on_id,
            'company_name' => $this->company_name,
            'company_address' => $this->company_address,
            'project_type' => $this->project_type,
            'communication' => $this->communication,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
