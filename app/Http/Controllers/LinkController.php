<?php

namespace App\Http\Controllers;

use App\Link;
use App\Http\Requests\LinkRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class LinkController extends Controller
{
    /**
     * Страница получения ссылки
     */
    public function index(): View
    {
        return view('link');
    }

    /**
     * Генерация сокращенной ссылки
     *
     * @return Model|void
     */
    public function generate(LinkRequest $request): Model
    {
        try {
            return Link::on()->create([
                'url'       => $request->url,
                'shortcode' => Str::random(6)
            ]);
        } catch (QueryException $e) { // на поле shortcode стоит unique
            abort(500, 'Please try again.');
        }
    }

    /**
     * Перенапавление на исходную страницу
     */
    public function redirect(Link $link): RedirectResponse
    {
        return redirect($link->url);
    }
}
