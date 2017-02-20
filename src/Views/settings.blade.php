@php
    $settings = Laralum\Settings\Models\Settings::first();
@endphp
<div uk-grid>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
    <div class="uk-width-1-1@s uk-width-3-5@l">
        <form method="POST" action="{{ route('laralum::settings.general.update') }}">
            {{ csrf_field() }}
            <fieldset class="uk-fieldset">

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_settings::general.appname')</label>
                    <input value="{{ old('appname', $settings->appname ? $settings->appname : '') }}" name="appname" class="uk-input" type="text" placeholder="@lang('laralum_settings::general.appname_ph')">
                    <small class="uk-text-meta">@lang('laralum_settings::general.appname_hp')</small>
                </div>

                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">
                        <span class="ion-forward"></span>&nbsp; @lang('laralum_settings::general.save')
                    </button>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
</div>
