@include('includes.head')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenue</h1>
                                        </div>

                                        <div class="form-group">
                                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ Session::get('login')}}" required autocomplete="on" autofocus placeholder="Login">
                                            @error('login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" {{ Session::has('login') ? 'checked' : '' }}>
                                                       <label class="custom-control-label" for="customCheck">{{ __('Se souvenir de moi') }}</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Connexion') }}
                                        </button>


                                        <hr>
                                        <div class="text-center">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié ?') }}
                                            </a>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-link" href="{{ route('register') }}">Creer un compte</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('includes.bottom_scripts')

</body>

</html>


