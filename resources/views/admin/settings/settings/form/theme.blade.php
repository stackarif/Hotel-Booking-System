<form action="{{ route('theme.update') }}" method="post">
  @csrf
  <div class="col-12">
    <div class="row">
      <div class="col-md-6 mb-md-0 mb-3">
        <div class="form-check custom-option custom-option-icon checked">
          <label class="form-check-label custom-option-content" for="white">
            <img src="{{ asset('theme/img/white.png') }}" alt="" width="370px" height="200px"><br><br><br>
            <input name="theme" class="form-check-input" type="radio" value="light" {{ theme() == 'light' ? 'checked' : '' }}>
          </label>
        </div>
      </div>
      <div class="col-md-6 mb-md-0 mb-3">
        <div class="form-check custom-option custom-option-icon checked">
          <label class="form-check-label custom-option-content" for="dark">
            <img src="{{ asset('theme/img/dark.png') }}" alt="" width="370px" height="200px"><br><br><br>
            <input name="theme" class="form-check-input" type="radio" value="semi_dark" {{ theme() == 'semi_dark' ? 'checked' : '' }}>
          </label>
        </div>
      </div>
      <div class="fw-bold py-1 mt-3">
        <button type="submit" class="button-create">Save changes</button>
      </div>
    </div>
  </div>
</form>