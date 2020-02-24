@include('frontend.parts.header')

<body data-gr-c-s-loaded="true">
<div id="root">
    <div id="app">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card signup-card">
                    <div class="card-header">{{ __('Sign Up to Lend-Bit') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-12 col-form-label text-md-left">{{ __('First Name') }}</label>
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-12 col-form-label text-md-left">{{ __('Last Name') }}</label>
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                           class="form-control @error('last-name') is-invalid @enderror"
                                           name="last-name"
                                           value="{{ old('last-name') }}" required autocomplete="last-name" autofocus>
                                    @error('last-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
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
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-12 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign Up') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <ul>
                                    <li><a href="/reset"> Reset Password </a></li>
                                    <li><a href="/signin"> Login to Site </a></li>
                                    <li><a href="/privacy"> Privacy Policy </a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(".mtsnb-button-type mtsnb-content").hide();
</script>
</body>
</html>

@include('frontend.parts.footer')
