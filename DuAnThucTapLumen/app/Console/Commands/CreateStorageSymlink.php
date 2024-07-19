<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Container\Container;

class CreateStorageSymlink extends Command
{
    protected $signature = 'storage:link';
    protected $description = 'Create a symbolic link from "public/storage" to "storage/app/public"';

    protected $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $publicPath = Container::getInstance()->basePath('public/storage');
        $storagePath = Container::getInstance()->basePath('storage/app/public');

        if (file_exists($publicPath)) {
            $this->error('The "public/storage" directory already exists.');
        } else {
            $this->files->link($storagePath, $publicPath);
            $this->info('The [public/storage] directory has been linked.');
        }
    }
}
