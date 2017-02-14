@extends('laralum::layouts.master')
@section('icon', 'mdi-settings')
@section('title', __('laralum_settings::general.title'))
@section('subtitle', __('laralum_settings::general.subtitle'))
@section('content')
    @php
        $p = isset($_GET['p']) ? $_GET['p'] : 'Settings';
    @endphp
    <div class="row">
        <div class="col col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    @lang('laralum_settings::general.modules_settings')
                </div>
                <div class="card-block">
                    <ul class="nav nav-tabs">
                        @foreach($packages as $package => $view)
                            <li class="nav-item">
                                <a class="nav-link @if($package == $p) active @endif" data-toggle="tab" href="#{{ $package }}" role="tab" aria-controls="{{ $package }}">
                                    {{ $package }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <br />
                    <div class="tab-content">
                        @foreach($packages as $package => $view)
                            <div class="tab-pane fade @if($package == $p) show active @endif" id="{{ $package }}" role="tabpanel">
                                {!! $view !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
