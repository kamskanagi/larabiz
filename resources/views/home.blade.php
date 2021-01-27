@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span class="float-right"><a href="/listings/create" class="btn btn-secondary">Create Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                @if(count($listings))
                    <h3>Your Listings</h3>
                    <table class="table table-striped">
                            <tr>
                            <th>Company Name</th>
                            </tr>

                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                <td><a href="/listings/{{ $listing->id}}/edit" class="btn btn-info float-right">Edit</a></td>
                                </tr>
                            @endforeach
                    </table>
                @else 
                    <p>You dont have any listings yet!</p>
                @endif            
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
