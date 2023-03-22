@extends('layouts.default')

@section('main-content')
<div>
    {{-- @include('layouts.partials._topbar') --}}
    @include('layouts.partials._navbar')
    
    <div class="main-content">
        
        <div class="page-content">
            
            @yield('content')
            
        </div>
        
        @include('layouts.partials._footer')

        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
    </div>
</div>
@endsection