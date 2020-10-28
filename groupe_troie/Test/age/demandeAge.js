

    function myFunction() {
        // First we will use prompt to ask a user for their age, like this.
        // The variable age will hold the user's response.
        ageText = 'You are ';
        agePerm = 'not';
        ageText1 = ' old enough to play this game';
        var age = prompt("What's your age");
    
        //Then we will use an if/else statement based on the age of the user. Here's an outline of the code, similar to what we've seen before.
        if (age < 13) {
            // do this code
            console.log('You must be 13 yrs old or older to play');
            ageText = ageText + agePerm + ageText1;
        } else // "otherwise"
        {
            // do this code
            console.log('You are old enough to play this game');
            ageText = ageText + ageText1;
        }
        writeText(ageText);
    }
    
    function writeText(ageText) {
        var str = document.getElementById("textA").innerHTML;
        var res = str.replace('Are you old enough to play?', ageText);
        //document.ageScript.textA.value = ageText;
        document.getElementById("textA").innerHTML = res;
    }
    
    function getForm() {
        location.reload();
    }
    
    hljs.initHighlightingOnLoad();