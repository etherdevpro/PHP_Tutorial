<!-- PHP provides a large number of predefined variables to any script which it runs.
 Many of these variables, however, cannot be fully documented as they are dependent upon which server is running, 
 the version and setup of the server, and other factors.  -->

 <!-- PHP also provides an additional set of predefined arrays containing variables from the web server (if applicable), 
  the environment, and user input. -->

<!-- I have this function in my main files, it allows for easier SEO for some pages without having to rely on .htaccess and mod_rewrite for some things. -->
<?php
    function long_to_GET(){
        /**
        * This function converts info.php/a/1/b/2/c?d=4 TO
        * Array ( [d] => 4 [a] => 1 [b] => 2 [c] => ) 
        **/
        if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != ''){
            //Split it out.
            $tmp = explode('/',$_SERVER['PATH_INFO']);
            //Remove first empty item
            unset($tmp[0]);
            //Loop through and apend it into the $_GET superglobal.
            for($i=1;$i<=count($tmp);$i+=2){ $_GET[$tmp[$i]] = $tmp[$i+1];}
        }
    }
?>