
<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <h1>Create User Record via POST</h1>

        <article id="example">

            <p>This form will submit the data as a POST request...</p>

            <article>
                <form
                    hx-post="actions/create-user.php"
                    hx-trigger="submit"
                    hx-target="#example"
                >
                    <h2>New User</h2>

                    <label>Name</label>
                    <input name="name" type="text" required>

                    <label>Description</label>
                    <textarea name="description" required></textarea>

                    <input type="submit" value="Create User">

                </form>
            </article>

            <p><em>Note: The form submission URL</em>:</p>

            <pre><code>hx-post="actions/create-user.php"</code></pre>
        
        </article>

    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>