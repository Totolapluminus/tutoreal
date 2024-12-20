<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'preview_image' => $this->imageUrl,
            'is_published' => $this->is_published,
            'is_premium' => $this->is_premium,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'users' => $this->users,
            'topics' => $this->topics,
            'lessons' => $this->lessons,
            'reviews' => $this->reviews
        ];
    }
}
