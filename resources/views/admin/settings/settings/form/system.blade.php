<div class="row">
    <div class="col-md-8">
        <form action="{{ route('settings.store') }}" 
            method="post" 
            class="needs-validation" 
            role="form"
            novalidate>
            @csrf
            <div class="row duplicable-select">
                <div class="col mb-4 clone-select">
                    <label for="">Display Name</label>
                    <input type="text" name="display_name[]" class="form-control" placeholder="Display name" required>
                </div>
                <div class="col mb-4 clone-select">
                    <label for="">Key</label>
                    <input type="text" name="key[]" class="form-control" placeholder="Key" required>
                </div>
                <div class="col mb-4 clone-select">
                    <label for="">Value</label>
                    <input type="text" name="value[]" class="form-control" placeholder="Value" required>
                </div>
                <div class="col" style="margin-top:22px;">
                <button class="btn btn-danger btn-del-select">Remove</button>
                </div>
            </div>
            <div class="col-md-2" style="margin-left: 5px;">
            <span class="btn btn-success btn-xs add-select">Add More</span>
            </div>
            <div class="fw-bold py-1 mt-3">
            <button type="submit" class="button-create">Save changes</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <form action="{{ route('settings') }}" 
            method="post" 
            class="needs-validation" 
            role="form"
            novalidate>
            @csrf
            @method('patch')
            @foreach($settings as $setting)
            <div class="col mb-3 {{ $loop->index == '0' ? '' : 'mt-3' }}">
                <label for="nameBasic" class="form-label">{{ $setting->display_name }}</label>
                <input type="text" 
                    name="key[{{ $setting->key }}]" 
                    class="form-control" 
                    value="{{ $setting->value }}"
                    placeholder="{{ $setting->display_name }}"
                    required>
            </div>
            @endforeach
            <div class="fw-bold py-1 mt-3">
            <button type="submit" class="button-create">Save changes</button>
            </div>
        </form>
    </div>
</div>
  