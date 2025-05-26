<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FakeUser;

class FakeUserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = FakeUser::all();
        return view('admin.fakeuser.index', compact('users'));

    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'telegram' => 'nullable|string|max:255',
        ]);

        FakeUser::create($validated);

        return response()->json(['message' => 'User saved successfully!']);
    }
}

