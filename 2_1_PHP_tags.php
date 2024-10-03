<!-- PHP Opening and Closing Tags -->

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h6>Case1</h6>
        <p>
            <?php echo 'if you want to serve PHP code in XHTML or XML documents, use these tags'; ?>
        <p>
        <h6>Case2</h6>
        <p>
            <?= 'print this string' ?>
        </p>
        <h6>Case3</h6>
        <p>
            <? echo 'this code is within short tags, but will only work '.
                    'if short_open_tag is enabled'; ?>
        </p>

        <!-- Short tags (example three) are available by default but can be disabled either via the short_open_tag php.ini 
         configuration file directive, or are disabled by default if PHP is built with the --disable-short-tags configuration. -->
    </body>
</html>




