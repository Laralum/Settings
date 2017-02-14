@php
    $settings = Laralum\Settings\Models\Settings::first();
@endphp
<div class="row">
    <div class="col-md-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <form action="{{ route('laralum::settings.general.update') }}" method="POST">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="appname" id="content-name">@lang('laralum_settings::general.appname')</label>
                <input type="text" id="appname" value="{{ $settings->appname }}" name="appname" placeholder="@lang('laralum_settings::general.appname_ph')" class="form-control">
                <small id="content-desc" class="form-text text-muted">
                    @lang('laralum_settings::general.appname_hp')
                </small>
            </div>

            <br />
            <button type="submit" class="btn btn-success float-right clickable">@lang('laralum_settings::general.save')</button>
        </form>
    </div>
</div>
