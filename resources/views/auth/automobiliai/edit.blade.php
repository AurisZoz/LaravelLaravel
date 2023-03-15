@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Automobiliu savininkų sąrašas</div>
                    <div class="card-body">
                       <form method="post" action="{{ route("automobiliai.update", $automobilis->id) }}">
                           @csrf
                           <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control" name="id" type="text" value="{{ $automobilis->id }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Vardas:</label>
                               <input class="form-control" name="vardas" type="text" value="{{ $automobilis->vardas }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Pavardė:</label>
                               <input class="form-control" name="pavarde" type="text" value="{{ $automobilis->pavarde }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Markė1:</label>
                               <input class="form-control" name="marke1" type="text" value="{{ $automobilis->marke1 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Modelis1:</label>
                               <input class="form-control" name="modelis1" type="text" value="{{ $automobilis->modelis1 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Numeris1:</label>
                               <input class="form-control" name="numeris1" type="text" value="{{ $automobilis->numeris1 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Markė2:</label>
                               <input class="form-control" name="marke2" type="text" value="{{ $automobilis->marke2 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Modelis2:</label>
                               <input class="form-control" name="modelis2" type="text" value="{{ $automobilis->modelis2 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Numeris2:</label>
                               <input class="form-control" name="numeris2" type="text" value="{{ $automobilis->numeris2 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Markė3:</label>
                               <input class="form-control" name="marke3" type="text" value="{{ $automobilis->marke3 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Modelis3:</label>
                               <input class="form-control" name="modelis3" type="text" value="{{ $automobilis->modelis3 }}">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Numeris3:</label>
                               <input class="form-control" name="numeris3" type="text" value="{{ $automobilis->numeris3 }}">
                           </div>
                           <button class="btn btn-success"> Išsaugoti</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
