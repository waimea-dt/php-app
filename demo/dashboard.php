
<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <!-- This could be any information from the database -->

        <?php global $isLoggedIn; ?>
            

        <?php if ($isLoggedIn): ?>

            <h1>Dashboard</h1>

            <section id="dashboard">

                <article
                    hx-get="components/data-sales.php"
                    hx-trigger="load, every 300s"
                >
                    Loading sales data...
                </article>

                <article
                    hx-get="components/data-system.php"
                    hx-trigger="load, every 1s"
                >
                    Loading system status...
                </article>

            </section>

        <?php else: ?>

            <h1>Forbidden</h1>

            <p>You are not authorised to see this information</p>

        <?php endif ?>


    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>