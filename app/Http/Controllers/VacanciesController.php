<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        return view('vacancies.create');
    }

    public function store(Request $request)
    {
        Vacancy::create($request->all());
        return redirect(route('vacancies.index'));
    }


    public function show(Vacancy $vacancy)
    {
        $users = User::all();
        return view('vacancies.show', compact('vacancy', 'users'));
    }

    public function edit(Vacancy $vacancy)
    {
        //
    }

    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    public function destroy(Vacancy $vacancy)
    {
        //
    }

    public function assign(Request $request, Vacancy $vacancy)
    {
        $vacancy->users()->save(User::find($request->get('user')));
        return redirect(route('vacancies.show', $vacancy->id));
    }

    public function detach(Vacancy $vacancy, User $user)
    {
        $vacancy->users()->detach($user->id);
        return redirect(route('vacancies.show', $vacancy->id));
    }
}
