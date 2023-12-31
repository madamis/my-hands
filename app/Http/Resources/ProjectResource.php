<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$this->name,
            'link'=>$this->link,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'description'=>$this->description,
            'date_added'=>$this->created_at,
            'category'=>$this->categories,
        ];
        # return parent::toArray($request);
    }
}
