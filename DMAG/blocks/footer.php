
<!DOCTYPE html>
<!--<html lang="ru" xmlns:th="http://www.w3.org/1999/xhtml">-->
<html xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <!--<meta charset="utf-8" />
    <title>Кастомный виджет googleTranslate для сайта</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<link rel="stylesheet" href="css/google_translator.css">-->
    <link rel="stylesheet" th:href="@{css/footer.css}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</head>

<body class="footer-body">  <!--th:fragment="footer">--> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<footer class="footer-footer">
    <nav class="footer-navbar">
        <div class="footer-container" th:fragment="footer">
            <ul class="footer-ul">
                <li><a>О нас</a></li>
                <li><a href="#">Контактная информация</a></li>
                <li><a href="#">Отзывы</a></li>
            </ul>
        </div>
    </nav>
</footer>
</body> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

</html>
