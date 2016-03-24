<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/docs.css">
    <!--link rel="stylesheet" href="/css/scrollmain.css"-->

</head>

<body data-spy="scroll">

<header class="navbar navbar-static-top bs-docs-nav" id="header_id" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Gurucodes!</a>
        </div>
        <nav id="bs-navbar" class="navbar-collapse collapse in" aria-expanded="true">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/news">News</a>
                </li>
                <li><a href="/tasks">Tasks</a>
                </li>
                <li><a href="/contests">Contests</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth/login/"><span class="glyphicon glyphicon-log-in"></span> Log in</a>
                </li>
                <li><a href="/auth/signup/"><span class="glyphicon glyphicon-user"></span> Sign up</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="bs-docs-header" id="context_id" tabindex="-1">
    <div class="container">
        <h1>Welcome to the Gurucodes!</h1>
        <p>
        <h4>The place, where you can learn programming by doing challenging tasks!</h4>
        </p>
        <div id="carbonads-container">
            <div class="carbonad">
                <div id="azcarbon"></div>
                <script>
                    var z = document.createElement("script");
                    z.async = !0, z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(z, s);
                </script>
            </div>
        </div>
    </div>
</div>


<div class="container bs-docs-container">
    <div class=row>
        <div class=col-md-9 role=main>
            <div class=bs-docs-section>
                <h1 id=download class=page-header>Download</h1>
                <p class=lead>Bootstrap (currently v3.3.6) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
                <div class="row bs-downloads">
                    <div class=col-sm-4>
                        <h3 id=download-bootstrap>Bootstrap</h3>
                        <p>Compiled and minified CSS, JavaScript, and fonts. No docs or original source files are included.</p>
                        <p> <a href=https://github.com/twbs/bootstrap/releases/download/v3.3.6/bootstrap-3.3.6-dist.zip class="btn btn-lg btn-outline" onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;Getting started&quot;,&quot;Download&quot;,&quot;Download compiled&quot;)">Download Bootstrap</a> </p>
                    </div>
                    <div class=col-sm-4>
                        <h3 id=download-source>Source code</h3>
                        <p>Source Less, JavaScript, and font files, along with our docs. <strong>Requires a Less compiler and <a href=#grunt>some setup.</a></strong>
                        </p>
                        <p> <a href=https://github.com/twbs/bootstrap/archive/v3.3.6.zip class="btn btn-lg btn-outline" onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;Getting started&quot;,&quot;Download&quot;,&quot;Download source&quot;)">Download source</a> </p>
                    </div>
                    <div class=col-sm-4>
                        <h3 id=download-sass>Sass</h3>
                        <p><a href=https://github.com/twbs/bootstrap-sass>Bootstrap ported from Less to Sass</a> for easy inclusion in Rails, Compass, or Sass-only projects.</p>
                        <p> <a href=https://github.com/twbs/bootstrap-sass/archive/v3.3.6.tar.gz class="btn btn-lg btn-outline" onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;Getting started&quot;,&quot;Download&quot;,&quot;Download Sass&quot;)">Download Sass</a> </p>
                    </div>
                </div>
                <h2 id=download-cdn>Bootstrap CDN</h2>
                <p>The folks over at <a href="https://www.maxcdn.com/">MaxCDN</a> graciously provide CDN support for Bootstrap's CSS and JavaScript. Just use these <a href="https://www.bootstrapcdn.com/">Bootstrap CDN</a> links.</p>
                <figure class=highlight><pre><code class=language-html data-lang=html><span class=c>&lt;!-- Latest compiled and minified CSS --&gt;</span>
                            <span class=nt>&lt;link</span> <span class=na>rel=</span><span class=s>"stylesheet"</span> <span class=na>href=</span><span class=s>"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"</span> <span class=na>integrity=</span><span class=s>"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"</span> <span class=na>crossorigin=</span><span class=s>"anonymous"</span><span class=nt>&gt;</span>

                            <span class=c>&lt;!-- Optional theme --&gt;</span>
                            <span class=nt>&lt;link</span> <span class=na>rel=</span><span class=s>"stylesheet"</span> <span class=na>href=</span><span class=s>"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"</span> <span class=na>integrity=</span><span class=s>"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"</span> <span class=na>crossorigin=</span><span class=s>"anonymous"</span><span class=nt>&gt;</span>

                            <span class=c>&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
                            <span class=nt>&lt;script </span><span class=na>src=</span><span class=s>"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"</span>
                            <span class=na>integrity=</span><span class=s>"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"</span>
                            <span class=na>crossorigin=</span><span class=s>"anonymous"</span><span class=nt>&gt;&lt;/script&gt;</span></code></pre>
                </figure>
                <h2 id=download-bower>Install with Bower</h2>
                <p>You can also install and manage Bootstrap's Less, CSS, JavaScript, and fonts using <a href=http://bower.io>Bower</a>:</p>
                <figure class=highlight><pre><code class=language-bash data-lang=bash><span class=gp>$ </span>bower install bootstrap</code></pre>
                </figure>
                <h2 id=download-npm>Install with npm</h2>
                <p>You can also install Bootstrap using <a href=https://www.npmjs.com>npm</a>:</p>
                <figure class=highlight><pre><code class=language-bash data-lang=bash><span class=gp>$ </span>npm install bootstrap</code></pre>
                </figure>
                <p><code>require('bootstrap')</code> will load all of Bootstrap's jQuery plugins onto the jQuery object. The <code>bootstrap</code> module itself does not export anything. You can manually load Bootstrap's jQuery plugins individually by loading the <code>/js/*.js</code> files under the package's top-level directory.</p>
                <p>Bootstrap's <code>package.json</code> contains some additional metadata under the following keys:</p>
                <ul>
                    <li><code>less</code> - path to Bootstrap's main <a href=http://lesscss.org>Less</a> source file</li>
                    <li><code>style</code> - path to Bootstrap's non-minified CSS that's been precompiled using the default settings (no customization)</li>
                </ul>
                <h2 id=download-composer>Install with Composer</h2>
                <p>You can also install and manage Bootstrap's Less, CSS, JavaScript, and fonts using <a href=https://getcomposer.org>Composer</a>:</p>
                <figure class=highlight><pre><code class=language-bash data-lang=bash><span class=gp>$ </span>composer require twbs/bootstrap</code></pre>
                </figure>
                <h2 id=download-autoprefixer>Autoprefixer required for Less/Sass</h2>
                <p>Bootstrap uses <a href=https://github.com/postcss/autoprefixer>Autoprefixer</a> to deal with <a href=http://webdesign.about.com/od/css/a/css-vendor-prefixes.htm>CSS vendor prefixes</a>. If you're compiling Bootstrap from its Less/Sass source and not using our Gruntfile, you'll need to integrate Autoprefixer into your build process yourself. If you're using precompiled Bootstrap or using our Gruntfile, you don't need to worry about this because Autoprefixer is already integrated into our Gruntfile.</p>
            </div>
            <div class=bs-docs-section>
                <h1 id=whats-included class=page-header>What's included</h1>
                <p class=lead>Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
                <div class="bs-callout bs-callout-warning" id=jquery-required>
                    <h4>jQuery required</h4>
                    <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href=#template>starter template</a>. <a href=https://github.com/twbs/bootstrap/blob/v3.3.6/bower.json>Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
                </div>
                <h2 id=whats-included-precompiled>Precompiled Bootstrap</h2>
                <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
                <figure class=highlight><pre><code class=language-bash data-lang=bash>bootstrap/></code></pre>
                </figure>
                <p>The <code>less/</code>, <code>js/</code>, and <code>fonts/</code> are the source code for our CSS, JS, and icon fonts (respectively). The <code>dist/</code> folder includes everything listed in the precompiled download section above. The <code>docs/</code> folder includes the source code for our documentation, and <code>examples/</code> of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            </div>
            <div class=bs-docs-section>
                <h1 id=community class=page-header>Community</h1>
                <p class=lead>Stay up to date on the development of Bootstrap and reach out to the community with these helpful resources.</p>
                <ul>
                    <li>Read and subscribe to <a href="http://blog.getbootstrap.com/">The Official Bootstrap Blog</a>.</li>
                    <li>Chat with fellow Bootstrappers using IRC in the <code>irc.freenode.net</code> server, in the <a href=irc://irc.freenode.net/%23bootstrap>##bootstrap channel</a>.</li>
                    <li>For help using Bootstrap, ask on <a href=https://stackoverflow.com/questions/tagged/twitter-bootstrap-3>StackOverflow using the tag <code>twitter-bootstrap-3</code></a>.</li>
                    <li>Developers should use the keyword <code>bootstrap</code> on packages which modify or add to the functionality of Bootstrap when distributing through <a href=https://www.npmjs.com/browse/keyword/bootstrap>npm</a> or similar delivery mechanisms for maximum discoverability.</li>
                    <li>Find inspiring examples of people building with Bootstrap at the <a href=http://expo.getbootstrap.com>Bootstrap Expo</a>.</li>
                </ul>
                <p>You can also follow <a href=https://twitter.com/getbootstrap>@getbootstrap on Twitter</a> for the latest gossip and awesome music videos.</p>
            </div>
            <div class=bs-docs-section>
                <h1 id=disable-responsive class=page-header>Disabling responsiveness</h1>
                <p class=lead>Bootstrap automatically adapts your pages for various screen sizes. Here's how to disable this feature so your page works like <a href="../examples/non-responsive/">this non-responsive example</a>.</p>
                <h2>Steps to disable page responsiveness</h2>
                <ol>
                    <li>Omit the viewport <code>&lt;meta&gt;</code> mentioned in <a href=../css/#overview-mobile>the CSS docs</a>
                    </li>
                    <li>Override the <code>width</code> on the <code>.container</code> for each grid tier with a single width, for example <code>width: 970px !important;</code> Be sure that this comes after the default Bootstrap CSS. You can optionally avoid the <code>!important</code> with media queries or some selector-fu.</li>
                    <li>If using navbars, remove all navbar collapsing and expanding behavior.</li>
                    <li>For grid layouts, use <code>.col-xs-*</code> classes in addition to, or in place of, the medium/large ones. Don't worry, the extra-small device grid scales to all resolutions.</li>
                </ol>
                <p>You'll still need Respond.js for IE8 (since our media queries are still there and need to be processed). This disables the "mobile site" aspects of Bootstrap.</p>
                <h2>Bootstrap template with responsiveness disabled</h2>
                <p>We've applied these steps to an example. Read its source code to see the specific changes implemented.</p>
                <p> <a href=../examples/non-responsive/ class="btn btn-primary">View non-responsive example</a> </p>
            </div>
            <div class=bs-docs-section>
                <h1 id=license-faqs class=page-header>License FAQs</h1>
                <p class=lead>Bootstrap is released under the MIT license and is copyright 2015 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>
                <h2>It requires you to:</h2>
                <ul>
                    <li>Keep the license and copyright notice included in Bootstrap's CSS and JavaScript files when you use them in your works</li>
                </ul>
                <h2>It permits you to:</h2>
                <ul>
                    <li>Freely download and use Bootstrap, in whole or in part, for personal, private, company internal, or commercial purposes</li>
                    <li>Use Bootstrap in packages or distributions that you create</li>
                    <li>Modify the source code</li>
                    <li>Grant a sublicense to modify and distribute Bootstrap to third parties not included in the license</li>
                </ul>
                <h2>It forbids you to:</h2>
                <ul>
                    <li>Hold the authors and license owners liable for damages as Bootstrap is provided without warranty</li>
                    <li>Hold the creators or copyright holders of Bootstrap liable</li>
                    <li>Redistribute any piece of Bootstrap without proper attribution</li>
                    <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
                    <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
                </ul>
                <h2>It does not require you to:</h2>
                <ul>
                    <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
                    <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
                </ul>
                <p>The full Bootstrap license is located <a href=https://github.com/twbs/bootstrap/blob/master/LICENSE>in the project repository</a> for more information.</p>
            </div>
            <div class=bs-docs-section>
                <h1 id=translations class=page-header>Translations</h1>
                <p class=lead>Community members have translated Bootstrap's documentation into various languages. None are officially supported and they may not always be up to date.</p>
                <ul>
                    <li><a href=http://v3.bootcss.com/ hreflang=zh>Bootstrap 中文文档 (Chinese)</a>
                    </li>
                    <li><a href=https://kkbruce.tw/bs3/ hreflang=zh-TW>Bootstrap 3 中文手冊 (Chinese (Traditional))</a>
                    </li>
                    <li><a href=http://getbootstrap.dk/ hreflang=da>Bootstrap på Dansk (Danish)</a>
                    </li>
                    <li><a href=http://www.oneskyapp.com/fr/docs/bootstrap/getting-started/ hreflang=fr>Bootstrap en Français (French)</a>
                    </li>
                    <li><a href=http://holdirbootstrap.de/ hreflang=de>Bootstrap auf Deutsch (German)</a>
                    </li>
                    <li><a href=http://www.hackerstribe.com/guide/IT-bootstrap-3.1.1/ hreflang=it>Bootstrap in Italiano (Italian)</a>
                    </li>
                    <li><a href=http://bootstrapk.com/ hreflang=ko>Bootstrap 한국어 (Korean)</a>
                    </li>
                    <li><a href=http://bootstrapbrasil.github.io/ hreflang=pt-BR>Bootstrap em Português do Brasil (Brazilian Portuguese)</a>
                    </li>
                    <li><a href=http://www.oneskyapp.com/ru/docs/bootstrap/ hreflang=ru>Bootstrap по-русски (Russian)</a>
                    </li>
                    <li><a href=http://www.oneskyapp.com/es/docs/bootstrap/ hreflang=es>Bootstrap en Español (Spanish)</a>
                    </li>
                    <li><a href=http://www.trbootstrap.com hreflang=tr>Türkçe Bootstrap (Turkish)</a>
                    </li>
                    <li><a href=http://twbs.docs.org.ua hreflang=uk>Bootstrap українською (Ukrainian)</a>
                    </li>
                    <li><a href=http://getbootstrap.com.vn hreflang=vi>Bootstrap bằng tiếng Việt (Vietnamese)</a>
                    </li>
                </ul>
                <p><strong class=text-danger>We don't help organize or host translations, we just link to them.</strong>
                </p>
                <p>Finished a new or better translation? Open a pull request to add it to our list.</p>
            </div>
        </div>
        <div class=col-md-3 role=complementary>
            <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
                <ul class="nav bs-docs-sidenav">
                    <li class="active"> <a href=#download>Download</a> </li>
                    <li> <a href=#whats-included>What's included</a>
                        <ul class=nav>
                            <li><a href=#whats-included-precompiled>Precompiled</a>
                            </li>
                            <li><a href=#whats-included-source>Source code</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href=#community>Community</a> </li>
                    <li> <a href=#disable-responsive>Disabling responsiveness</a> </li>
                    <li> <a href=#license-faqs>License FAQs</a> </li>
                    <li> <a href=#translations>Translations</a> </li>
                </ul> <a class=back-to-top href=#top> Back to top </a>
            </nav>
        </div>
    </div>
</div>
<footer class=bs-docs-footer role=contentinfo>
    <div class=container>
        <ul class=bs-docs-footer-links>
            <li><a href=https://github.com/twbs/bootstrap>GitHub</a>
            </li>
            <li><a href=https://twitter.com/getbootstrap>Twitter</a>
            </li>
            <li><a href=../getting-started/#examples>Examples</a>
            </li>
            <li><a href="../about/">About</a>
            </li>
        </ul>
        <p>Designed and built with all the love in the world by <a href=https://twitter.com/mdo target=_blank>@mdo</a> and <a href=https://twitter.com/fat target=_blank>@fat</a>. Maintained by the <a href=https://github.com/orgs/twbs/people>core team</a> with the help of <a href=https://github.com/twbs/bootstrap/graphs/contributors>our contributors</a>.</p>
        <p>Code licensed <a rel=license href=https://github.com/twbs/bootstrap/blob/master/LICENSE target=_blank>MIT</a>, docs <a rel=license href=https://creativecommons.org/licenses/by/3.0/ target=_blank>CC BY 3.0</a>.</p>
    </div>
</footer>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>');
</script>
<script src=../dist/js/bootstrap.min.js></script>
<script src=../assets/js/docs.min.js></script>
<script src=../assets/js/ie10-viewport-bug-workaround.js></script>
<script>
    var _gauges = _gauges || [];
    ! function() {
        var e = document.createElement("script");
        e.async = !0, e.id = "gauges-tracker", e.setAttribute("data-site-id", "4f0dc9fef5a1f55508000013"), e.src = "//secure.gaug.es/track.js";
        var t = document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e, t)
    }();
</script>
<script src="/js/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/docs.min.js"></script>
<!--script src="/js/customizer.js"></script>
<script src="/js/application.js"></script-->

</body>

</html>