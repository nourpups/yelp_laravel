<?php

namespace App\Services\Organisation;

use App\Models\Comment as ModelsComment;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CommentService
{
    public string $username;
    public string $text;
    public int $organisation_id;
    public ?int $parent_comment_id;
    public ?int $user_id;
    public float $rate;
    public ?ModelsComment $model;

    public function __construct(
        string $username,
        string $text,
        float $rate,
        int $organisation_id,
        ?int $parent_comment_id,
        ?ModelsComment $model = null,
        ?int $user_id = null
    )
    {
        $this->username = $username;
        $this->text = $text;
        $this->organisation_id = $organisation_id;
        $this->rate = $rate;
        $this->parent_comment_id = $parent_comment_id;
        $this->user_id = $user_id;
        $this->model = $model;
        $this->init_model();
    }

    public function init_model(): ModelsComment
    {
        if(is_null($this->model)){
            $this->model = ModelsComment::create([
                'username' => $this->username,
                'organisation_id' => $this->organisation_id,
                'rate' => $this->rate,
                'parent_comment_id' => $this->parent_comment_id,
                'user_id' => $this->user_id,
            ]);
        }

        return $this->model;
    }

    public function add_media(string $file): Media
    {
        if(str_starts_with($file, 'http')){
            $media = $this->model
                ->addMediaFromUrl($file)
                ->toMediaCollection('comments');
        }else{
            // png
            list($type, $base_64) = explode(';', $file);
            list(, $mimeType) = explode(':', $type);
            list(, $data)      = explode(',', $base_64);
            $extension = MimeType::search($mimeType);
            $imgeData = base64_decode($data);
            $image_name = "/comments/" . time().'_comment.'.$extension;
            Storage::disk('public')->put($image_name, $imgeData);
            $media = $this->model
                ->addMediaFromDisk($image_name, "public")
                ->toMediaCollection('comments');
        }
        return $media;
    }

    public function validate_text(): string
    {
        if(is_null($this->model))
        {
            throw new \Exception('there should be model to validate text');
        }

        $dom = new \DomDocument();
        $dom->loadHtml($this->text, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $this->prevent_xss($dom);
        $this->find_images($dom);

        $content = $dom->saveHTML();
        $this->model->text = $content;
        $this->model->save();
        return $content;
    }

    public function prevent_xss(\DomDocument $dom): void
    {
        $scripts = $dom->getElementsByTagName('script');
        foreach($scripts as $script)
        {
            $script->parentNode->removeChild($script);
        }
    }

    public function find_images(\DomDocument $dom): void
    {
        $imageFile = $dom->getElementsByTagName('img');
        foreach($imageFile as $image){
            $data = $image->getAttribute('src');
            $media = $this->add_media($data);
            $image->setAttribute('src', $media->getUrl());
        }
    }
}
