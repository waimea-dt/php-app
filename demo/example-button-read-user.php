<?php 
    // Fake data
    $id = 13;
?>


<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <h1>View User Record via GET</h1>

        <article id="example">

            <p>This button will submit a GET request...</p>

            <p>
                <button
                    hx-get="components/details-user.php?id=<?= $id ?>"
                    hx-target="#example"
                >
                    View User Details
                
                </button>
            </p>

            <p><em>Note: The user ID (<?= $id ?>) is sent as a URL GET parameter...</em></p>

            <pre><code>hx-get="components/details-user.php?id=<?= $id ?>"</code></pre>
        
        </article>

    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>