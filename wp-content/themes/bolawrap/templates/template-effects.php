    <?php 
    /* 
        Template Name: Effects Template
    */ 
    ?>
    <?php get_header(); ?>
    <div class="container" style="margin-top: 200px"><span id="changeText">blah</span></div>
    <div class="typewriter" id="myTypewriter">
    <h1>First Message.</h1>
    </div>

    <style>
    /* The typing effect */
    @keyframes typing {
    from { width: 0 }
    to { width: 100% }
    }

    /* The typewriter cursor effect */
    @keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: gray; }
    }
    .typewriter h1 {
        display: inline-block;
    overflow: hidden; /* Ensures the content is not revealed until the animation */
    border-right: .15em solid gray; /* The typwriter cursor */
    white-space: nowrap; /* Keeps the content on a single line */
    margin: 0 auto; /* Gives that scrolling effect as the typing happens */
    letter-spacing: .15em; /* Adjust as needed */
    animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
    }
    </style>
    <script>
    jQuery(document).ready(function() {

        var messages=["message1","message2  message2 message2","message3 message3"];
        var rank=0;

        // Code for Chrome, Safari and Opera
        document.getElementById("myTypewriter").addEventListener("webkitAnimationEnd", changeTxt);

        // Standard syntax
        document.getElementById("myTypewriter").addEventListener("animationend", changeTxt);

        function changeTxt(e){
        _h1 = this.getElementsByTagName("h1")[0];
        _h1.style.webkitAnimation = 'none'; // set element animation to none
        setTimeout(function() { // you surely want a delay before the next message appears
            _h1.innerHTML=messages[rank];
            var speed =3.5*messages[rank].length/20; // adjust the speed (3.5 is the original speed, 20 is the original string length
            _h1.style.webkitAnimation = 'typing '+speed+'s steps(40, end), blink-caret .75s step-end infinite'; //  switch to the original set of animation      
            (rank===messages.length-1)?rank=0:rank++; // if you have displayed the last message from the array, go back to the first one, else go to next message
            }, 1000);
        }
    
    });
    </script>
    <?php get_footer(); ?>