<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    {{-- <link rel="stylesheet" href="{{url(mix('backend/assets/css/reset.css'))}}"/>
    <link rel="stylesheet" href="{{url(mix('backend/assets/css/boot.css'))}}"/>
    <link rel="stylesheet" href="{{url(mix('backend/assets/css/login.css'))}}"/> --}}
    <link rel="icon" type="image/png" href="backend/assets/images/favicon.png"/>


    <title>Criar usuario</title>

    <meta name="csrf-token" content="{{csrf_token() }}">
</head>
<body>

<div class="ajax_response"></div>

<div class="dash_login">
    <div class="dash_login_left">
        <article class="dash_login_left_box">
            <header class="dash_login_box_headline">
                <h1>Register</h1>
            </header>

            <form name="login" action="{{route('register.do')}}" method="post" autocomplete="off">
                <label>
                    <span class="field icon-envelope">Name:</span>
                    <input type="text" name="name" placeholder="John john" required/>
                </label>
                <label>
                    <span class="field icon-envelope">E-mail:</span>
                    <input type="email" name="email" placeholder="admin@admin.com" required/>
                </label>

                <label>
                    <span class="field icon-unlock-alt">Senha:</span>
                    <input type="password" name="password_check" placeholder="**************"/>
                </label>

                <button class="gradient gradient-orange radius icon-sign-in">Create</button>
            </form>

            <footer>
                <p>&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
            </footer>
        </article>
    </div>

    <div class="dash_login_right"></div>

</div>

{{-- <script src="{{ url(mix('backend/assets/js/jquery.js'))}}"></script>
<script src="{{ url(mix('backend/assets/js/login.js'))}}"></script> --}}

</body>
</html>