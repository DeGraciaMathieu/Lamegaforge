<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Video\Criteria;

class VideosController extends Controller
{
    /**
     * @param \App\Repositories\VideosRepository $video
     */
    public function __construct()
    {
        $this->videoRepository = app('App\Repositories\Video\VideoRepository');
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return view
     */
    public function index(Request $request, $sort = null)
    {
        $this->videoRepository->pushCriteria(new Criteria\Online);

        switch ($sort) {
            case 'rate':
                $this->videoRepository->pushCriteria(new Criteria\OrderByRate);
                break;
            case 'title':
                $this->videoRepository->pushCriteria(new Criteria\OrderByTitle);
                break;
            default:
                $this->videoRepository->pushCriteria(new Criteria\OrderByDesc);
                break;
        }

        if ($request->has('search')) {

            $columns = ['title', 'description'];
            $search = $request->get('search');

            $this->videoRepository->pushCriteria(new Criteria\Search($columns, $search));
        }

        return view('video.index', ['videos' => $this->videoRepository->paginate(20)]);
    }

    public function show(Request $request, $id)
    {
        $selectedVideo = app('services\video')->getOnlineVideoById($id);
        $comments = $selectedVideo->comments()->whereNull('related_comment')->get();
        $randomVideos = app('services\video')->randomOnlineVideos(5);

        return view('video.show', [
            'video' => $selectedVideo,
            'comments' => $comments,
            'randomVideos' => $randomVideos
        ]);
    }

    public function pushComment(Requests\StoreVideoCommentRequest $request)
    {
        app('services\video')->pushComment(
            $request->get('video_id'), 
            auth()->user()->id,
            $request->get('content'), 
            $request->get('related_comment')
        );

        return response()->json(['response' => 'success']);
    }
}
