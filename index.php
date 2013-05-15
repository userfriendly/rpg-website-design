<?php $title = "The City"; ?>
<html>
    <head>
        <title>Steampunk PBEM RPG Website</title>
        <link href='http://fonts.googleapis.com/css?family=Asul' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css' />
        <style type="text/css">
            * {
                padding: 0;
                margin: 0;
                font-family: 'Asul';
            }
            /*'''''''''''*\
            |    FONTS    |
            \*___________*/
            h1 {
                font-family: 'Fredericka the Great', cursive;
                font-size: 3em;
                color: white;
            }
            h2 {
                font-family: 'Tangerine', serif;
                font-size: 2em;
            }
            a {
                color: black;
            }
            /*''''''''''''*\
            |    LAYOUT    |
            \*____________*/
            body {
                background-image: url( '/images/the-hub-of-time-by-daniel-dociu.jpg' );
                background-repeat: no-repeat;
                background-position: center;
            }
            div.bodywrapper {
                width: 960px;
                margin: 20px auto;
                color: white;
            }
            div.page {
                border-radius: 10px;
                background-color: rgba( 255, 255, 255, 0.5 );
                background-image: url( '/images/bg.jpg' );
                background-repeat: no-repeat;
                background-position: center;
                opacity: 0.7;
                padding: 20px;
                box-shadow: inset 1px 1px 0 rgba( 255, 255, 255, 0.2 ),
                            inset -1px 0 0 rgba( 255, 255, 255, 0.2 ),
                            inset 0 -1px 1px rgba( 0, 0, 0, 0.6 ),
                            0 0 10px rgba( 0, 0, 0, 0.6 );
            }
            div.footerwrapper {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: white;
            }
            div.footer {
                left: 960px;
                margin: 0 auto;
                text-align: center;
                padding: 4px;
                font-size: 8pt;
            }
        </style>
    </head>
    <body>
        <div class="bodywrapper">
            <div class="header">
                <h1><?php echo $title; ?></h1>
            </div>
            <div class="page">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h2>Game of Hodor!</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor?</p>
                <h3>Hodor!</h3>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor?</p>
                <h3>Hodor!</h3>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor?</p>
                <h3>Hodor!</h3>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor?</p>
            </div>
        </div>
        <div class="footerwrapper">
            <div class="footer">
                <i><?php echo $title; ?></i> is a private role-playing game and entirely non-profit
                &bull;
                Website design by
                <a href="http://www.writtengames.com">Written Games</a>
                &bull;
                Background image by
                <a href="http://www.tinfoilgames.com/">Daniel Dociu</a>
            </div>
        </div>
    </body>
</html>