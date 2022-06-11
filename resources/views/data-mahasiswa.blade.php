@extends('layouts.master')
@section('content')
    

         @foreach ($dtMahasiswa as $item)
        <div class="col-sm-6">
            <div class="course">
              <div class="card-body">
                    <div class="row">
                      <div class="col">
                          <h5 class="card-title">{{ $item->nama }}</h5>
                          <p class="card-text">{{ $item->nim }}</p>
                          <p> {{ $item->alamat }} </p>
                      </div>
                      <div class="col">
                      </div>
                      <div class="col">
                          <a href="{{ url('edit-mahasiswa', $item->id) }}" ><i class="fa-solid fa-lg fa-pen-to-square" style="color: #5161ce"></i></a> 
                          <a href="{{ url('delete-mahasiswa', $item->id) }}" ><i class="fa-solid fa-lg fa-trash-can" style="color: red;"></i></a>
                          <div>
                          <span>{{ $item->email }}</span>
                          </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        @endforeach

@endsection



