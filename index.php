

<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>I'M HERE</title>
  
  
  
  
      <style>
      body {
            margin: 0;
            padding: 0;
            font-family: monospace;
            background: url('https://i.ibb.co/vvsh5LX/thumb-1920-606500.jpg') #000 no-repeat;
            background-size: 100%;
        }
        #slogan {
            text-align: center;
            font-size: 36px;
            margin-top: 20%;
            color: #fff;
        }
        #slogan span { color: #cb0000}
        #slogan span.selected {
            background: #09f;
            color: #fff;
        }
    </style>

  
  
  
  
</head>

<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;'>

  <div id="slogan" data-text="it's me . Mr.Z"></div>
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script>
    (function($){

    $.fn.typer = function(options){

        var defaults = $.extend({
            search: '',
            replace: [],
            speed: 50,
            delay: 2000
        }, options);
        
        var bintext = function(length){
            var text = '';
            for(var $i = 0; $i<=length;$i++) {
                text = text + Math.floor(Math.random() * 2)
            }
            return text;
        };

        this.each(function(){

            var $this = $(this);
            var $text = $this.data('text');
            var position = 0;

            var indexOf = $text.indexOf( defaults.search );
            var normal = $text.substr(0, indexOf);
            var changer = $text.substr(indexOf, $text.length);

            defaults.replace.push(changer);

            var interval = setInterval(function(){
                var $bintext = '';

                if( position == indexOf ) {

                    $bintext = bintext(changer.length-1);

                    $this.html( $text.substr(0, normal.length) );
                    $this.append('<span>' + $bintext + '</span>')

                } else if( position > indexOf ) {


                    $bintext = bintext($text.length-1);

                    $this.delay(defaults.speed).find('span').html(
                        changer.substring(0, position - indexOf) +
                        $bintext.substring(position, ($bintext.length))
                    );

                } else if( position < indexOf ) {

                    $bintext = bintext($text.length-1);

                    $this.delay(defaults.speed).html(
                        normal.substring(0, position) +
                        $bintext.substring(position, ($bintext.length))
                    );

                }

                if( position < $text.length ) {
                    position++;
                } else {
                    clearInterval(interval);

                    var index = 0;
                    setInterval(function(){

                        var position = 0;
                        var newText = defaults.replace[index];

                        var changeInterval = setInterval(function(){

                            var $bintext = '';
                            for(var $i = 0; $i<=newText.length-1;$i++) {
                                $bintext = $bintext + Math.floor(Math.random() * 2)
                            }

                            $this.delay(defaults.speed).find('span').html(
                                newText.substring(0, position) +
                                $bintext.substring(position, ($bintext.length))
                            );

                            if( position < $text.length ) {
                                position++;
                            } else {
                                clearInterval(changeInterval);
                            }

                        }, defaults.speed);

                        if( index < defaults.replace.length-1 ) {
                            index++;
                        } else {
                            index = 0;
                        }
                    }, defaults.delay)


                }
            }, defaults.speed)

        });

    }



})(jQuery)

$(function(){
  $('#slogan').typer({
    search: 'Mr.Z',
    replace: ['Mr.Z', 'Was Here', 'Team','JawaBaratCyber','Was Here','Team','JawaBaratCyber','You are','Fucking','Bitch']
  })
})
  </script>
<br>
<center><font color="red" size="6">Mengapa kalian Bisa berbahagia?<br>sedangkan aku tidak bisa?<br>Aku iri meliat kalian yang sering tertawa bersama:)</font></center>
  
<iframe widllth="0%" height="0" scrolling="no" frameborder="no" loop="true" allow="autoplay" src="https://f.top4top.net/m_14383mvau1.mp3"></iframe>

</body>
</html>
 
