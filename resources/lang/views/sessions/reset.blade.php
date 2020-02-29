@include('frontend.parts.header')

<div id="root">
    <div id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card signin-card">
                    <div class="card-header">{{ __('Reset to Lend-Bit') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reset') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 text-center">
                        <ul>
                            <li><a href="/reset"> Reset Password </a></li>
                            <li><a href="/signup"> Create an account </a></li>
                            <li><a href="/privacy"> Privacy Policy </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.parts.footer')
