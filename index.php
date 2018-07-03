<?php
/*************************************************************************************************************************
* Author: Riccardo Castagna MBA, PHP developer - Palermo (ITALY) https://api.whatsapp.com/send?phone=393315954155         *
* This php package solves the problem to charge an external font resource                                                 *
* with the "controlling font performance" using font-display options.                                                     *
* This option is useful, to fast load the external font and in general to have the control over browser behavioral        *
* and, in particular, over how the browser has to load the external font.                                                 *
* At the moment is no possible to add at any external font resource the font-display options,                             *
* when you call the query, for example, of google font:                                                                   *
* "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500"                                             *
* and you wish to add the param: "&font-display=fallback"                                                                 *
* like this query: "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500&font-display=fallback".     *
* As far as I know, Google has not yet solved this issue and, to work,                                                    *
* the "font-display" option must be inserted as param inside the css function @font-face{}.                               *
* A possible way is, to use the php cURL extension to manipulate this external resourse and add                           *
* the font-display option param inside the css function.                                                                  *
* With this tecnique is also possible to manipulate, more or less, everything; others external resource like:             *
* google-map, file css, file js, jquery, what do you want ...                                                             *
* How you can see, I have used the curl_multi_init() istead of curl_init(), this to make you free to change,              *
* if you wish, the php class and to add more than one font resource.                                                      *
* CLASS USAGE:                                                                                                            *
* $ref= new Fontperformance;                                                                                              *
* $ref->fontdisplay("https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500","fallback");              *
* Where param 1 is a string, is the link to external font resource, in this example by google font.                       *
* param 2 is a string, is the performance controlling option. Possible values are:                                        *
*  auto | block | swap | fallback | optional                                                                              *
* For a complete reference guide and option usage please consult:                                                         *
* https://developers.google.com/web/updates/2016/02/font-display                                                          *
**************************************************************************************************************************/
include_once("./lib/class.fontperformance.php"); 
$ref= new Fontperformance;
$font_display = $ref->fontdisplay("https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500","fallback");
?>
<!DOCTYPE html>
<html lang='it'>
  <head>
    <title>Controlling Font Performance with font-display</title>
    <meta charset='utf-8'>
    <meta name='description' content='Controlling Font Performance with font-display'>
    <meta name='keywords' content='Font Performance font-display'>
    <meta name='author' content='Riccardo Castagna'>
    <meta name='robots' content='all'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='./php-icon.png' rel='shortcut icon' type='image/png'>
<style>
<?php echo $font_display ?>
body { 
margin: 0px;
padding: 0px;
}
h1, p {font-family:"Montserrat Alternates";}
h1{
font-size: 18px;
font-weight: 500;
text-align: center;
}
p {
font-size: 16px;
font-weight: 300;  
}
.title{
width:100%;
}
</style>
</head>
  <body>
   <div class="title">
     <h1>Controlling Font Performance with font-display</h1>
   </div>
    <p>This php package solves the problem to charge an external font resource 
        with the <strong>"controlling font performance"</strong> using <strong>font-display</strong> options.<br>
        This option is useful, to fast load the external font and in general to have the control over browser behavioral and, in particular, over how the
        browser has to load the external font.<br><br>  
        At the moment is no possible to add at any external font resource the font-display options,<br> 
        when you call the query, for example, of google font:<br>
        "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500" <br>
        and you wish to add the param: "&font-display=fallback" <br>
        like this: "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500&font-display=fallback" <br> 
        As far as I know, Google has not yet solved this issue and, to work, 
        the "font-display" option must be inserted as param inside the css function @font-face{}.<br>   
        A possible way is, to use the php cURL extension to manipulate this external resourse and add 
        the font-display option param inside the css function.<br><br>
        With this tecnique is also possible to manipulate, more or less, everything; others external resource like: 
        google-map, file css, file js, jquery, what do you want ...<br><br> 
        How you can see, I have used the curl_multi_init() istead of curl_init(), this to make you free to change, if you wish, the php class and 
        to add more than one font resource.<br><br>
        <strong>CLASS USAGE:</strong><br> 
        $ref= new Fontperformance;<br>
        $ref->fontdisplay("https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500","fallback");<br>
        Where param 1 is a string, is the link to external font resource, in this example by google font.<br>
        param 2 is a string, is the performance controlling option. Possible values are:<br>
         auto | block | swap | fallback | optional<br> 
        For a complete reference guide and option usage please consult:<br> 
        <a href="https://developers.google.com/web/updates/2016/02/font-display">Controlling Font Performance with font-display
        </a>  
    </p> 
  </body>
</html>