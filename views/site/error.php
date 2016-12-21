<h1>Error</h1>

<h2><?= $error->getMessage()." #".$error->getCode() ?></h2>

<h3><?= $error->getFile().":".$error->getLine() ?></h3>
<?php
print_r( $error->getTrace() );
echo "<br><br>";

$errorTrace = $error->getTrace();
foreach( $errorTrace as $trace ){
    echo $trace['file'].":".$trace['line']." ";
    if( array_key_exists('class', $trace) ){
        echo $trace['class'].$trace['type'];
    }
    echo $trace['function']."(";
    foreach( $trace['args'] as $argNum => $argv ){
        echo $argv;
        if( $argNum != sizeof( $argv ) - 1 ){
            echo ", ";
        }
    }
    echo ")<br>";
}
