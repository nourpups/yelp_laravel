<?php
namespace App\Services\Media;

use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PathGenerator extends DefaultPathGenerator
{
    public function getPath(Media $media): string
    {
        return parent::getPath($media);
        // return $media->collection_name.'/'.$media->model_id.'/'.$path;
    }

    protected function getBasePath(Media $media): string
    {
        $prefix = $media->collection_name.'/'.$media->model_id;
        return $prefix . '/' . $media->getKey();
    }
}
