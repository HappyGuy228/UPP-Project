<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "css/sravnenie.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>
        <h1 class="page-title">Сравнение товаров</h1>
    <div class="container">
        <div class="product-card">
            <div class="product-image-container">
                <img src="img/sravnenie/product1.jpg" alt="Product 1" class="product-image">
            </div>
            <div class="product-details">
                <div class="product-name">Название товара 1</div>
                <div class="product-price">$100</div>
                <div class="comparison-row">
                    <span class="characteristic-name">Общая оценка</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Внешний вид</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Производительность</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Камера</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Качество звука</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Батарея</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img src="img/sravnenie/product2.jpg" alt="Product 2" class="product-image">
            </div>
            <div class="product-details">
                <div class="product-name">Название товара 2</div>
                <div class="product-price">$120</div>
                <div class="comparison-row">
                    <span class="characteristic-name">Общая оценка</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Внешний вид</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Производительность</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Камера</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Качество звука</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
                <div class="comparison-row">
                    <span class="characteristic-name">Батарея</span>
                    <div class="stars">
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star">*</span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php require "blocks/footer.php" ?>
</html>
