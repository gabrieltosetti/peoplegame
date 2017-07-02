<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>People | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box loginscreen animated fadeInDown">
        <div>
            <h3 class="text-center">Sistema People Game</h3><br>
            <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <!--EMAIL-->
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label" >E-Mail:</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <!--/EMAIL-->

                <!--SENHA-->
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Senha:</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <!--/SENHA-->

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
                        </label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary block full-width m-b">Logar</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

