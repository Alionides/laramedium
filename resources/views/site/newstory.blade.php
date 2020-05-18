@extends('layouts.app')
@section('content')

<!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">

        <div id="editor">
            <div class="section-inner layoutSingleColumn">
                <h3 class="graf graf--h3 graf--first" name="iocon">Dante Editor</h3>
              
              <h4 class="graf graf--h4 is-selected" name="l31q6">Just another Medium editor clone.</h4>
              
              <p class="graf graf--p" name="sdfad"><strong>Motivation:</strong><br></p>
              
              <blockquote class="graf graf--blockquote" name="mscq">
                <p>So far we have tried all the Medium.com wysiwyg clones out there, those are really great, and each have their pros and cons. <a href="http://howtox.com/medium-editor-clones-in-js/" class="markup--anchor markup--p-anchor" data-href="http://howtox.com/medium-editor-clones-in-js/">But none of them has all the features that the real medium editor provides.</a> So we wondered, How complicated could be write our own version of Medium's wysiwyg?</p>
              </blockquote>
              
              <h3 class="graf graf--h3" name="un96k">This is a live demo:</h3>
              <p class="graf graf--p" name="4xeqo3">Please click the image or type everywere. Use it as you were using Medium. Have fun!<br></p>
              
              <figure class="graf graf--figure is-defaultValue" name="9k64e" tabindex="0" contenteditable="false"> <div style="max-width: 245px; max-height: 184px;" class="aspectRatioPlaceholder is-locked"> <div style="padding-bottom: 75.102%;" class="aspect-ratio-fill"></div> <img src="http://i.imgur.com/0erQFLu.gif" data-height="184" data-width="245" data-image-id="" class="graf-image" data-delayed-src=""> </div> <figcaption data-default-value="Type caption for image (optional)" class="imageCaption" contenteditable="true"> <span class="defaultValue">Type caption for image (optional)</span> <br> </figcaption> </figure><p class="graf graf--p" name="cziiq">
              This Library will <em>work</em> fine on modern browsers, such as Chrome, Safari, FF and IE.
              We don't have any intentions to target all browsers versions. Really… If you like this library and you need backward compatibility for an specific version, you can submit a patch to help with the development or just upgrade your shitty browser :D<br></p>
              
              <pre class="graf graf--pre" name="32or">Dante is being at active development, so the internal api could change a lot but is good to use.
              </pre>
              
              <p class="graf graf--p" name="6r80s">(This library is free and will stay free, but needs your support to sustain its development. There are lots of desirable new features and maintenance to do. If you work for a company using Dante or have the means to do so, please consider financial support)<br></p>
              
              <p class="graf graf--p" name="q5kun"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=QVH5DXB326YQG" class="markup--anchor markup--p-anchor" data-href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=QVH5DXB326YQG">Donate at paypal.</a><br></p>
              
              <h4 class="graf graf--h4" name="mddle">MAINTAINERS:</h4>
              
              <ul class="postList" name="loo0i">
                <li class="graf graf--li"><a data-id="1" data-type="user" data-href="api/miguel.json" class="markup--user markup--p-user"> Miguel Michelson </a></li>
                <li class="graf graf--li"><a data-id="1" data-type="user" data-href="api/cristian.json" class="markup--user markup--p-user"> Cristian Ferrari </a></li>
              </ul>
              
              <p class="graf graf--p graf--last" name="i2rdv"><a class="markup--anchor markup--p-anchor">Licensed under MIT.</a> 2014<br></p>
              
              </div>
        </div>
		
	</div>
</div>
<!-- End Related Posts
================================================== -->


@endsection

@section('js')
<script src="dante/assets/javascripts/deps.js" type="text/javascript"></script>
<script src="dante/assets/javascripts/dante-editor.js" type="text/javascript"></script>
<script type="text/javascript">
    handler = function(data){
      console.log("content saved");
    }
  
    editor = new Dante.Editor(
      {
        api_key: "86c28a410a104c8bb58848733c82f840",
        el: "#editor",
        upload_url: "/uploads/new.json",
        store_url: "/api/save.json",
        suggest_url: "api/suggest.json",
        store_success_handler: handler,
        debug: false
      }
    )
    editor.start()
  </script>
@endsection

@section('css')
<link href="dante/assets/stylesheets/normalize.css" media="screen" rel="stylesheet" type="text/css" />
<link href="dante/assets/stylesheets/all.css" media="screen" rel="stylesheet" type="text/css" />
<link href="dante/assets/stylesheets/dante-editor.css" media="screen" rel="stylesheet" type="text/css" />

@endsection