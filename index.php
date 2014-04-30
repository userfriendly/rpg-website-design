<?php $title = "Terminus Past"; ?>
<?php /* seamless paper by http://goblinstock.deviantart.com/ */ ?>
<html>
    <head>
        <meta name="robots" content="noindex, nofollow" />
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
            /*''''''''''''*\
            |    LAYOUT    |
            \*____________*/
            body {
                background-color: #090f03;
                background-image: url( '/images/the-hub-of-time-by-daniel-dociu.jpg' );
                background-repeat: no-repeat;
                background-position: center -300px;
            }
            div.bodywrapper {
                width: 960px;
                margin: 0 auto 40px;
                color: white;
            }
            div.page {
                border-radius: 3px;
                background-color: rgba( 255, 255, 255, 0.5 );
                background-image: url( '/images/seamless-paper.png' );
                padding: 10px 20px 20px;
                box-shadow: inset 1px 1px 0 rgba( 255, 255, 255, 0.3 ),
                            inset -1px 0 0 rgba( 255, 255, 255, 0.2 ),
                            inset 0 -1px 1px rgba( 0, 0, 0, 0.5 ),
                            0 0 3px rgba( 0, 0, 0, 0.3 );
                text-shadow: 1px 1px 1px rgba( 0, 0, 0, 0.3 );

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
            img.textwrap {
                margin-top: 5px;
                margin-bottom: 5px;
            }
            img.textwrap.left {
                float: left;
                margin-right: 15px;
            }
            img.textwrap.right {
                float: right;
                margin-left: 15px;
            }
            img.character {
                width: 143px;
                height: 200px;
            }
            /*'''''''''''*\
            |    FONTS    |
            \*___________*/
            div.title {
                font-family: 'Pirata One', serif;
                font-size: 48pt;
                font-weight: bold;
                text-shadow: 0 0 12px rgba( 170, 150, 130, 1 );
            }
            h2 {
                font-family: 'Tangerine', serif;
                font-size: 2em;
                margin: 10px 0 6px;
            }
            p {
                text-indent: 1.5em;
                margin: 10px 0;
            }
            p.blurb {
                font-style: italic;
                margin: 10px 0;
            }
            a {
                color: black;
            }
            span.horizontal-separator {
                margin: 0 8px;
            }
        </style>
    </head>
    <body>
        <div class="bodywrapper">
            <div class="header">
                <div class="title"><?php echo $title; ?></div>
            </div>
            <div class="page">
                <p class="blurb">
                    "Oh, I know. You're from the future.
                    And I'm supposed to be surprised
                    or incredulous or some such thing.
                    Am I right? Of course I'm right.
                    Well, let me tell you something.
                    You people have no idea how
                    incredibly annoying you are.
                    In any given timeline, somewhere
                    at some point, some nosey half-wit
                    will figure out how to travel back in
                    time - and then what? Where do you think
                    they end up? Huh? Who's going to clean up
                    the mess they make? Yeah,
                    I'm sure it sounds all totally dandy to you
                    - hey, let's
                    manipulate this, change that. Save this
                    girl, kill that guy.
                    Well, guess what, Robinson? Not today, and not you.
                    You're nicked!
                </p>
                <p class="blurb">
                    ... Who the fuck is Adolf Hinkel anyway?"
                </p>
                <h1>Setting</h1>
                <p>
                    An alternate history Europe
                    between 1900 and 1910.
                    While the continent is seething with tensions,
                    England's smartest minds are the country's
                    first and last line of defence against
                    regular incursions by vandals, misfits
                    and criminals from the future.

                </p>
                <h1>Characters</h1>
                <img class="character textwrap right" src="/images/tsiolkovsky.jpg" />
                <h2 style="text-align: right;">Konstantin Tsiolkovsky</h2>
                <p>
                    Emigrated to England because no-one in czarist Russia would publish his works, Konstantin Tsiolkovsky
                    finally has the time, resources and funding required to continue his research. Massively ahead of his
                    time, the former High School Maths teacher is laying the very foundation for the coming space age.
                </p>
                <p>
                    Proud of his all-metal dirigibles already being built in Britain and Germany,
                    his current project is much more
                    ambitious - putting a man-made object into an orbit around Earth.
                </p>
                <img class="character textwrap left" src="/images/hedda.jpg" />
                <h2>Hedda Blunt-Lytton</h2>
                <p>
                    The great-granddaughter of Ada Lovelace, Hedda is to inherit the family business upon coming of age.
                </p>
                <p>
                    <i>Babbage Lovelace Analytical Engines</i> is one of Britain's most prosperous private enterprises,
                    and was founded by Lovelace and Charles Babbage in the middle of the 19th century.
                </p>
                <br style="clear: both;" />
            </div>
        </div>
        <div class="footerwrapper">
            <div class="footer">
                <strong><i><?php echo $title; ?></i></strong>
                &nbsp;
                is a private invitation-only role-playing game
                <span class="horizontal-separator">&bull;</span>
                Website design and hosting by
                <a href="http://www.writtengames.com">Written Games</a>
                <span class="horizontal-separator">&bull;</span>
                Background image by
                <a href="http://www.tinfoilgames.com/">Daniel Dociu</a>
            </div>
        </div>
    </body>
</html>