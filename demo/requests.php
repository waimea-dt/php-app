<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <h1>Examples of HTTP Requests for CRUD Actions</h1>

        <section>

            <article>

                <table hx-boot="true">
                    <tr>
                        <td><a href="example-form-create-user.php"><button><strong>C</strong>reate</button></a></td>
                        <td>Data records are created using <strong>POST</strong> requests, usually through submitting forms.</td>
                    </tr>
                    <tr>
                        <td><a href="example-button-read-user.php"><button><strong>R</strong>ead</button></a></td>
                        <td>Data records can be read using <strong>GET</strong> requests, triggered by buttons, links, page loads, etc.</td>
                    </tr>
                    <tr>
                        <td><a href="example-form-update-user.php"><button><strong>U</strong>pdate</button></a></td>
                        <td>Existing data records are updated using <strong>PUT</strong> requests, usually through submitting forms.</td>
                    </tr>
                    <tr>
                        <td><a href="example-button-delete-user.php"><button><strong>D</strong>elete</button></a></td>
                        <td>Data records can be deleted using <strong>DELETE</strong> requests, triggered by buttons, links, etc.</td>
                    </tr>
                </table>
                
            </article>

            <article>
                <?php 
                    // Fake data
                    $id = 13;
                ?>

                <h2>Pick an Request Example...</h2>

                <p>Pick one of the request types to see how it works.</p>

                <p>Note that the requests user the following components / actions:</p>

                <pre><code>hx-post="actions/create-user.php"
hx-get="components/details-user.php?id=<?= $id ?>"
hx-put="actions/update-user.php"
hx-delete="actions/delete-user.php"</code></pre>

                <p>Even though the route URL is the same each time, <code>/user</code>, the routing system differentiates between them using the request method: POST / GET / PUT / DELETE.</p>

            </article>

        </section>
    
    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>



