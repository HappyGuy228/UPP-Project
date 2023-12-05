<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <style><?php include "css/review.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>


    <div class="reviews-container">
        <div class="review">
            <img src="img/review/profile1.png" alt="User 1">
            <div class="review-content">
                <div class="review-author">Иван Иванов</div>
                <div class="review-date">03.02.2020</div>
                <div class="review-text">Прекрасный продукт! Качество на высоте, доставка быстрая. Очень доволен!</div>
            </div>
        </div>

        <div class="review">
            <img src="img/review/profile2.png" alt="User 2">
            <div class="review-content">
                <div class="review-author">Мария Петрова</div>
                <div class="review-date">05.03.2020</div>
                <div class="review-text">Сервис на высшем уровне. Рекомендую!</div>
            </div>
        </div>

        <div class="review">
            <img src="img/review/profile3.png" alt="User 3">
            <div class="review-content">
                <div class="review-author">Алексей Сидоров</div>
                <div class="review-date">10.04.2020</div>
                <div class="review-text">Отличный выбор товаров, удивительное обслуживание. Все пришло в лучшем виде!</div>
            </div>
        </div>

        <div class="review">
            <img src="img/review/profile4.png" alt="User 4">
            <div class="review-content">
                <div class="review-author">Екатерина Николаева</div>
                <div class="review-date">15.05.2020</div>
                <div class="review-text">Прекрасный выбор товаров. Спасибо!</div>
            </div>
        </div>
        <button class="leave-review-button">Оставить отзыв</button>
    </div>
</body>
<?php require "blocks/footer.php" ?>
</html>
