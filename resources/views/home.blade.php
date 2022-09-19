@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body login-card-body" style="background-color: #90B77D">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                 <div class="card-body text-light">
                    @if (session('status'))
                        <div class="alert alert-light" role="alert">
                            {{ session('status') }}
                        </div>
                        <script>
                            notify()->success('Laravel Notify is awesome!');
                        </script>
                    @endif
                    
                    Selamat {{Auth::user()->name}} Kamu Berhasil Login!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection