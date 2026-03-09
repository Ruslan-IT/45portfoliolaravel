<?php

namespace App\Console\Commands;

use App\Models\BlogPost;
use App\Models\Work;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'app:generate-sitemap';

    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    //protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'));

        foreach (Work::all() as $work) {
            $sitemap->add("/works/{$work->slug}");
        }

        foreach (BlogPost::where('is_published', true)->get() as $post) {
            $sitemap->add("/blog/{$post->slug}");
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated!');
    }
}
