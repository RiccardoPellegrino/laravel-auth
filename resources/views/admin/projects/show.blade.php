@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <div class="col-4">
        <div>
            <img src="{{asset('storage/'.$project->cover_image)}}" alt="">
            {{-- <img src="https://picsum.photos/id/{{$project->id}}/1920/1080" alt=""> --}}
            <div>{{$project->name_project}}</div>
            <div>{{$project->lvl_diff}}</div>
            <div>{{$project->slug}}</a></div>
            <div>{{$project->dev_lang}}</div>
            <div>{{$project->framework}}</div>
            <div>{{$project->team}}</div>
            <div>{{$project->link_git}}</div>
            <div>{{$project->description}}</div>
          
            <button class="btn btn-primary mt-3"><a href="{{route('admin.projects.index')}}"style="color:white">Indietro</a></button>
        </div>
    </div>
</div>
@endsection