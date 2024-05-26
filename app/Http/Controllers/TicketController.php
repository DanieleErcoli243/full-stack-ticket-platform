<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Worker;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::select('id', 'title', 'message', 'created_at', 'updated_at')->with('category')->get();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $workers = Worker::all(); 
        $ticket = new Ticket();
        return view('tickets.create', compact('categories', 'tickets', 'workers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request-> validate([
            'title' => 'string|required|unique:tickets',
            'message' => 'string|required',
            'category-id' => 'nullable!exists:category,id',
            'worker' => 'nullable|exists:worker,id'
        ]);

        

        $ticket = new Ticket();

        $ticket->fill($data);
        
        $ticket->save();

        if(Arr::exists($data, 'categories')){
            $ticket->category()->attach($data['category']);
        };
        
        /* if(Arr::exists($data, 'workers')){
            $ticket->category()->attach($data['category']);
        };
 */
        return to_route('tickets.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
