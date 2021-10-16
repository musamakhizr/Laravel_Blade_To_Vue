<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('tickets.create',compact('categories'));
    }

     public function store(Request $request)
    {
        dd($request);
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit(Ticket $ticket)
    {
        dd($ticket);
    }

    public function update(Request $request, Ticket $ticket)
    {
        //
    }
    public function destroy(Ticket $ticket)
    {
        //
    }
}
