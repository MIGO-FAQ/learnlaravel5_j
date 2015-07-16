<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ArticleRepository;
use App\Models\Article;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as Controller;
use Response;

class ArticleAPIController extends Controller
{
	/** @var  ArticleRepository */
	private $articleRepository;

	function __construct(ArticleRepository $articleRepo)
	{
		$this->articleRepository = $articleRepo;
	}

	/**
	 * Display a listing of the Article.
	 * GET|HEAD /articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = $this->articleRepository->all();

		return $this->sendResponse($articles->toArray(), "Articles retrieved successfully");
	}

	/**
	 * Show the form for creating a new Article.
	 * GET|HEAD /articles/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Article in storage.
	 * POST /articles
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Article::$rules) > 0)
			$this->validateRequestOrFail($request, Article::$rules);

		$input = $request->all();

		$articles = $this->articleRepository->create($input);

		return $this->sendResponse($articles->toArray(), "Article saved successfully");
	}

	/**
	 * Display the specified Article.
	 * GET|HEAD /articles/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$article = $this->articleRepository->apiFindOrFail($id);

		return $this->sendResponse($article->toArray(), "Article retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Article.
	 * GET|HEAD /articles/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Article in storage.
	 * PUT/PATCH /articles/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		$article = $this->articleRepository->apiFindOrFail($id);

		$article = $this->articleRepository->updateRich($input, $id);

		return $this->sendResponse($article->toArray(), "Article updated successfully");
	}

	/**
	 * Remove the specified Article from storage.
	 * DELETE /articles/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->articleRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Article deleted successfully");
	}
}
