<?php 
    // Fake data
    $id = 13;
?>


<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <h1>Delete User Record via DELETE</h1>

        <article id="example">

            <p>This button will submit a DELETE request...</p>

            <p>
                <button
                    hx-delete="actions/delete-user.php?id=<?= $id ?>"
                    hx-target="#example"
                    hx-confirm="Really delete this user?"
                    class="danger"
                >
                    Delete User
                
                </button>
            </p>

            <p><em>Note: The user ID (<?= $id ?>) is sent as a URL GET parameter...</em></p>

            <pre><code>hx-delete="actions/delete-user.php?id=<?= $id ?>"</code></pre>

        </article>
             
    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>
