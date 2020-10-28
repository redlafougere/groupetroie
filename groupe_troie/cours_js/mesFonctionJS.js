    function sayHello()
    {
        sayWord( "Hello" );
    }

    function createImage( image )
    {
        return "<img src=\"" + image + "\"  alt=\"\"/>"
    }

    // reçoie 1 parametre
    // ne retourne rien
    function sayWord( ID,word )
    {
        writeInId( ID , word );
    }


    function writeInId( id, content  )
    {
        document.getElementById( id ).innerHTML +=  content;
    }
    


    function displayResult( label, value )
    {
          var res = label+" = "+value+" --  ("+ typeof(value)+")";
          sayWord( res );
    }


    // reçoie 2 parametres
    // retourne l'addition des 2 parametre 
    function addition( a, b)
    {
        return a + b;
    }

    
