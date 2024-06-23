<?php

    // Note that PHP doesn't create a $_PUT super-global, so we have to...

    // Was this a PUT request? If so, setup $_PUT array, since PHP doesn't do this!
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        parse_str(file_get_contents('php://input'), $_PUT);
    }
    else {
        $_PUT = null;
    }

?>


<h2>PUT Request Received!</h2>

<h4>Actions Required...</h4>

<ol>
    <li>User ID is in <strong>$_PUT</strong> as a hidden field</li>
    <li>User data is in <strong>$_PUT</strong></li>
    <li>Use ID and data in a <strong>MySQL UPDATE</strong> query</li>
    <li>Let user know it was successful</li>
</ol>

<h4>Example...</h4>

<ol>
    <li>
        <p>Data in <strong>$_PUT</strong>:</p>

        <pre><code><?php print_r($_PUT); ?></code></pre>
    </li>

    <li>
        <p>Run MySQL query:</p>

        <pre><code>UPDATE users
SET name=?, desc=?
WHERE id=?</code></pre>
    </li>

    <li>
        <p>Feedback:</p>

        <article>
            <p>User details for <?= $_PUT['name'] ?> updated successfully!</p>
        </article>
    </li>
</ol>

