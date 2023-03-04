<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio Guilherme Araujo">
    <meta name="author" content="Guilherme Araujo">
    <!-- THEMIFY ICONS -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- MAIN -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- TITLE -->
    <title>Guilherme Araujo | Portfólio</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- HEADER -->
    <?php include 'components/header.php'; ?>
    <!-- END HEADER -->

    <!-- MAIN -->
    <main class="main" id="home">
        <?php include 'sections/main.php'; ?>
    </main>
    <!-- END MAIN -->

    <!-- SOBRE -->
    <section id="sobre" class="section mt-3">
        <?php include 'sections/sobre.php'; ?>
    </section>
    <!-- END SOBRE -->

    <!-- SERVICOS -->
    <section id="servico" class="section">
        <?php include 'sections/servicos.php'; ?>
    </section>
    <!-- END SERVICOS -->

    <!-- SKILLS -->
    <!-- <section class="section">
        <?php
        //  include 'sections/skills.php'; 
        ?>
    </section> -->
    <!-- END SKILLS -->

    <!-- PORTFOLIO -->
    <section id="portfolio" class="section">
        <?php include 'sections/portfolio.php'; ?>
    </section>
    <!-- END PORTFOLIO -->

    <!-- CONTRATE-ME -->
    <section class="bg-gray p-0 section">
        <?php include 'sections/contrate-me.php'; ?>
    </section>
    <!-- END CONTRATE-ME -->

    <!-- CONTATO -->
    <section id="contato" class="position-relative section">
        <?php include 'sections/contato.php'; ?>
    </section>
    <!-- END CONTATO -->

    <!-- FOOTER -->
    <footer class="page-footer">
        <?php include 'components/footer.php'; ?>
    </footer>
    <!-- END FOOTER -->

    <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP BUNDLE  -->
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- BOOTSTRAP AFFIX -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <!-- MAIN -->
    <script src="assets/js/main.js"></script>
    <!-- FORM -->
    <script src="assets/js/form.js"></script>
    <!-- TOAST -->
    <script src="assets/vendors/toast/toast.js"></script>

</body>

</html>