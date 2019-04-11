<!doctype html>
<html class="no-js" lang="en-gb">
<head>
    <meta charset="utf-8">
    <title>Start-CSS Classes Test Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    
    <!-- IE 9+, FF 8+, Opera 12, Chrome 29+, Android ~4.4+ -->
    <link rel="stylesheet" href="/start-css/css/start-classes.css" media="only screen and (min-resolution: 0.1dpcm),only screen and (-webkit-min-device-pixel-ratio:0) and (min-color-index:0)">
    
    <style>
        <?php echo file_get_contents('../_test-page.css'); ?>
    </style>

</head>
<body role="document" class="tb-baseline  tb-outlines">

    <svg xmlns="http://www.w3.org/2000/svg" display="none">
        <symbol id="icon-building" viewBox="0 0 24 24">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </symbol>
        <symbol id="icon-calendar" viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
        </symbol>
        <symbol id="icon-chevron-down" viewBox="0 0 24 24">
            <polyline points="6 9 12 15 18 9"></polyline>
        </symbol>
        <symbol id="icon-chevron-up" viewBox="0 0 24 24">
            <polyline points="18 15 12 9 6 15"></polyline>
        </symbol>
        <symbol id="icon-chevron-left" viewBox="0 0 24 24">
            <polyline points="15 18 9 12 15 6"></polyline>
        </symbol>
        <symbol id="icon-chevron-right" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
        </symbol>
        <symbol id="icon-cross" viewBox="0 0 24 24">
            <line x1="18" y1="6" x2="6" y2="18"></line>
			<line x1="6" y1="6" x2="18" y2="18"></line>
        </symbol>
        <symbol id="icon-email" viewBox="0 0 24 24">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
        </symbol>
        <symbol id="icon-facebook" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
        </symbol>
        <symbol id="icon-fax" viewBox="0 0 24 24">
            <path class="st0" d="M6,18H4c-1.1,0-2-0.7-2-1.6v-4c0-0.9,0.9-1.6,2-1.6h16c1.1,0,2,0.7,2,1.6v4c0,0.9-0.9,1.6-2,1.6h-2"/>
            <rect x="6" y="14" class="st0" width="12" height="8"/>
            <path class="st0" d="M6,7.4L4.8,6.2C4.4,5.7,4.4,5,4.8,4.6c0,0,0.1,0,0.1-0.1c1.4-1.1,3-1.9,4.7-2.2c1.6-0.4,3.2-0.4,4.8,0 c1.7,0.4,3.3,1.1,4.7,2.2c0.5,0.4,0.5,1.1,0.1,1.6c0,0,0,0.1-0.1,0.1L18,7.4c-0.4,0.4-1,0.5-1.5,0.1c-0.4-0.3-0.9-0.6-1.4-0.8 c-0.4-0.2-0.7-0.6-0.7-1v-1c-1.6-0.4-3.2-0.4-4.8,0v1c0,0.4-0.3,0.8-0.7,1C8.4,6.9,8,7.2,7.5,7.5C7.1,7.8,6.4,7.8,6,7.4z"/>
        </symbol>
        <symbol id="icon-file" viewBox="0 0 24 24">
            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
            <polyline points="13 2 13 9 20 9"></polyline>
        </symbol>
        <symbol id="icon-linkedin" viewBox="0 0 24 24">
            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
            <rect x="2" y="9" width="4" height="12">
            </rect><circle cx="4" cy="4" r="2"></circle>
        </symbol>
        <symbol id="icon-menu" viewBox="0 0 24 24">
            <line x1="3" y1="12" x2="21" y2="12"></line>
			<line x1="3" y1="6" x2="21" y2="6"></line>
			<line x1="3" y1="18" x2="21" y2="18"></line>
        </symbol>
        <symbol id="icon-person" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </symbol>
        <symbol id="icon-phone" viewBox="0 0 24 24">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </symbol>
        <symbol id="icon-twitter" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
        </symbol>
    </svg>

    <main>
        <h1>Start CSS Classes Test Page</h1>
        
        <p><a href="#bottom">Skip to bottom</a></p>
        
        <h2>Bordered boxes</h2>
        
        <aside class="bordered">
            <h3>Aside</h3>
            <p>Some text</p>
        </aside>
        <aside class="bordered">
            <h3>Aside</h3>
            <div>Last element without a bottom margin - should still have a gap below due to pseudo element.</div>
        </aside>
        <aside class="padded  test_bg">
            <h3>Aside</h3>
            <p>This box should only have padding, no border.</p>
        </aside>
        <aside class="padded  test_bg">
            <h3>Aside</h3>
            <div>And again - last element without a bottom margin - should still have a gap below due to pseudo element.</div>
        </aside>
        
        <h2>Subtitles and taglines</h2>
        <p>
            <a href="http://html5doctor.com/howto-subheadings/">html5 Doctor: How to mark up subheadings, subtitles, alternative titles and taglines</a>
        </p>
        
        <article class="padded">
            <header>
                <h2>This is a title: <b class="subtitle">with an inline subtitle</b></h2>  
            </header>
            <p>Some body text.</p>
        </article>

        <article class="bordered">
            <header>
                <h2>This is a title</h2>
                <p class="subtitle"><b>With a sub title</b></p>
            </header>
            <p>The <code>.subtitle</code> class above is applied to the paragraph so we can move it next to the heading with negative a margin.</p>
        </article>
        
        <article class="padded">
            <header>
                <h2>This is a title</h2>
                <p class="tagline">With a tagline</p>
            </header>
            <p><b>A lede (lead) paragraph is marked up using <code>&lt;b&gt;</code> tags.</b></p>
            <p>Note a tagline and strapline are the same thing, and neither <em>really</em> apply here according to the <a href="https://en.wikipedia.org/wiki/Tagline" rel="external">Wikipedia definition</a>, though it's really just splitting hairs. I don't know what <em>else</em> to call it, and it is different from both a subtitle and a lede paragraph.</p>
        </article>
        
        <h2>CTA</h2>
        <p>
            CTA's should never look like real buttons, but they can be button-like:</a>
        </p>
        <p>
            <a href="" class="cta">A CTA &hellip;</a>
        </p>
        
        <p>
            <a href="" class="cta">A Longer CTA title with an icon<svg class="icon" aria-hidden="true"><use xlink:href="#icon-chevron-right"></use></svg></a>
        </p>
        
        <h2>Forms</h2>
        
        <form>
            <fieldset>
                <p>Some inputs would be here, like this:</p>
                <p>Here's a <button>Button</button></p>
                <p>This uses the <code>.composite</code> class</p>
                <p>
                    <label for="input1-1">Enter some text:</label> <span class="composite"><input type="text" id="input1-1"> <button>Button</button> <button>Another button</button></span>
                </p>
            </fieldset>
            
            <fieldset>
                <legend>Using the <code>.custom-input-file</code> and <code>.composite</code> classes</legend>
                <p>The 'fake button' is just a 2nd label. It can be placed on the right...</p>
                <p>
                    <label for="input1-2">Choose a file:</label> <span class="composite">
                        <input type="file" id="input1-2" class="custom-input">
                        <label for="input1-2" class="button" aria-hidden="true" data-text="Browse..."></label>
                    </span>
                </p>
                <p>... or the left - it's governed the markup. It's 'fake' because we only need it for visual purposes. Without CSS and for SR's it's ignored.</p>
                <p>(this arrangement doesn't work well in IE so I've just hidden the extra button for now)</p>
                <p>
                    <label for="input1-2a">Choose another file:</label> <span class="composite">
                        <label for="input1-2a" class="button" aria-hidden="true" data-text="Browse..."></label>
                        <input type="file" id="input1-2a" class="custom-input">
                    </span>
                </p>
                <p>
                    See <a href="https://gist.github.com/andykirk/b7c9e26dc83edd61cdfa" rel="external">CSS-only File Input Gist</a>.
                </p>
                
                
                
                <p>
                    <input type="checkbox" id="input1-4" class="custom-input"> <label for="input1-4" class="custom-input-label">Checkbox next to Label</label>
                </p>
                <p>
                    <label><input type="checkbox" class="custom-input"> <span class="custom-input-label">Checkbox inside to Label</span></label>
                </p>
                <p>
                    <input type="checkbox" id="input1-5" class="custom-input  custom-input--align-end"> <label for="input1-5" class="custom-input-label">Checkbox next to Label - right</label>
                </p>
                <p>
                    <label><input type="checkbox" class="custom-input  custom-input--align-end"> <span class="custom-input-label">Checkbox inside to Label - right</span></label>
                </p>
                <p>
                    <input type="radio" id="input1-6a" name="input1-6" class="custom-input"> <label for="input1-6a" class="custom-input-label">Radio 1 next to Label</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="input1-6b" name="input1-6" class="custom-input"> <label for="input1-6b" class="custom-input-label">Radio 2 next to Label</label>
                </p>
                <p>
                    <label><input type="radio" name="input1-6-1" class="custom-input"> <span class="custom-input-label">Radio 1 inside to Label</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label><input type="radio" name="input1-6-1" class="custom-input"> <span class="custom-input-label">Radio 2 inside to Label</span></label>
                </p>
                <p>
                    <input type="radio" id="input1-7a" name="input1-7" class="custom-input  custom-input--align-end"> <label for="input1-7a" class="custom-input-label">Radio 1 next to Label - right</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="input1-7b" name="input1-7" class="custom-input  custom-input--align-end"> <label for="input1-7b" class="custom-input-label">Radio 2 next to Label - right</label>
                </p>
                <p>
                    <label><input type="radio" name="input1-7-1" class="custom-input  custom-input--align-end"> <span class="custom-input-label">Radio 1 inside to Label - right</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label><input type="radio" name="input1-7-1" class="custom-input  custom-input--align-end"> <span class="custom-input-label">Radio 2 inside to Label - right</span></label>
                </p>
            </fieldset>
        </form>
        
        <h2>Experimental</h2>
        <h3>A Poem</h3>

        <pre class="poem">                maxling

it is with a          heart
               heavy

that i admit loss of a feline
        so           loved

a friend lost to the
        unknown
                                (night)

~cdr 11dec07</pre>
        
        <hr>



        <table id="browser_info">
            <caption>Browser info</caption>
            <thead>
                <tr><th>Name</th><th>Value</th></tr>
            </thead>
            <tbody>
                <tr><td colspan="2">No Javascript - unable to detect anything!</td></tr>
            </tbody>
        </table>

    </main>
    
    <div id="bottom"></div>
    
    <script>
        <?php echo file_get_contents('../_test-page.js'); ?>
    </script>
</body>
</html>