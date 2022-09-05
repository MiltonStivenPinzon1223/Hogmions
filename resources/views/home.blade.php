@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->url_photo}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('proffession'){{Auth::user()->proffession}}@endsection