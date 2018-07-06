<h1>Author: Riccardo Castagna MBA, PHP developer - Palermo (ITALY) </h1>
 <p>This php package solves the problem to charge an external font resource<br>                                                 
 with the <strong>"controlling font performance"</strong> using font-display options.<br><br>                                                 
 This option is useful, to fast load the external font and in general to have the control over browser behavioral<br>        
 and, in particular,<br> over how the different browsers have to load the external font.<br>                                     
 This option is useful to make all text remains visible during web font loads,<br>                                           
 leveraging the font-display CSS feature to ensure text is user-visible while web fonts are loading.</p><br><br>                     
 <p>At the moment is no possible to add at any external font resource the font-display options,<br>                             
 when you call the query, for example, through google font API:<br>                                                          
 "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500"<br>                                             
 and you wish to add the descriptor param: "&font-display=fallback"<br>                                                      
 making something like this query:<br>                                                                                       
 "https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500&font-display=fallback".<br>                      
 Also with the alternative method using @import url(//fonts.googleapis.com/css?family=Open+Sans); inside css you are<br>     
 not able to set up the values for font-display.<br> And not even, I think I'm not wrong (I gave only a quick<br>                
 look at this library), with the JavaScript library:<br>                                                                     
 <a href="https://developers.google.com/fonts/docs/webfont_loader">Web Font Loader </a><br>                                                
 At the moment the only way is the manual set up for each<br>                                                                
 css element: p {font-family: 'MyWebFont', fallback, sans-serif;}</p><br><br>                                                        
 <p>As far as I know, google or someone else has not yet solved this issue and, to work,<br>                                    
 the "font-display" descriptor option must be inserted as value inside the css function @font-face{...}.<br><br>                 
 <strong>A possible way is, to use the php cURL extension to manipulate this external resourse and add<br>                           
 the font-display option param inside the css function.<br>                                                                  
 And also, very important thing, if the external resource is charged through server side,<br>                                
 the client side gain.</strong></p><br><br>                                                                                                   
<p> With this tecnique is also possible to manipulate, more or less, everything with the aim to lighten<br>                     
 the client's operations and also with the possibility to hide any API keys when these are necessary.<br><br>                                                                                
 How you can see, I have used the curl_multi_init(), this because, with this class there is also the possibility<br>         
 to load the external fonts (ten maximum) all together simultaneously, it is faster but it must be used with extreme<br>     
 caution and with common sense, example file: index_2.php.<br>                                                               
 I have set up a maximum of ten fonts simultaneously,<br> ten is enough <strong>AND, PLEASE, NOT FROM ONLY ONE SERVER LIKE IN MY EXAMPLE</strong><br>if we          
 want to avoid to commute this demo into a cyber attack to google servers, and if we want to prevent<br>                     
 google killing me and you; I joke, obviously, I joke ... ;)<br>                                                             
 But, obviously, no one load ten fonts simultaneously in only one page.<br> For testing, in the example N&deg;2, fl. index_2.php, 
 by forcing, I have loaded seven different font simultaneously from only one server,<br>                                     
 seven are too much, but I did it only for testing, to show<br>                                                               
 that also in this case, with seven different fonts loaded simultaneously, all text remains visible with<br>                 
 the set up of the font-display during web fonts load.</p><br><br>                                                                   
 <p>To avoid the <a href="https://developers.google.com/web/tools/lighthouse/audits/critical-request-chains">critical request chain</a><br>  
 I have set up to defer (load asynchronously) the style with a small escamotage:<br>                                         
 style media="none" onload="if(media!='all')media='all'"<br>                                                              
 The ligthhouse reports of these two demo:<br>
 example N&deg;1: <a href="https://googlechrome.github.io/lighthouse/viewer/?gist=2ab2a3c0e95f3d8994e1e1cf20171941">lighthouse performance report N 1</a><br>                                          
 example N&deg;2: <a href="https://googlechrome.github.io/lighthouse/viewer/?gist=798a57975a8555b6417a09446ce50b09">lighthouse performance report N 2</a></p><br><br>                                                                                                                       
                                                                                                                         
<p><strong> SIMPLE CLASS USAGE EXAMPLE N&deg;1 FILE: INDEX.PHP (NO SIMULTANEOUSLY)</strong><br>                                                      
 $ref= new Fontperformance;<br>                                                                                              
 $ref->fontdisplay("https://fonts.googleapis.com/css?family=Montserrat+Alternates%3A300%2C500","fallback");<br>              
 Where param 1 is a string, is the link to external font resource, in this example through google font api.<br>              
 param 2 is a string, is the performance controlling option. Possible values are:<br>                                        
 auto | block | swap | fallback | optional<br><br>                                                                               
                                                                                                                         
<strong> ADVANCED CLASS USAGE EXAMPLE N&deg;2 FILE: INDEX_2.PHP (SIMULTANEOUSLY)</strong>          
 $ref= new Fontperformance;                                                                                              
 $ref->multi_simul_fontdisplay("link_1","option_1","link_2","option_2","link_n","option_n", ... );                      
 where the params: link_1, link_2, link_n ... are "strings", are the links to external font resources<                    
 and where the paramas: option_1, option_2, option_n ... are the related options                                         
 auto | block | swap | fallback | optional , this will return an array with all fonts.<br>                                
<strong> PLEASE DO NOT FOLLOW MY BAD EXAMPLE, DON'T LOAD MORE THAN TWO MAXIMUM DIFFERENT FONTS SIMULTANEOUSLY</strong><br><br> 
For a complete reference guide about font-display descriptor please consult:<br> 
<a href="https://developers.google.com/web/updates/2016/02/font-display">Controlling Font Performance with font-display</a><br>
<a href="https://www.w3.org/TR/css-fonts-4/#font-display-font-feature-values">W3C font display</a><br><br>
<a href="https://api.whatsapp.com/send?phone=393315954155">Info & Contacts</a> 
</p> 
