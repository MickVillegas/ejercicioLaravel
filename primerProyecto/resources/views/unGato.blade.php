@extends('app')
@section('secion')
    <h2>{{'Información sobre: ' . $gato->nombre}}</h2>
    <p>{{'Id del gato: ' . $gato->id}}</p>
@endsection