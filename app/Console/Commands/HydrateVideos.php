<?php

namespace App\Console\Commands;

use Youtube;
use DateInterval;
use Illuminate\Console\Command;
use App\Repositories\Video\VideoRepository;

class HydrateVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:hydrate-videos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $videos = $this->videoRepository->all();

        $videos->each(function($video) {
            $this->hydrate($video);
        });
    }

    protected function hydrate($video)
    {
        $youtube = Youtube::getVideoInfo($video->youtube_id);

        $params = [];

        $params['online'] = false;

        if ($youtube) {
            $params['online'] = true;
            $params['title'] = $youtube->snippet->title;
            $params['description'] = $youtube->snippet->description;
            $params['view_count'] = $youtube->statistics->viewCount;
            $params['like_count'] = $youtube->statistics->likeCount;
            $params['duration'] = $youtube->contentDetails->duration;
        }

        $this->videoRepository->update($params, $video->id);
    }
}
