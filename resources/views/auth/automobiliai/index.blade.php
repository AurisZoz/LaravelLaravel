@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Automobiliu savininkų sąrašas</div>
                    <div class="card-body">
                        <div class="clearfix">
                            <a href="{{ route('automobiliai.create') }}" class="btn btn-success float-end">Pridėti</a>
                        </div>
                        <form method="post" action="{{ route("automobiliai.search") }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" name="vardas" value="{{ $filter->vardas }}" >
                            <button class="btn btn-info">Ieškoti</button>
                        </form>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vardas</th>
                                    <th>Pavardė</th>
                                    <th>Modelis1</th>
                                    <th>Markė1</th>
                                    <th>Numeris1</th>
                                    <th>Modelis2</th>
                                    <th>Markė2</th>
                                    <th>Numeris2</th>
                                    <th>Modelis3</th>
                                    <th>Markė3</th>
                                    <th>Numeris3</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($automobiliai as $automobilis)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->vardas }}</td>
                                <td>{{ $student->pavarde }}</td>
                                <td>{{ $student->marke1 }}</td>
                                <td>{{ $student->modelis1 }}</td>
                                <td>{{ $student->numeris1 }}</td>
                                <td>{{ $student->marke2 }}</td>
                                <td>{{ $student->modelis2 }}</td>
                                <td>{{ $student->numeris2 }}</td>
                                <td>{{ $student->marke3 }}</td>
                                <td>{{ $student->modelis3 }}</td>
                                <td>{{ $student->numeris3 }}</td>
                                
                                <td>
                                    <a class="btn btn-info" href="{{ route('automobiliai.edit', $student->id) }}">Redaguoti</a>
                                    <a class="btn btn-danger" href="{{route('automobiliai.delete',$student->id)}}">Ištrinti</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
