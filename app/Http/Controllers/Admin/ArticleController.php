<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    function index()
    {
        $title = "Artikel";
        $articles = Article::latest()->paginate(3);
        return view('admin.article.index', compact('title', 'articles'));
    }

    function create()
    {
        $title = "Tambah Artikel";
        return view('admin.article.insert', compact('title'));
    }

    function store(ArticleRequest $articleRequest)
    {
        $input = $articleRequest->validated();

        if ($articleRequest->hasFile('image')) {
            $file = $articleRequest->file('image');
            $title = $input['title'];
            $slug = Str::slug($title);
            $extension = $file->getClientOriginalExtension();
            $filename = $slug . '.' . $extension;
            $targetPath = 'articles/' . $filename;

            if (Storage::disk('public')->exists($targetPath)) {
                $filename = $slug . '-' . time() . '.' . $extension;
            }

            $path = $file->storeAs('articles', $filename, 'public');
            $input['image'] = $path;
        }

        Article::create($input);

        return redirect()->route('admin.article.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    function edit($id)
    {
        $title = "Edit Artikel";
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('title', 'article'));
    }

    function update(ArticleRequest $articleRequest, $id)
    {
        $input = $articleRequest->validated();
        $article = Article::findOrFail($id);

        if ($articleRequest->hasFile('image')) {
            $file = $articleRequest->file('image');

            $title = $input['title'] ?? $article->title;
            $slug = Str::slug($title);
            $extension = $file->getClientOriginalExtension();

            $filename = $slug . '.' . $extension;
            $targetPath = 'articles/' . $filename;

            if (Storage::disk('public')->exists($targetPath)) {
                $filename = $slug . '-' . time() . '.' . $extension;
            }

            if (!empty($article->image) && Storage::disk('public')->exists($article->image)) {
                Storage::disk('public')->delete($article->image);
            }

            $path = $file->storeAs('articles', $filename, 'public');

            $input['image'] = $path;
        }

        $article->update($input);

        return redirect()->route('admin.article.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    function destroy($id)
    {
        $article = Article::findOrFail($id);

        if (!empty($article->image) && Storage::disk('public')->exists($article->image)) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('admin.article.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
