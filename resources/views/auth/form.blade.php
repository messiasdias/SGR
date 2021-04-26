<form method="POST" action="{{ route('register') }}">
  @csrf

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
      <div class="col-md-6">
          <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
          @error('phone')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>
      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>

  <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Permissão') }}</label>
      <div class="col-md-6">
          <select class="form-control" name="role_id" value="{{ old('role_id') ?? ''}}" >
              <!-- temp -->
              <option value="">Selecione</option>
              <option value="1">Administrador</option>
              <option value="2">Gerente</option>
              <option value="3">Cliente</option>
              <option value="4">Parceiro</option>
              <!-- temp -->
          <select>
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Registrar') }}
          </button>
      </div>
  </div>
</form>