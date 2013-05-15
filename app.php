<?php $title = "Terminus Past"; ?>
<?php /* seamless paper by http://goblinstock.deviantart.com/ */ ?>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href='http://fonts.googleapis.com/css?family=Asul' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Pirata+One' rel='stylesheet' type='text/css' />
        <style type="text/css">
            * {
                padding: 0;
                margin: 0;
                font-family: 'Asul', serif;
            }
            /*'''''''''''*\
            |    FONTS    |
            \*___________*/
            h1 {
                font-family: 'Pirata One', serif;
                font-size: 48pt;
                text-shadow: 0 0 12px rgba( 170, 150, 130, 1 );
            }
            h2 {
                font-family: 'Tangerine', serif;
                font-size: 2em;
            }
            a {
                color: black;
            }
            span.horizontal-separator {
                margin: 0 8px;
            }
            /*''''''''''''*\
            |    LAYOUT    |
            \*____________*/
            body {
                background-image: url( '/images/the-hub-of-time-by-daniel-dociu.jpg' );
                background-repeat: repeat-y;
                background-position: center -250px;
            }
            div.bodywrapper {
                width: 960px;
                margin: 0 auto 40px;
                color: white;
                text-shadow: 1px 1px 1px rgba( 0, 0, 0, 0.3 );
            }
            div.page {
                border-radius: 3px;
                background-color: rgba( 255, 255, 255, 0.5 );
                background-image: url( '/images/seamless-paper.png' );
                padding: 20px;
                box-shadow: inset 1px 1px 0 rgba( 255, 255, 255, 0.3 ),
                            inset -1px 0 0 rgba( 255, 255, 255, 0.2 ),
                            inset 0 -1px 1px rgba( 0, 0, 0, 0.5 ),
                            0 0 5px rgba( 0, 0, 0, 0.5 );
            }
            div.footerwrapper {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #ddd;
                box-shadow: 0 -20px 40px rgba( 0, 0, 0, 0.5 );
            }
            div.footer {
                left: 960px;
                margin: 0 auto;
                text-align: center;
                padding: 6px;
                font-size: 8pt;
                text-shadow: -1px 1px 1px white;
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
                <h2>This is a headline</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
                <h2>This is another headline</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
                <h2>This is also a headline</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
                <h2>This is a headline still</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
                <h2>This is also a headline</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
                <h2>This is a headline still</h2>
                <p>Hodor hodor hodor. Hodor. Hodor hodor.</p>
                <p>Hodor. Hodor hodor. Hodor? Hodor.</p>
            </div>
        </div>
        <div class="footerwrapper">
            <div class="footer">
                <strong><i><?php echo $title; ?></i></strong>
                &nbsp;
                is a private non-profit role-playing game
                <span class="horizontal-separator">&bull;</span>
                Website design by
                <a href="http://www.writtengames.com">Written Games</a>
                <span class="horizontal-separator">&bull;</span>
                Background image by
                <a href="http://www.tinfoilgames.com/">Daniel Dociu</a>
            </div>
        </div>
    </body>
</html>