<?php
/**
 * Created by PhpStorm.
 * User: ordec
 * Date: 10/11/20
 * Time: 19:49
 */

namespace App\Http\Repositories;


use App\Http\Models\News;
use http\Env\Request;

class NewsRepository
{
    /**
     *
     * @return News[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getNews()
    {
        return News::all();
    }

    /**
     * @param $id
     * @return News|null
     */
    public function getNewsById($id)
    {
        return News::find($id);
    }

    /**
     * @param Request $request
     */
    public function createNews(Request $request)
    {
        $news = new News();

        $news->title = $request->input('title');
        $news->body = $request->input('body');

        $news->save();
    }

    /**
     * @param Request $request
     */
    public function updateNews(Request $request)
    {
        $id = $request->input('id');

        $news = News::find($id);

        $news->title = $request->input('title');
        $news->body = $request->input('body');

        $news->update();
    }

    /**
     * @param Request $request
     */
    public function deleteNews(Request $request)
    {
        $id = $request->input('id');

        $news = News::find($id);
        $news->delete();
    }

}