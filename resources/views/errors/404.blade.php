@extends('canvas::errors.layout')

@section('title')
    <title>Vube.ro | Pagina nu a fost gasita</title>
@stop

@section('content')
    <div class="login-container">
        <p class="f-20 f-300 text-center">404 - Pagina nu a fost gasita</p>
        <p class="text-muted text-center">Scuze, dar nu avem nimic pentru acest link.</p>
        @if(Auth::guard('canvas')->check())
            <div style="text-align: center">
                <a href="{!! route('canvas.admin') !!}" class="btn btn-link m-t-10">Back to Dashboard</a>
            </div>
        @else
            <div style="text-align: center">
                <a href="{!! route('canvas.blog.post.index') !!}" class="btn btn-link m-t-10">Inapoi la prima pagina</a>
            </div>
        @endif
    </div>
@stop
