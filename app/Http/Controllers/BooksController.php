<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookCreateOrEditRequest;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BooksController extends Controller
{

    public function index()
    {
        return BookResource::collection(request()->user()->books);
    }

    public function store(BookCreateOrEditRequest $request)
    {
        $book = request()->user()->books()->create($request->all());
        return (new BookResource($book))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }

    public function update(BookCreateOrEditRequest $request, Book $book)
    {
        $this->authorize('update', $book);
        $book->update($request->all());

        return (new BookResource($book))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function destroy(Book $book)
    {
        $this->authorize('delete', $book);
        $book->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }

}
