<?php header('Content-type: text/html; charset=utf-8'); ?>
<!doctype html>
<html lang="en">
<head>
    <title>_select()</title>

    <meta charset="utf-8">
    <meta name="author" content="Tim Pietrusky">
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="1 days">
    <meta name="description" content="Extends the native JavaScript select() so that it can be used to select the content of every DOM element.">

    <meta property="og:title" content="_select()">
    <meta property="og:description" content="Extends the native JavaScript select() so that it can be used to select the content of every DOM element.">
    <?php // <meta property="og:image" content="http://.com/img/.jpg">  ?>
    <meta property="og:url" content="http://timpietrusky.com/_select">
    <meta name="viewport" content="width=device-width">

    <link rel='stylesheet prefetch' href='http://yui.yahooapis.com/combo?pure/0.2.1/grids-min.css'>
    <link rel="stylesheet" href="css/select.css">

    <?php // <link rel="shortcut icon" href="img/.ico" type="image/x-icon">  ?>
</head>

<body>
    

<div class="pure-g">
  <div class="pure-u-1">
    <section class="center">
      <h1>_select()</h1>
    </section>
  </div>
</div>





<div class="pure-g">
  <div class="pure-u-1">
    <section class="center">
            
      <a href="http://github.com/TimPietrusky/_select" target="_blank" class="alpha">
        on GitHub
      </a>
      
      <a href="http://github.com/TimPietrusky/_select" target="_blank">
        <button class="button--alpha">_select.min.js</button>
      </a>
    </section>
  </div>
</div>





<div class="pure-g-r">
    <div class="pure-u-1-3">
      <section>
        <h2>What?</h2>
        <p>
          This function extends the native JavaScript <code>select()</code> (which only works on <code>input</code> and <code>textarea</code>) so that it can be used to select the content of every DOM element you want. 
        </p>
        <p>
          It's written in Vanilla JavaScript (284 bytes gzipped), so you can use it in combination with or without any library. 
        </p>
        
        <b>Works with</b>
        
        <ul>
          <li>IE 6+</li>
          <li>any other browser</li>
        </ul>
        
        <b>Forced Focus</b>
        
        <p>
          <ul>
            <li>Aggressive focus for <code>input</code> / <code>textarea</code>: Disabled <code>mouseup</code> event</li>
          </ul>
        </p>
       </section>
    </div>

  
  
    <div class="pure-u-1-3">
       <section>
        <h2>Demo</h2>
        
        <div class="demo1">Just click anywhere inside me to select the whole text.</div>
         
        <p class="demo2">You can also select <span>child elements</span> if the parent gets a click. </p>
         
        <input class="demo3" type="text" value="This is an input." spellcheck="false" />
        
        <br><br>
        
        <textarea class="demo4" cols="30" rows="5" spellcheck="false">This is a textarea.</textarea>
          
        <p>
          The <code>img</code> needs a wrapper element in order to be selectable. 
        </p>
          
        <p class="demo5 center">
          <img src="http://placekitten.com/g/400/200" alt="" />
        </p>
       </section>
    </div>

         
         
    <div class="pure-u-1-3">
      <section>
        <h2>How to</h2>
        
        <b>Vanilla JavaScript</b>
        <pre><code>var el = document.querySelector('.demo');

el.addEventListener('click', function() {
  _select(this);
});</code></pre>
        
        <b>jQuery</b>
        <pre><code>var el = $('.demo');    

el.on('click', function() {
  _select(this);
});</code></pre>
      </section>
    </div>
</div>
      
<div class="pure-g">
  <div class="pure-u-1">
    <section class="alpha center">
      <p>2013 by <a href="http://timpietrusky.com" target="_blank" class="alpha">Tim Pietrusky</a></p>
    </section>
  </div>
</div>

</body>

<script src="js/main.js"></script>

</html>
