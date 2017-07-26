<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;
use App\Repositories\Criteria\Videos\Limit;
use App\Repositories\Criteria\Videos\Search;
use App\Repositories\Criteria\Videos\Random;
use App\Repositories\Criteria\Videos\Online;
use App\Repositories\Criteria\Videos\OrderByRate;
use App\Repositories\Criteria\Videos\OrderByDesc;
use App\Repositories\Criteria\Videos\OrderByTitle;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VideosController extends Controller
{
    /**
     * @param \App\Repositories\VideosRepository $video
     */
    // public function __construct(VideoRepository $videoRepository)
    // {
    //     $this->videoRepository = $videoRepository;
    // }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return view
     */
    // public function index(Request $request, $sort = null)
    // {
    //     $this->videoRepository->pushCriteria(new Online);

    //     switch ($sort) {
    //         case 'rate':
    //             $this->videoRepository->pushCriteria(new OrderByRate);
    //             break;
    //         case 'title':
    //             $this->videoRepository->pushCriteria(new OrderByTitle);
    //             break;
    //         default:
    //             $this->videoRepository->pushCriteria(new OrderByDesc);
    //             break;
    //     }

    //     if ($request->has('search')) {

    //         $columns = ['title', 'description'];
    //         $search = $request->get('search');

    //         $this->videoRepository->pushCriteria(new Search($columns, $search));
    //     }

    //     return view('video.index', ['videos' => $this->videoRepository->paginate(20)]);
    // }

    public function show(Request $request, $id)
    {
        $selectedVideo = app('services\video')->getOnlineVideoById($id);
        $comments = $selectedVideo->comments()->where('related_comment', '!=', '')->get();
        $randomVideos = app('services\video')->randomOnlineVideos(5);

        // foreach ($selectedVideo->comments()->where('related_comment', '!=', '')->get() as $comment) {
        //    dd($comment);
        // }

        // // $comments = $selectedVideo->comments()->where('related_comment', '!=', '')->get();
        // $comments = $selectedVideo->comments()->where('related_comment', '!=', '')->get();

        // dd($comments->first()->relatedComments);

        return view('video.show', [
            'video' => $selectedVideo,
            'comments' => $comments,
            'randomVideos' => $randomVideos
        ]);
    }

    public function pushComment(StoreVideoCommentRequest $request)
    {

        die("d");

     //    $selectedVideo = app('services\video')->pushComment($id);

     //    $video = Video::findOrFail('id', $request->get('video_id'));

     //    $params = [
     //        $request->all(),
     //        'user_id' => auth()->user()->id
     //    ];

     //    $comment = new Comment($params);

    	// $video->comments()->save($comment);
    }
}
