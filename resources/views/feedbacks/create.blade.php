<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create-style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Feedback</title>
</head>
<body>
    @if (session('success'))
    <script>
        // Exibir alerta apenas quando a sessão tiver uma mensagem de sucesso
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000,
                toast: true,
                position: 'top'
            });
        };
    </script><!--sweet-alert-->
@endif
    <div class="title">
        <h1>Envie seu Feedback</h1>
        <img src="/images/positive-feedback-icon.svg" alt="">
    </div><!--.title-->
    <div class="container">
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Seu nome">
            @if ($errors->has('name'))
                <span class="errors">{{ $errors->first('name') }}</span>
            @endif
            <br>
            <input type="email" name="email" placeholder="Seu email">
            @if ($errors->has('email'))
                <span class="errors">{{ $errors->first('email') }}</span>
            @endif
            <br>
            <textarea name="message" placeholder="Sua mensagem" cols="30" rows="10"></textarea>
            @if($errors->has('message'))
                <span class="errors">{{ $errors->first('message') }}</span>
            @endif
            <br>
            <select name="category">
                <option value="">- Selecione uma categoria -</option>
                <option value="sugestao">Sugestão</option>
                <option value="reclamacao">Reclamação</option>
                <option value="elogio">Elogio</option>
            </select>
            @if($errors->has('category'))
                <span class="errors">{{ $errors->first('category') }}</span>
            @endif
            <br>
            <button type="submit">Enviar Feedback</button>
        </form>
    </div> <!--.container-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>