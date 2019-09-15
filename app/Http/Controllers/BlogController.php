<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Article;

class BlogController extends Controller
{
    protected $article;

    function __construct(Article $article)
    {
        // Article モデルクラスのインスタンスを作成
        // 「依存注入」により、コンストラクタの引数にタイプヒントを指定するだけで、
        // インスタンスが生成される（コンストラクターインジェクション）
        $this->article = $article;
    }

    public function form()
    {
        return view('blog.form');
    }
    public function post(BlogRequest $request)
    {
        $input = $request->input();
        $article = $this->article->create($input);
        return redirect()->route('entries_form')->with('message', '記事を保存しました');
    }
}
