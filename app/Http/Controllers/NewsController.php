<?php

namespace App\Http\Controllers;

use App\Http\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * @var NewsRepository
     */
    private $repository;

    /**
     * NewsController constructor.
     * @param NewsRepository $newsRepo
     */
    public function __construct(NewsRepository $newsRepo)
    {
        $this->repository = $newsRepo;
    }

    /**
     * Retrieve all news
     */
    public function getNews(Request $request)
    {
        $data = $this->repository->getNews();
        return view('main')->with('data', $data);
    }

    /**
     * Retrieve single news by id
     *
     * @param Request $request
     */
    public function getNewsById(Request $request)
    {
        $this->repository->getNewsById($request);
    }

    /**
     * Function to create news
     * @param Request $request
     */
    public function createNews(Request $request)
    {
        $this->repository->createNews($request);
    }

    /**
     * Function to update news
     *
     * @param Request $request
     */
    public function updateNews(Request $request)
    {
        $this->repository->updateNews($request);
    }

    /**
     * Function to delete news
     *
     * @param Request $request
     */
    public function deleteNews(Request $request)
    {
        $this->repository->deleteNews($request);
    }




}
