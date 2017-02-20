@extends('laralum::layouts.master')
@section('icon', 'ion-settings')
@section('title', __('laralum_settings::general.title'))
@section('subtitle', __('laralum_settings::general.subtitle'))
@section('breadcrumb')
    <ul class="uk-breadcrumb">
        <li><a href="{{ route('laralum::index') }}">@lang('laralum_settings::general.home')</a></li>
        <li><span href="">@lang('laralum_settings::general.title')</span></li>
    </ul>
@endsection
@section('content')
    @php
        $p = isset($_GET['p']) ? $_GET['p'] : 'Settings';
    @endphp
    <div class="uk-container uk-container-large">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        @lang('laralum_settings::general.modules_settings')
                    </div>
                    <div class="uk-card-body">
                        <div uk-grid>
                            <div class="uk-width-1-1@s uk-width-2-5@m uk-width-1-5@l">
                                <ul class="uk-tab-left" uk-tab="connect: #settings-content">
                                    @foreach($packages as $package => $view)
                                        <li class="@if($package == $p) uk-active @endif">
                                            <a href="#{{ $package }}">
                                                {{ $package }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-5@m uk-width-4-5@l">
                                <ul id="settings-content" class="uk-switcher">
                                    @foreach($packages as $package => $view)
                                        <li>
                                            {!! $view !!}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
