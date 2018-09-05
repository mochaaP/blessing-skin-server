@if (file_exists(public_path('langs/'.config('app.locale').'.js')))
    <script src="{{ url('public/langs/'.config('app.locale').'.js') }}"></script>
@else
    <script src="{{ url('public/langs/'.config('app.fallback_locale').'.js') }}"></script>
@endif

<script src="{{ webpack_assets('index.js') }}"></script>

<!-- User custom scripts -->
<script>{!! option('custom_js') !!}</script>
{{-- Content added by plugins dynamically --}}
{!! bs_footer_extra() !!}
