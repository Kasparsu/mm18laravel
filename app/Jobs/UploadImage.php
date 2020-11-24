<?php

namespace App\Jobs;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UploadImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $path;
    public $post;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, Post $post)
    {
        $this->post = $post;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fullPath = Storage::disk('public')->path($this->path);
        $img = \Intervention\Image\Facades\Image::make($fullPath);
        $img->greyscale();
        $img->save($fullPath);
        $image = new Image();
        $image->path = Storage::disk('public')->url($this->path);
        $image->post()->associate($this->post);
        $image->save();
    }
}
