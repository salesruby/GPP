<?php

namespace App\Console\Commands;

use App\Blog;
use App\BlogSubscription;
use App\Mail\BlogAlertMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class BlogAlertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:alert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alert subscribed users of new blog post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $blog = Blog::where('alert', 0)->first();
        $subscribers = BlogSubscription::all();
        foreach ($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new BlogAlertMail($blog));
        }
        $blog->update(['alert' => 1]);
    }
}
