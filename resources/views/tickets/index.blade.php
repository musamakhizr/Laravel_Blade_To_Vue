@extends('new_layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Tickets List') }}</div>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('ticket.create') }}">Add new ticket</a>
                        <br /><br />
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->email }}</td>
                                    <td>{{ $ticket->category->title }}</td>
                                    <td>{{ $ticket->created_at }}</td>
                                    <td><a href="{{route('ticket.edit',$ticket->id)}}">Edit</a></td>
                                </tr>
                            @empty{{-- if empty show this --}}
                                <tr>
                                    <td colspan="4">{{ __('No tickets found') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
