<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Libraries\Repositories\ArticleRepository;
use Flash;
use Mitul\Controller\AppBaseController as BaseController;
use Response;

class ArticleController extends BaseController
{

	/** @var  ArticleRepository */
	private $articleRepository;

	function __construct(ArticleRepository $articleRepo)
	{
		$this->articleRepository = $articleRepo;
	}

	/**
	 * Display a listing of the Article.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = $this->articleRepository->paginate(10);

		return view('articles.index')
			->with('articles', $articles);
	}

	/**
	 * Show the form for creating a new Article.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Store a newly created Article in storage.
	 *
	 * @param CreateArticleRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateArticleRequest $request)
	{
		$input = $request->all();

		$article = $this->articleRepository->create($input);

		Flash::success('Article saved successfully.');

		return redirect(route('articles.index'));
	}

	/**
	 * Display the specified Article.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$article = $this->articleRepository->find($id);

		if(empty($article))
		{
			Flash::error('Article not found');

			return redirect(route('articles.index'));
		}

		return view('articles.show')->with('article', $article);
	}

	/**
	 * Show the form for editing the specified Article.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$article = $this->articleRepository->find($id);

		if(empty($article))
		{
			Flash::error('Article not found');

			return redirect(route('articles.index'));
		}

		return view('articles.edit')->with('article', $article);
	}

	/**
	 * Update the specified Article in storage.
	 *
	 * @param  int              $id
	 * @param UpdateArticleRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateArticleRequest $request)
	{
		$article = $this->articleRepository->find($id);

		if(empty($article))
		{
			Flash::error('Article not found');

			return redirect(route('articles.index'));
		}

		$article = $this->articleRepository->updateRich($request->all(), $id);

		Flash::success('Article updated successfully.');

		return redirect(route('articles.index'));
	}

	/**
	 * Remove the specified Article from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = $this->articleRepository->find($id);

		if(empty($article))
		{
			Flash::error('Article not found');

			return redirect(route('articles.index'));
		}

		$this->articleRepository->delete($id);

		Flash::success('Article deleted successfully.');

		return redirect(route('articles.index'));
	}
}
