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
                @foreach($feedbacks as $feedback) 
                    <div class="feedback-card">
                        <div class="feedback-card__profile">
                            <img src="/images/profile.png" alt="user-icon">
                            <p>{{ $feedback->name }}</p>
                        </div>
                        <div class="feedback-card__message">
                            <p>{{ $feedback->message }}</p>
                        </div>
                        <div class="feedback-card__category">
                            <span>{{ $feedback->category }}</span>
                            @php
                                $image = '';
                                if($feedback->category == 'Sugestão') {
                                    $image = 'suggestion.png';
                                } elseif ($feedback->category == 'Reclamação') {
                                    $image = 'thumb-down.png';
                                } elseif ($feedback->category == 'Elogio') {
                                    $image = 'thumb-up.png';
                                }
                            @endphp
                            <img src="/images/{{ $image }}" alt="">
                        </div>
                    </div><!--.feedback-card-->
                @endforeach
            </div><!--.feedback-cards-->
            <button class="arrow right-arrow">&gt;</button>
        </div><!--.feedback-slider-->
    </div><!--.container-->
</main>
<script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>