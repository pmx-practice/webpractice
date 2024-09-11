<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'header.php'?>
</head>
<body>
<div>
    <!--Навигация-->
    <?php include'includes/navbar.php'; ?>

    <button class="ask-question-btn" id="askQuestionBtn" data-bs-toggle="modal" data-bs-target="#askQuestionModal">Задать вопрос</button>

    <!-- Модальное окно -->
    
    <?php include'includes/modal.php'; ?>

    <!-- Hero-секция -->
    <section class="hero-section" id="home">
   <?php include'sections/Hero.php';?>
</section>
    <!-- Секция "Что вы узнаете на курсе" -->
   
    <?php include'sections/about_lesson.php';?>

    <!-- Секция программы курса -->
   <?php include'sections/program.php'?>

    <!-- Секция тарифов -->
    <?php include'sections/tarif.php';?>

    <!-- CTA Блок -->
   <?php include'sections/STA.php'?>

    <!-- Секция отзывов (Testimonials) -->
    <?php include'sections/feedback.php'?>

    <!-- Подвал -->
    <footer class="footer">
        
        <p>&copy; 2024 Elite Realty SRL. Все права защищены.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
