<div class="clear-cache">
    <h5>{{ trans('sentence.clear_system_cache')}}</h5>
    <div class="mb-3 col-12 mb-0">
        <div class="alert alert-success">
        <p class="mb-0">{{ trans('sentence.clear_cache')}}</p>
        </div>
    </div>
    <a href="{{ route('cache') }}" class="btn btn-danger deactivate-account">
        Clear
    </a>
</div>