<?php
    include 'DesignElementsClient.php';

    // Create new DesignElements client and add the elements you need, and the domain for the Publication.
    $client = new Amedia\DesignElementsClient(array('header', 'footer'), 'www.ba.no');

    // Fetch manifests from the DesignElement API.
    $designElements = $client->fetch();
?>
<html>
    <head>
        <title>Simple</title>
        <!-- Amedia resources: start -->
        <?php
            // Print links to all the resources (NB: Only css supported in this example)
            $designElements->printResourceLinks();
        ?>
        <!-- Amedia resources: end -->
    </head>
    <body>

        <!-- Amedia header: start -->
        <?php $designElements->printElement('header') ?>
        <!-- Amedia header: end -->

        <div id="content" style="margin-top:50px;margin-bottom:50px;">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>
        </div>

        <!-- Amedia footer: start -->
        <?php $designElements->printElement('header') ?>
        <!-- Amedia footer: end -->


    </body>
</html>
