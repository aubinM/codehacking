@include('includes.head')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row">


                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Réinitialisation mot de passe</h1>
                                        </div>


                                        <div class="form-group">
                                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $login ?? old('login') }}" required autocomplete="on" autofocus  placeholder="Login">

                                            @error('login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>


                                        <div class="form-group">
                                            


                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nouveau mot de passe">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>


                                        <div class="form-group">



                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation mdp">

                                        </div>

                                        
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Réinitialisé le mot de passe') }}
                                                </button>
                                           
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.bottom_scripts')

</body>

</html>

