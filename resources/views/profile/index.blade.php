@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        @if(!auth()->user()->profile)
                <a href="/p/create">Add Profile</a>
            @else
            <a href="{{ url('/p/'.$user->id.'/edit') }}">Edit Profile</a>
            
                <div>
                    <table width="100%">
                        <tr>
                            <td>Username</td>
                            <td>Phone</td>
                            <td>Address</td>
                        </tr>
                        
                        <tr>
                            <td>
                                <tr>
                                    <td>{{ auth()->user()->profile->username }}</td>
                                    <td>{{ auth()->user()->profile->phone }}</td>
                                    <td>
                                        @if(auth()->user()->addresses->count() == 0)
                                            <a href="{{ url('/a/create') }}">Add  Address</a>
                                        @else
                                            <a href="{{ url('/a/edit') }}">Edit Address</a>
                                        @endif
                                    </td>
                                </td>
                            </tr>
                        </tr>
                    </table>
                </div>                
            @endif
        </div>
    </div>
</div>
@endsection
