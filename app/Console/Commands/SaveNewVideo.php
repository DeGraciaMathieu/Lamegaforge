<?php

namespace App\Console\Commands;

use Youtube;
use App\Models\Video;
use App\Models\Channel;
use Illuminate\Console\Command;
use App\Repositories\Video\VideoRepository;
use App\Repositories\Channel\ChannelRepository;

class SaveNewVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:save-new-video';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(VideoRepository $videoRepository, ChannelRepository $channelRepository)
    {
        $this->videoRepository = $videoRepository;
        $this->channelRepository = $channelRepository;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $channels = $this->channelRepository->all();

        foreach ($channels as $channel) {

            $listChannelVideos = $this->getListChannelVideos($channel);

            $listChannelVideos->filter(function($video) {

                $find = $this->videoRepository->findWhere(['youtube_id' => $video->id->videoId]);

                return $find->isEmpty();

            })->each(function($video) use($channel) {

                $this->videoRepository->create([
                    'channel_id' => $channel->id,
                    'youtube_id' => $video->id->videoId,
                    'published_at' => $video->snippet->publishedAt,
                    'title' => $video->snippet->title,
                    'description' => $video->snippet->description,
                ]);
            });
        }
    }

    protected function getListChannelVideos(Channel $channel)
    {
        $listChannelVideos = Youtube::listChannelVideos(
            $channel->youtube_id,
            50,
            'date'
        );

        return collect($listChannelVideos);
    }
}
