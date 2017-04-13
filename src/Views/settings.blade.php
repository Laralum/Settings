@php
    $settings = Laralum\Settings\Models\Settings::first();
@endphp
<div uk-grid>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
    <div class="uk-width-1-1@s uk-width-3-5@l">
        <form class="uk-form-horizontal" method="POST" action="{{ route('laralum::settings.general.update') }}">
            {{ csrf_field() }}
            <fieldset class="uk-fieldset">

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_settings::general.appname')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('appname', $settings->appname ? $settings->appname : '') }}" name="appname" class="uk-input" type="text" placeholder="@lang('laralum_settings::general.appname_ph')">
                        <small class="uk-text-meta">@lang('laralum_settings::general.appname_hp')</small>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_settings::general.description')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('description', $settings->description ? $settings->description : '') }}" name="description" class="uk-input" type="text" placeholder="@lang('laralum_settings::general.description_ph')">
                        <small class="uk-text-meta">@lang('laralum_settings::general.description_hp')</small>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_settings::general.keywords')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('keywords', $settings->keywords ? $settings->keywords : '') }}" name="keywords" class="uk-input" type="text" placeholder="@lang('laralum_settings::general.keywords_ph')">
                        <small class="uk-text-meta">@lang('laralum_settings::general.keywords_hp')</small>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_settings::general.author')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('author', $settings->author ? $settings->author : '') }}" name="author" class="uk-input" type="text" placeholder="@lang('laralum_settings::general.author_ph')">
                        <small class="uk-text-meta">@lang('laralum_settings::general.author_hp')</small>
                    </div>
                </div>

                <div class="uk-margin uk-align-right">
                    <button type="submit" class="uk-button uk-button-primary">
                        <span class="ion-forward"></span>&nbsp; @lang('laralum_settings::general.save')
                    </button>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
</div>
