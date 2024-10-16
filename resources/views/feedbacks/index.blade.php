<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">
    <title>Feedbacks</title>
</head>
<body>
<header>
    <div class="menu">
        <div class="menu__logo-title">
            <img src="/images/positive-feedback-icon.svg" alt="Logo">
            <h1>Feedbacks</h1>
        </div>
        <div class="menu__button">
            <a href="{{ route('feedback.create') }}">Criar Feedback</a>
        </div>
    </div>
    <hr>
</header>
<main>
    <div class="container">
        <div class="feedback-slider">
            <button class="arrow left-arrow">&lt;</button>
            <div class="feedback-cards">
                <div class="feedback-card">
                    <div class="feedback-card__profile">
                        <img src="/images/profile.png" alt="user-icon">
                        <p>Nome do usuário 1</p>
                    </div>
                    <div class="feedback-card__message">
                        <p>Feedback 1: Duis suscipit commodo convallis. Sed tempus vestibulum efficitur. Nam id faucibus odio. Sed eleifend mauris ac gravida posuere. Fusce viverra interdum rutrum. Mauris in aliquet massa, eu tincidunt lacus. Donec commodo tortor quam, lacinia ornare dolor egestas sed.</p>
                    </div>
                    <div class="feedback-card__category">
                        <span>Categoria 1</span>
                        <img src="/images/thumb-up.png" alt="">
                    </div>
                </div><!--.feedback-card-->
                <div class="feedback-card">
                    <div class="feedback-card__profile">
                        <img src="/images/profile.png" alt="user-icon">
                        <p>Nome do usuário 2</p>
                    </div>
                    <div class="feedback-card__message">
                        <p>Feedback 2: Duis suscipit commodo convallis. Sed tempus vestibulum efficitur. Nam id faucibus odio. Sed eleifend mauris ac gravida posuere. Fusce viverra interdum rutrum. Mauris in aliquet massa, eu tincidunt lacus. Donec commodo tortor quam, lacinia ornare dolor egestas sed.</p>
                    </div>
                    <div class="feedback-card__category">
                        <span>Categoria 2</span>
                        <img src="/images/thumb-up.png" alt="">
                    </div>
                </div><!--.feedback-card-->
                <div class="feedback-card">
                    <div class="feedback-card__profile">
                        <img src="/images/profile.png" alt="user-icon">
                        <p>Nome do usuário 3</p>
                    </div>
                    <div class="feedback-card__message">
                        <p>Feedback 3: Duis suscipit commodo convallis. Sed tempus vestibulum efficitur. Nam id faucibus odio. Sed eleifend mauris ac gravida posuere. Fusce viverra interdum rutrum. Mauris in aliquet massa, eu tincidunt lacus. Donec commodo tortor quam, lacinia ornare dolor egestas sed.</p>
                    </div>
                    <div class="feedback-card__category">
                        <span>Categoria 3</span>
                        <img src="/images/thumb-up.png" alt="">
                    </div>
                </div><!--.feedback-card-->
            </div><!--.feedback-cards-->
            <button class="arrow right-arrow">&gt;</button>
        </div><!--.feedback-slider-->
    </div>
</main>
</body>
</html>