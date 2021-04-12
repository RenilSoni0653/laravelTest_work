@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @php 
                    $i=0;
                    $count = auth()->user()->addresses->count()
                @endphp

                <div>
                    <a href="{{ url('/a/create') }}">Add  Address</a>
                    <table width="100%">
                        <tr>
                            <td>Sr No.</td>
                            <td>Full Address</td>
                            <td>Address - type</td>
                        </tr>
                        <tr>
                            <tr>
                            @if($count == 0)
                                <td>{{ 'Nothing to show' }}</td>
                            @endif
                                @foreach(auth()->user()->addresses as $address)
                                        <tr>
                                            <td>{{  $i = $i + 1 }}</td>
                                            <td>{{ $address->address }}</td>
                                            <td>{{ $address->type }}</td>
                                            <td><a href="{{ url('/a/'.$address->id.'/edit') }}">Edit</a></td>
                                            <td>
                                                <form method="POST" action="{{ url('/a/'.$address->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-primary">Delete</button>
                                                </form>
                                            </td>
                                        </tr> 
                                        @endforeach
                                </tr>
                            </tr>
                    </table>

                    <div class="pt-4">
                        <form action="{{ url('/profile/'.auth()->user()->id) }}">
                            <button class="btn btn-primary">Home</button>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
</div>
@endsection
