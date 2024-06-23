<?php 
    // Fake data
    $id = 13;
    $name='Karen Smith'; 
    $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
?>


<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <h1>Update User Details via PUT</h1>

        <article id="example">

            <p>This form will submit the data as a PUT request...</p>

            <article>
                <form
                    hx-put="actions/update-user.php"
                    hx-trigger="submit"
                    hx-target="#example"
                >
                    <h2>Update User</h2>

                    <input name="id" type="hidden" value="<?= $id ?>">

                    <label>Name</label>
                    <input name="name" type="text" required value="<?= $name ?>">

                    <label>Description</label>
                    <textarea name="description" required><?= $description ?></textarea>

                    <input type="submit" value="Update User">

                </form>
            </article>

            <p><em>Note: The user ID (<?= $id ?>) is sent as a hidden field within the form...</em></p>

            <pre><code>&lt;input name="id" type="hidden" value="<?= $id ?>"&gt;</code></pre>

            <h4>To Create the Form:</h4>

            <ol>
                <li>Using the current user's ID...</li>
                <li>Use a <strong>MySQL SELECT</strong> query to get current data</li>
                <li>Populate the form with the data</li>
                <li>The form PUT request will incldue the ID</li>
            </ol>
    
        </article>

    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>

