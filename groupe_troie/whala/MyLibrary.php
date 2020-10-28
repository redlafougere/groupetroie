<?php
  function entete($title)
  {
   echo "<!DOCTYPE html>\n";
   echo "<html lang='fr'>\n";
   echo "<head>";
   echo "<meta charset='UTF-8'>\n";
   echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>\n";
   echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\n";
   echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>\n";
   echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>\n";
   echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/test_2.css\">\n";
   echo "<script type=\"text/javascript\" src=\"js/testfliptitre.js\" ></script>\n";
   echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
   echo "<title>$title</title>\n";
   echo "<script> window.console = window.console || function(t) {}; </script>\n";
   echo "<script> if (document.location.search.match(/type=embed/gi)) {window.parent.postMessage(\"resize\", \"*\")}</script>\n";
   echo "</head>";

  }


?>