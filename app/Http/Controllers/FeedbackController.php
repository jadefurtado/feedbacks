<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', compact('feedbacks'));
    }

    public function create(Feedback $feedback)
    {
        return view('feedbacks.create');
    }

    public function store(StoreFeedbackRequest $request)
    {
        $validatedData = $request->validated();
        
        // Feedback::create($validatedData);

        $feedback = Feedback::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'category' => $validatedData['category']
        ]);
        return back()->with('success', 'Feedback enviado com sucesso');
    }


}
