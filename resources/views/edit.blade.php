@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Listening') }} <span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               

                    <form method="post" action="/listings/{{ $listing->id }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Type your Name" value="{{$listing->name}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Type your Address" value="{{$listing->address}}" >
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="Type your Website" value="{{$listing->website}}" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Type Email" value="{{$listing->email}}" >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Type your phone number" value="{{$listing->phone}}" >
                        </div>
                        <div class="form-group">
                                <label for="bio">Bio</label>
                                <input type="text" class="form-control" name="bio" id="bio" placeholder="Type Bio" value="{{$listing->bio}}" >
                            </div>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
