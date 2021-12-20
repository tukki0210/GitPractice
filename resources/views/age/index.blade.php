@extends('layouts.dataindex')

@section('title', '')

@section('content')
    <table>
        <tr><th>ID</th><th>年代</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    
@endsection