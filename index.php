<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="keywords" content="Нилов Вадим, Nilov Vadim, PHP developer, PHP, backend, backend developer, frontend, frontend developer" />
    <meta name="description" content="Personal site of Nilov Vadim, php developer" />
    <title>Vadim Nilov's homepage</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <?php if ($_SERVER['HTTP_HOST'] == 'lookover.me'):?>
        <link rel="stylesheet" href="assets/css/styles_grey.css">
    <?php else: ?>
        <link rel="stylesheet" href="assets/css/styles.css">
    <?php endif;?>
</head>
<body class="background--main">
<div class="header">
    <div class="container">
        <div class="layout  layout--middle">
            <div class="layout__item  u-1/3  u-3/4-palm   u-1/4-lap">
                <div class="brand">
                    Vadim Nilov
                </div>
            </div><!--
         --><div class="hamburger  js-hamburger  layout__item  u-1/4-palm"><i class="mdi mdi-menu"></i></div><!--
         --><div class="main-menu  js-main-menu  layout__item  u-2/3  u-1/1-palm  u-3/4-lap">
                <ul class="list-inline">
                    <li class="main-menu__item"><a href="#aboutMe" data-scroll>About me</a></li>
                    <li class="main-menu__item"><a href="#workExperience" data-scroll>Work Experience</a></li>
                    <li class="main-menu__item"><a href="#skills" data-scroll>Skills</a></li>
                    <li class="main-menu__item"><a href="#follow" data-scroll>Follow me</a></li>
                    <li class="main-menu__item"><a href="mailto:nilov.vadim@gmail.com">Hire me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="welcome-word" id="aboutMe">
                <div class="flag  flag--top">
                    <div class="flag__img">
                        <img src="images/avatar.jpg">
                    </div>
                    <div class="flag__body">
                        <p>Hello! I’m glad that you've come to my homepage. Let me tell you a little about myself.</p>
                        <p>I'm a professional web-developer from Moscow. I have more than 5 years
                            experience in PHP development. I have a lot of experience in back-end and
                            front-end developing for applications and solutions for hi-load projects.
                            I know what OOP stands for and often bring this concept into my projects.
                            I am continuously learning and keeping up-to-date on all the modern technologies
                            and methodologies that are coming out. And you might like to know that as an individual,
                            I'm disciplined, punctual, and consider myself a very self-motivated developer.</p>
                        <p>I am available to consider opportunities for relocating</p>
                        <p>I'm ready for new challenges.</p>

                        <a href="#workExperience" class="link" data-scroll>Click here</a> to read more about my work experience.</div>
                </div>
        </div>
    </div>
</div>

<div class="main">
    <div class="container">
        <div class="accordion" id="workExperience">
            <div class="year  accordion__header" id="ctcmedia">CTC Media</div>
            <div class="experience  accordion__body">
                <h3>July 2014 &mdash; Present</h3>
                <div>
                    <h4>Responsibilities</h4>
                    <ul class="list-bare">
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building and maintenance PHP websites using PHP based frameworks Bitrix, Yii, Symfony</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Created cross browser and responsible markup (using Twitter Bootstrap, InuitCSS)</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Maintaining project schedules and tasks</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Documenting features, technical specifications and infrastructure requirements</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Code refactoring and MySQL optimization</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Improving back-end infrastructure</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building DOS and DDOS protection</div></li>
                    </ul>
                </div>
                <h4>Projects:</h4>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>The Kitchen - Quotes</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created quotes generator &ndash; <a href="http://quote.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>social sharing capability</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>quotes management system for content-managers</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive for integration to external sites (<a href="http://quote.ctc.ru/" target="_blank" rel="nofollow">http://quote.ctc.ru/?nowrap=true</a>)</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div><strong>Laravel</strong> 5.2 Framework</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Social Services API</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>«The Biggest Loser» voting</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created landing page &ndash; <a href="http://big.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>voting feature</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>show statistics</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>management system for content-managers</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive for integration to external sites (<a href="http://big.ctc.ru/" target="_blank" rel="nofollow">http://big.ctc.ru/?nowrap=true</a>)</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div><strong>Laravel</strong> 5.2 Framework</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Social Services API</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>Masterchef. Kids.</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created voting page &ndash; <a href="http://mchefkids.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>voting by social services (facebook, twitter, vkontakte, odnoklassniki)</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Social Services API</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>Molodezhka. Season 3</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created landing page &ndash; <a href="http://m3.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>light animations</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>clever landing (operating system and device recognition for changes store button)</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Build system (Gulp.js)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>CTC LOVE</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created website for CTC LOVE tv channel. &ndash <a href="http://ctclove.ru" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                    <ul class="list-bare">
                                        <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>integration with external service for tv programm synchronization</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>integration with <a href="http://videomore.ru" target="_blank" rel="nofollow">Videomore</a> video service</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>users authorization</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>tests service</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>castings and quiz service</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>news, ... e.t.c.</div></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>OAuth</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>MySQL</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Twitter Bootstrap</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__example">
                            <p><a href="https://github.com/vnilov/classes/blob/master/VideomoreApi.php" rel="nofollow" target="_blank">code example</a></p>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>RUSSO TURISTO</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created landing page &ndash; <a href="http://russo-turisto.ctc.ru" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>tests service</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>MySQL</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__example">
                            <p><a href="https://github.com/vnilov/scss/blob/master/russo-turisto.scss" rel="nofollow" target="_blank">code example</a></p>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>SHIP</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created landing page &ndash; <a href="http://k.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>users authorization</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>tests service</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>OAuth</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>MySQL</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>CSS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Twitter Bootstrap</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>MBAND</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created contest page &ndash; <a href="http://mband.ctclove.ru/" target="_blank" rel="nofollow" class="project__link">MBAND</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adding form to take part in the contest</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>results listing</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Masonry (Listing elements)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>MySQL</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>BEST FATHER</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created casting page &ndash; <a href="http://papabest.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                    <ul class="list-bare">
                                        <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                        <li><i class="mdi  mdi-chevron-right"></i><div>casting form</div></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>MySQL</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>CTC SECOND SCREEN</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created landing page &ndash; <a href="http://2s.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>adaptive markup</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>light animations</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>GOODS CATALOG</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created products catalog &ndash; <a href="http://catalog.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>products listing</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>product card</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>SASS (SCSS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>InuitCSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>CTC [previous version]</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Maintance project &ndash; <a href="http://old.ctc.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>integration with external service for tv programm synchronization</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>integration with <a href="http://videomore.ru" target="_blank" rel="nofollow">Videomore</a> video service</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>tv projects module</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>tests service</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>castings and quiz service</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>news module, ... e.t.c.</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX, AngularJS)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>LESS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Twitter Bootstrap</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__example">
                            <p><a href="https://github.com/vnilov/classes/blob/master/UnisenderAPI.php" rel="nofollow" target="_blank">code example</a></p>
                            <p><a href="https://github.com/vnilov/classes/blob/master/UnisenderAPITest.php" rel="nofollow" target="_blank">code example</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="year  accordion__header" id="rambler">Rambler & Co</div>
            <div class="experience  accordion__body">
                <h3>August 2012 &mdash; June 2014</h3>
                <div>
                    <h4>Responsibilities</h4>
                    <ul class="list-bare">
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building PHP website using PHP based framework <a href="http://www.bitrixsoft.com" rel="nofollow" target="_blank">Bitrix</a></div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building and editing framework modules</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Web Services Integration ( Tvigle, 2GIS )</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Creating cross browser layouts</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Working with project managers and other team member</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Maintaining project schedules and tasks</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Documenting features, technical specifications and infrastructure requirements</div></li>
                    </ul>
                </div>
                <h4>Projects</h4>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>LETIDOR</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Maintance project and improvement project &ndash; <a href="http://letidor.ru/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>articles</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>tests module</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>integration with <a href="http://www.tvigle.ru/" rel="nofollow" target="_blank">TVIGLE</a> video service</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>forum</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>auction</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>pregnancy calendar, ... e.t.c.</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>CSS</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>OAuth</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__example">
                            <p><a href="https://github.com/vnilov/classes/blob/master/CTradeUnit.php" rel="nofollow" target="_blank">code example</a></p>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>MY FAMILY</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created promo project &ndash; <a href="http://letidor.ru/moya-semya/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>user contests</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>articles</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>consultation section</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>CSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>POLAROID</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created promo project &ndash; <a href="http://letidor.ru/polaroid/" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>user contests</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>promo materials</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>CSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="year  accordion__header" id="army">Signal corps, Russian Army</div>
            <div class="experience  accordion__body">
                <h3> July 2011 – July 2012</h3>
                <h4>Military rank:&nbsp;Lance-sergeant</h4>
                <div>
                    <h4>Responsibilities</h4>
                    <i class="mdi mdi-satellite-variant"></i>Top Secret
                </div>
            </div>
            <div class="year  accordion__header" id="markin">Markin Production</div>
            <div class="experience  accordion__body">
                <h3>March 2009 &mdash; June 2011</h3>
                <div>
                    <h4>Responsibilities</h4>
                    <ul class="list-bare">
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building PHP website</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building and editing framework modules</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Maintaining project schedules and tasks</div></li>
                    </ul>
                </div>
                <h4>Projects</h4>
                <div class="project">
                    <div class="project__name  text--strong">
                        <span>MARKIN.RU</span>
                    </div>
                    <div class="project__content">
                        <div class="project__issue">
                            <div>
                                <div class="text--strong">Issue</div>
                                Created project &ndash; <a href="http://markin.ru" target="_blank" rel="nofollow" class="project__link">Link</a>
                                <br/>
                                <div class="u-pt-  text--strong">Features:</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>user authorization</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>users page</div>
                                        <ul>
                                            <li><i class="mdi  mdi-chevron-double-right"></i><div>u2u messages</div></li>
                                            <li><i class="mdi  mdi-chevron-double-right"></i><div>profile page</div></li>
                                            <li><i class="mdi  mdi-chevron-double-right"></i><div>achievement page</div></li>
                                        </ul>
                                    </li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>forums</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>market</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__technologies">
                            <div>
                                <div class="text--strong">Technologies</div>
                                <ul class="list-bare">
                                    <li><i class="mdi  mdi-chevron-right"></i><div>Memcache</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>JavaScript (Jquery, AJAX)</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>HTML</div></li>
                                    <li><i class="mdi  mdi-chevron-right"></i><div>CSS</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="year  accordion__header" id="qsoft">QSoft</div>
            <div class="experience  accordion__body">
                <h3>September 2008 &mdash; January 2009</h3>
                <div>
                    <h4>Responsibilities</h4>
                    <ul class="list-bare">
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building PHP websites</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Building and editing framework components and other PHP scripts</div></li>
                    </ul>
                </div>
                <h4>Participated in projects:</h4>
                <ul class="list-bare">
                    <li><i class="mdi  mdi-chevron-right"></i><div><a href="http://svyaznoy.ru" rel="nofollow" target="_blank">Svyaznoy</a></div></li>
                    <li><i class="mdi  mdi-chevron-right"></i><div><a href="http://eldorado.ru" rel="nofollow" target="_blank">Eldorado</a></div></li>
                </ul>
            </div>
            <div class="year  accordion__header" id="education">Education</div>
            <div class="experience  accordion__body">
                <h3> September 2005 &mdash; January 2011</h3>
                <div>
                    <h4><a href="http://en.msiu.ru" target="_blank" rel="nofollow" class="project__link">Moscow State Industrial University</a></h4>
                </div>
                <div>
                    <div class="u-mb  u-mt"><span class="text--strong ">Specialization:</span>&nbsp;Information Theory and Computer Engineering</div>
                    <div class="text--strong">
                    Completed computer science courses
                    </div>
                    <ul class="list-bare">
                        <li><i class="mdi  mdi-chevron-right"></i><div>Linux</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Ruby</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Java</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>C</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Assembler</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>PHP</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Haskell</div></li>
                        <li><i class="mdi  mdi-chevron-right"></i><div>Cyber security</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="key-skills" id="skills">
    <div class="container">
        <h1>KEY SKILLS</h1>
        <p>
            <span class="text--strong">Computer Languages: </span>
            Proficient with PHP(OOP) and SQL(MySQL, PostgreSQL). Familiar with С, C++, Java and Ruby.
        </p>
        <p>
            <span class="text--strong">Web Development: </span>
            Proficient with PHP, HTML, JavaScript (particular jQuery, AndulrJS), SASS, CSS and XML. Familiar with nodeJS and noSQL.
        </p>
        <p>
            <span class="text--strong">Frameworks and CMS: </span>
            Proficient with Bitrix. Familiar with <span class="text--strong">Yii, Symfony, Symfony2</span>, Joomla, WordPress, Ruby on Rails.
        </p>
        <p>
            <span class="text--strong">Operating Systems: </span>
            Proficient with Linux, particularly Linux Mint, Fedora, Ubuntu. Familiar with FreeBSD.
        </p>
        <p>
            <span class="text--strong">Application Software:</span>
            Proficient with NGINX, Apache, Git. Familiar with Memcache.
        </p>
        <p>
            <span class="text--strong">Other skills:</span>
            Proficient with Open Office and Miscrosoft Office. Familiar with Google Analytics and Yandex Metrics.
        </p>
    </div>
</div>
<div class="any-questions" id="follow">
    <div class="container">
        If you have any questions &mdash; just ask me!
        <ul>
            <li><i class="mdi  mdi-email"></i><div><a href="mailto:nilov.vadim@gmail.com">mail</a> me</div></li>
            <li><i class="mdi  mdi-linkedin-box"></i><div><a href="https://ru.linkedin.com/in/nilov" target="_blank">LinkedIn</a></div></li>
            <li><i class="mdi  mdi-skype"></i><div>write or call me: v_nilov</div></li>
            <li><i class="mdi  mdi-github-circle"></i><div>fork me on <a href="https://github.com/vnilov" target="_blank">GitHub</a></div></li>
            <li><i class="mdi  mdi-stackoverflow"></i><div>my CV on <a href="http://careers.stackoverflow.com/cv/employer/290222" target="_blank">StackOverFlow</a></div></li>
            <li><i class="mdi  mdi-facebook-box"></i><div>follow me on <a href="http://facebook.com/nilov.vadim" target="_blank">Facebook</a></div></li>
        </ul>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="layout  layout--middle">
            <div class="layout__item  u-2/3">&copy 2015 Nilov Vadim</div><!--
          --><div class="layout__item  u-1/3  text--right">
                <a href="/files/CV_VNilov_July2016.pdf" class="footer__link">My CV</a>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="application/javascript" src="assets/bower_components/jquery-ui/ui/minified/core.min.js"></script>
<script type="application/javascript" src="assets/bower_components/jquery-ui/ui/minified/widget.min.js"></script>
<script type="application/javascript" src="assets/bower_components/jquery-ui/ui/minified/accordion.min.js"></script>
<script type="application/javascript" src="assets/js/vendor/smooth-scroll.min.js"></script>
<script type="application/javascript" src="assets/bower_components/headroom.js/dist/headroom.min.js"></script>
<script type="application/javascript" src="assets/bower_components/headroom.js/dist/jQuery.headroom.min.js"></script>
<script type="application/javascript" src="assets/js/src/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67791338-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>