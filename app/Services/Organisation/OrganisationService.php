<?php

namespace App\Services\Organisation;

use App\Models\Comment;
use App\Models\Organisation as ModelsOrganisation;

/**
 * Organisation - can have comments and many categories
 */
class OrganisationService
{
    public CommentService $comment;
    public ModelsOrganisation $model;

    public function __construct(int $orgnisation_id)
    {
        $this->model = ModelsOrganisation::findOrFail($orgnisation_id);
    }

    public function add_comment(
        string $text,
        string $username,
        float $rate,
        ?int $parent_comment_id
    ): Comment
    {
        $comment = new CommentService(
            text: $text,
            username: $username,
            rate: $rate,
            organisation_id: $this->model->id,
            parent_comment_id: $parent_comment_id
        );

        $comment->validate_text();
        return $comment->model;
    }
}
