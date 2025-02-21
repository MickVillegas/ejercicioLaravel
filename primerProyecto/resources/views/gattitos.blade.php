@extends('app')

@section('secion')
<table width = "300px">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>
    @foreach ($gatos as $per)
    <tr>
        <td><center>{{$per->id}}</center></td>
        <td><center>{{$per->nombre}}</center></td>
     </tr>
    @endforeach
</table>
@endsection