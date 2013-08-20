_select()
=======
284 bytes gzipped<a href="https://raw.github.com/TimPietrusky/_select/master/js/_select.min.js" target="_blank">
<button>_select.min.js</button>
</a>

<a href="http://github.com/TimPietrusky/_select" target="_blank" class="alpha">
on GitHub
</a>

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
    <li>Aggressive focus for <code>input</code> / <code>textarea</code>:<br>
      Selects the whole content of a text element with one click or touch.</li>
  </ul>
</p>
</section>

  
  
<section>
<h2>Demo</h2>

<div class="demo1">Just click anywhere inside me to select the whole text.</div>
 
<p class="demo2">You can also select <span>child elements</span> if the parent gets a click. </p>
 
<input class="demo3" type="text" value="This is an input with forced focus." spellcheck="false" />

<br><br>

<textarea class="demo4" cols="30" rows="5" spellcheck="false">This is a textarea with forced focus.</textarea>
  
<p>
  The <code>img</code> needs a wrapper element in order to be selectable. 
</p>
  
<p class="demo5 center">
  <img src="http://placekitten.com/g/400/200" alt="" />
</p>
  
<hr />
  
<p class="center">
  <button class="demo6--button button--alpha">Select the whole column!</button>
</p>
</section>

     
     
<section>
    <h2>How to</h2>
    
    <p>Download <code>_select.min.js</code> and include it into your page / script. </p>
    
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
      
<div class="pure-g">
  <div class="pure-u-1">
    <section class="alpha center">
      <p>2013 by <a href="http://timpietrusky.com" target="_blank" class="alpha">Tim Pietrusky</a></p>
    </section>
  </div>
</div>