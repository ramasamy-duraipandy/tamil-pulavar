<?php
session_start();
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="ta">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="form/assets/img/ico.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tamil Pulavar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="msvalidate.01" content="3E8A149FDAD8559FEDB3D84EF39BDC29" />
  	 <meta name="description" content="The India&#39;s most comprehensive online dictionary, tamilpulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, 
abbreviations, and medical, financial, legal specialized dictionaries,tamil dictionary,செந்தமிழ் சொற்களஞ்சியம், அனைத்து தமிழ்ச்சொற்களுக்கான விளக்கங்கள் , எடுத்துக்காட்டுக்கள் அடங்கிய இணையம்,
Word of the Day and more, tamilpulavar.org has been helping millions of people improve their use of the English & Tamil language with its free digital services,
tamilpulavar.in has been helping millions of people improve their use of the English & Tamil language with its free digital services,
tamilpulavar.org has been helping millions of people improve their use of the English & Tamil language with its free digital services,Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,
Search by English and Tamil is available for all words, Phonetic search is also available for many popular words,Dictinaries Like J. P. Fabricius's Tamil and English dictionary,தமிழ் தமிழ் அகரமுதலி,David McAlpin - A Core vocabulary for Tamil,Miron Winslow - A Comprehensive Tamil and English Dictionary,சென்னைப் பல்கலைக்கழகத் தமிழ்ப் பேரகராதி,பால்ஸ் அகராதி,சென்னைப் பல்கலைக்கழக ஆங்கிலம் - தமிழ் அகராதி,இசையினி தமிழ் அகராதி,கழகத் தமிழ் அகராதி,கதிரைவேற்பிள்ளை தமிழ் அகராதி,இசையினி ஆங்கிலம்-தமிழ் அகராதி,சங்கச் சொல்லடைவு அகராதி,சதுரகராதி ">

<meta property="og:description" content="Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,
Search by English and Tamil is available for all words, Phonetic search is also available for many popular words,The World's most comprehensive online dictionary,tamil dictionary, tamil pulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, abbreviations, and medical, financial, legal specialized dictionaries"> 
<meta property="og:title" content="Tamilpulavar ,Dictionary, Encyclopedia , Thesaurus ,online Dictionary, online dictionary tamil, tamil pulavar,tamilpulavar.org - The world&#39;s favorite online dictionary!,J. P. Fabricius's Tamil and English dictionary,தமிழ் தமிழ் அகரமுதலி,David McAlpin - A Core vocabulary for Tamil,Miron Winslow - A Comprehensive Tamil and English Dictionary,சென்னைப் பல்கலைக்கழகத் தமிழ்ப் பேரகராதி,பால்ஸ் அகராதி,சென்னைப் பல்கலைக்கழக ஆங்கிலம் - தமிழ் அகராதி,இசையினி தமிழ் அகராதி,கழகத் தமிழ் அகராதி,கதிரைவேற்பிள்ளை தமிழ் அகராதி,இசையினி ஆங்கிலம்-தமிழ் அகராதி,சங்கச் சொல்லடைவு அகராதி,சதுரகராதி ">
<meta property="og:type" content="website"> 
<meta content="http://www.tamilpulavar.org/" property="og:url">
<meta content="tamilpulavar.com,tamilpulavar.in,tamilpulavar.org" property="og:site_name">
<meta name="keywords" content="dictionary, online dictionary, dictionaries, Tamil dictionary, tamil pulavar, encyclopedia, thesaurus, எழுத்துக்கள்,எழுதி ,களஞ்சியம் ,கிரந்தம்,அளவைகள்,ஆட்டங்கள்,கலைச்சொற்கள்,வினாவல்,சொல்லாட்டம்,eluthy,பேழை,கலைச்சொற்கள்,திரட்டுகள்
dictionary, tamil,medical dictionary, English dictionary, definition, legal dictionary, computer dictionary, law, dictionary, free, financial glossary, 
English dictionary, English-tamil dictionary, Tamil-english dictionary,tamil dictionary,tamil dictionary, தமிழ் அகராதி,மொழி பெயர்ப்பு,tamil translation">
<meta name="application-name" content="Tamil Dictionary" />
<meta name="author" content="admin@ultisoft.in" />	
<meta name="robots" content="All" />	
<meta property="twitter:title" content="Tamil Dictionary" />	
 	<script src="js/ajax.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
     <link rel="stylesheet" href="css/tamil_pulavar.css">

    <script>
    $(function()
	{
		$('[data-toggle="tooltip"]').tooltip();
		$("#test").modal('show');
		$("#result").hide();
		$('input.typeahead').keyup(function()
		{
			var searchid = $(this).val();
			var dataString = 'key='+ searchid;
			if(searchid !='')
			{
			$.ajax({
			type: "POST",
			url: "search.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#result").html(html).show();
			}
			});
			}
			return false;
		 });
		 $("#result").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.typeahead').val(decoded);
		});
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeahead")){
			$("#result").fadeOut(); 
			}
		});
		$('input.typeahead1').keyup(function()
		{
			var searchid = $(this).val();
			var dataString = 'key='+ searchid;
			if(searchid !='')
			{
			$.ajax({
			type: "POST",
			url: "search1.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#result1").html(html).show();
			}
			});
			}
			return false;
		 });
		 
		 $("#result1").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.typeahead1').val(decoded);
		});	
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeahead1")){
			$("#result1").fadeOut(); 
			}
		});
		
		/*$('input.typeaheadmob1').keyup(function()
		{
			var searchid = $(this).val();
			var dataString = 'key='+ searchid;
			if(searchid !='')
			{
			$.ajax({
			type: "POST",
			url: "search1.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#result1").html(html).show();
			}
			});
			}
			return false;
		 });*/
		
		/*$('input.typeaheadmob1').typeahead(
		{
			name: 'typeahead1',
			remote:'search1.php?key=%QUERY',
			limit : 10
   		 });*/
		$('input.typeaheadmob').keyup(function()
		{
			var searchid = $(this).val();
			var dataString = 'key='+ searchid;
			if(searchid !='')
			{
			$.ajax({
			type: "POST",
			url: "search.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#result").html(html).show();
			}
			});
			}
			return false;
   		 });
		  $("#result").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.typeaheadmob').val(decoded);
		});
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (!$clicked.hasClass("typeaheadmob")){
			$("#result").fadeOut(); 
			}
		});
		var getKeyCode = function (str) {
    	return str.charCodeAt(str.length - 1);
		}
		/*$(".typeaheadmob").keyup(function(event){
			var kCd = event.keyCode || event.which;
    		if (kCd == 0 || kCd == 229) { 
			//for android chrome keycode fix
       		 kCd = getKeyCode(event.value);
			
				}
				
			//convertThis(event);
			});*/
		
	});

	function call1()
	 {
		 
		if($('#enable_tamil').is(":visible"))
		 {
			 $("input[name='typeahead']").val("");
			
			 $('#enable_english').show();
			 $('#enable_tamil').hide();
			$("#WholePage").hide();
		 }
		else if($('#enable_english').is(":visible"))
		 {
			$("input[name='typeahead1']").val("");
	
			$('#enable_tamil').show();
			$('#enable_english').hide();
			$("#WholePage").show();
		 }
		
	 }
	 
	</script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
 <div class="container-fluid">
  <!-------------------------------------------MOBILE FORMAT-------------------------------------------------->
<?php
if($_SESSION['dash'] == "loggedin")
{ ?>
<script>
$(function()
	{
	$(".bt_show").show();
	$(".bt_hide").hide();	
	});
</script>	
    <?php
}if($_SESSION['ty_key'] != "")
{ ?>
	<script>
	$(function()
	{
		
    var $radios = $('input:radio[name=keybrd]');
    if($radios.is(':checked') === false) {
	  
   	 }
	 else
	 {
		  $("input:radio").attr("checked", false);
		  $radios.filter('[value=<?php echo $_SESSION['ty_key'];?>]').prop('checked', true);
		  $("#<?php echo $_SESSION['ty_key'];?>").click();
	 }
	});
	</script>
<?php	
}
$useragent=$_SERVER['HTTP_USER_AGENT'];

 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

?><script>
$('#tt-hintmob').width('300px');
</script>
 <div class="row">
    <div class="col-xs-10 col-xs-offset-2">
    <p class="bt_show pull-left" style="margin-top:5px; font-family:'Arial Black', Gadget, sans-serif; color:#F00; display:none;">Hi,&nbsp;<?php echo $_SESSION['name']; ?> &nbsp;</p>
    <button class="btn bt_hide"  id="bt"><a href="signup.php" style="text-decoration:none;">Signup</a></button>
    <button class="btn bt_hide"  id="bt"><a href="login.php" style="text-decoration:none;">Login</a></button>
   <button class="btn bt_show" id="bt" style="display:none;"><a href="form/dashboard.php" style="text-decoration:none; color:#FFF"><i class="fa fa-cog fa-spin fa-lg" aria-hidden="true"></i> Dashboard</a></button>
    <button data-toggle="modal" data-target="#squarespaceModal_donate" class="btn"  id="bt"><a href="donate.php" style="text-decoration:none;">Donate</a></button>
    </div>
    </div>
<div class="row" style="margin-top:12%">
	<div class="col-md-4 col-md-offset-4">
    	
        <div class="col-xs-12">
	    <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil.png" width="97%" height="100%"  class="img-responsive"/></a>
        </div>
       
        <div class=" col-xs-12" style="top:20px;">
          <form action="common.php" method="post">
  			<div class="form-group center-block" style="display:none;" id="enable_english">
            
    			<input type="text" name="typeahead1" id="cnt" value="" class="form-control typeahead1 tt-query " autocomplete="off" spellcheck="false">     
             <div id="result1" style="width: 300px;"  class="form-group" >
               </div>     
            <!--   <center> Tamil Keyboard <input type="checkbox" onClick="call1();"></center>-->
  			</div>
            
            
           
            
            
            <div class="form-group center-block"   id="enable_tamil">
            <input type="search"  name="typeahead" class=" typeahead form-control tt-query" id="cnt1"   placeholder="சொல்லினை உள்ளிடுக"  >
            <div class="form-group" id="result" style="width: 300px;">
            </div>
            </div>
            
             <div class="onoffswitch center-block">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();"  checked  >
                    <label class="onoffswitch-label" for="myonoffswitch" data-toggle="tooltip" title="Click to change language">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
                <div class="form-group" id="type">
                </div>
                <div class="col-xs-4 col-xs-offset-4" >
  			<button type="submit"  id="clck" class="btn btn-default center-block">Search</button>
            </div>
	      </form>
        </div>
       
</div>


</div>

   <br><br><br><br><br>
<footer  style="background-color:#c5c5c5;">
   <div class="row">

  
          <div class="col-xs-10 col-xs-offset-1">
                    <ul class="social-network social-circle ">
                        
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&amp;src=sdkpreparse" class="icoFacebook" style="background-color:#09F;"   title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?text=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoTwitter"  style="background-color:#09F;"  title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoGoogle"  style="background-color:#09F;"  title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&title=Tamil Pulavar
&summary=Tamil Pulavar&source=LinkedIn" target="_blank" class="icoLinkedin" style="background-color:#09F;"  title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
	
                    </div>
                    <div class="clearfix"><br /></div>
                   <div class="col-xs-12">
                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank">(CC BY-NC-SA)</a></p>
                   </div>  			
				  <div class="col-xs-12">
          <ul class="list-inline">
          <li><a href="api.php" target="_blank" style="text-decoration:none; color:#09F; font-weight: bold;">Api</a></li>
          <li ><a href="contact.php" target="_blank" style="text-decoration:none; color:#09F; font-weight: bold;">Contact</a></li>
         <li ><a href="about.php" target="_blank"  style="text-decoration:none;  color:#09F; font-weight: bold;">About</a></li>
         <li><a href="http://www.ultisoft.in" target="_blank"  style="text-decoration:none; ">Powered by<img src="img/uss_logo_small.png" height="40" width="60"></a></li>
              
          </ul>
          </div>
                </div>
                <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your share button code -->

	</footer>

   <?php }
   else
   { ?>
   
   
 <div class="row">

    <div class="col-md-4 col-md-offset-8 col-lg-4 col-md-lg-8 col-xs-10 col-xs-offset-2">
    <div class="pull-right"> <span class="bt_show" style="margin-top:5px; font-family:'Arial Black', Gadget, sans-serif; color:#F00; display:none;">Hi,&nbsp;<?php echo $_SESSION['name']; ?> &nbsp;</span>     
    <button data-toggle="modal" data-target="#squarespaceModal_signup" class="btn bt_hide"  id="bt">Signup</button>
    <button data-toggle="modal" data-target="#squarespaceModal_login"  class="btn bt_hide"  id="bt">Login</button>
  <a class="btn bt_show" id="bt"  href="form/dashboard.php" style=" display:none; text-decoration:none; color:#FFF"><i class="fa fa-cog fa-spin fa-lg" aria-hidden="true"></i> Dashboard</a>
	<button data-toggle="modal" data-target="#squarespaceModal_donate" class="btn"  id="bt">Donate</button></div>
    </div>
    </div>
<div class="row" style="margin-top:12%">
	<div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    	
        <div class="col-md-12 col-lg-12">
	    <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil.png" width="97%" height="100%"  class="img-responsive"/></a>
        </div>
       
        <div class="col-md-12 col-lg-12 col-xs-12" style="top:20px;">
          <form action="common.php" method="post">
          
          
          
  			<div class="form-group center-block" style="display:none;" id="enable_english">
    			<!--<input type="text" name="typeahead1" id="cnt" class="form-control typeahead1 tt-query " autocomplete="off" spellcheck="false" placeholder="Enter the word">
            <!--   <center> Tamil Keyboard <input type="checkbox" onClick="call1();"></center>
                
  			</div>-->
            <input type="text" name="typeahead1" id="cnt" value="" class="form-control typeahead1 tt-query " autocomplete="off" spellcheck="false">     
             <div id="result1" >
               </div>     
				</div>
            
           
            
            
            <div class="form-group center-block"   id="enable_tamil">
            <input type="text"  name="typeahead" class="converters form-control typeahead tt-query " id="cnt" charset="utf-8" autocomplete="off" spellcheck="false" placeholder="சொல்லினை உள்ளிடுக" onKeyPress="javascript:convertThis(event)">
            <div id="result">
            </div>
            </div>
           
             <div class="onoffswitch center-block">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();"  checked  >
                    <label class="onoffswitch-label" for="myonoffswitch" data-toggle="tooltip" title="Click to change language">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
                <div id="type">
                </div>
                <div class="col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4">
  			<button type="submit"  id="clck" class="btn btn-default center-block">Search</button>
            </div>
	      </form>
        </div>
       
</div>


</div>

   
   <footer class="navbar-fixed-bottom"  style="background-color:#c5c5c5;">
   <div class="row">

  <br>
          <div class="col-md-5">
                    <ul class="social-network social-circle pull-left">
                        
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&amp;src=sdkpreparse" class="icoFacebook" style="background-color:#09F;"   title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?text=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoTwitter"  style="background-color:#09F;"  title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoGoogle"  style="background-color:#09F;"  title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&title=Tamil Pulavar
&summary=Tamil Pulavar&source=LinkedIn" target="_blank" class="icoLinkedin" style="background-color:#09F;"  title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>	
                    </div>
                   <div class="col-md-2">
                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">(CC BY-NC-SA 4.0)</a></p>
                   </div>  			
				  <div class="col-md-5">
                  
          <ul class="list-inline pull-right" style="margin-top:8px;">
          <li><a href="api.php" target="_blank" style="text-decoration:none; color:#09F; font-weight: bold;">Api</a></li>
          <li ><a href="help.php" target="_blank" style="text-decoration:none; font-size:15px; color:#09F; font-weight: bold;">Help</a></li>
           <li ><a href="contributor.php" target="_blank" style="text-decoration:none; font-size:15px; color:#09F; font-weight: bold;">Content Contributors</a></li>
          	  <li ><a href="contact.php" target="_blank" style="text-decoration:none; font-size:15px; color:#09F; font-weight: bold;">Contact</a></li>
         	  <li ><a href="about.php" target="_blank"  style="text-decoration:none; font-size:15px; color:#09F; font-weight: bold;">About</a></li>
              
              <li ><a href="http://www.ultisoft.in" target="_blank" class="h5" style="text-decoration:none; font-size:16px;">powered by<img src="img/uss_logo_small.png"></a></li>
              
          </ul>
          </div>
                </div>
                <div id="fb-root"></div>
               
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script> 

<!--	 Your share button code 
-->
	</footer>
   
  <SCRIPT language="JavaScript" src="form/tamiltyping/layout.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="form/tamiltyping/menus.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="form/tamiltyping/common.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="form/tamiltyping/tamil.js"></SCRIPT>
   <?php  } ?>
  
   <!----------------------------------------------------------DESKTOP FORMAT--------------------------------------------------->
   
<div class="modal fade" id="squarespaceModal_signup" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
	<div class="modal-content" >
		<div class="modal-header" style="background-color:#ffd8ff;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign up</h3>
		</div>
		<div class="modal-body" style="background-color:#e0ffff;">

			<form  action="form/mailer.php" method="post" name="form1" id="form1" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter the Name" required>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="cnfpwd" name="cnfpwd" placeholder="Confirm Password" required>
              </div>
                <div class="form-group">
                <label for="Captcha">Captcha</label>
                <br />		
<img src="form/verificationimage.php" alt="verification image, type it in the box"  class="img-responsive" width="150"
height="150"/>The sign-up is required for voluntary contributors only. General Users can use the site without sign-up. Thanks..<br /><input name="verif_box" type="text"  class="form-control" id="verif_box" />
              </div>
               <button type="submit" class="btn btn-danger">Submit</button>
            </form>

		</div>
		
	</div>
</div>
</div>



<div class="modal fade" id="squarespaceModal_login" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#f8885e;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title " id="lineModalLabel">Login</h3>
		</div>
		<div class="modal-body" style="background-color:#d8ffff;">

			<form action="form/login.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
              
              <button type="submit" class="btn btn-success ">Submit</button>
            </form>

		</div>
		
	</div>
</div>
</div>






















<div class="modal fade" id="squarespaceModal_donate" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#f8885e;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title " id="lineModalLabel">Donate</h3>
            <h5 style="color:#FFF;line-height: 20px; " class="text-justify">இதுவரை பதிப்பாகியுள்ள 52க்கும் மேற்பட்ட அகரமுதலிகளில் இப்போது 12 மட்டுமே இணைத்துள்ளோம். மிகுந்த உழைப்பும் பணமும் தேவைப்படுகிறது. தங்களால் முடிந்த அளவிலான பொருளுதவியைச் செய்தால் இந்தப் பணிகளைத் தொய்வின்றி சிறப்பாகச் செய்திட முடியும்.<br></h5>
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-striped table-bordered"><tr><td>TO:</td><td>Ultimate Software Solutions</td></tr>
                <tr><td>ACC NO:</td><td>1791135000000479</td></tr>
                <tr><td>IFSC CODE:</td><td>KVBL0001791</td></tr>
                <tr><td>BRANCH:</td><td>R.M Colony branch, Dindigul</td></tr>
                </table>
            </div>
		</div>
		<div class="modal-body" style="background-color:#d8ffff;">
		<?php include("payment.php"); ?>
		</div>
		
	</div>
 </div>
</div>

<!--<div class="modal fade" id="test" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#f8885e;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title " id="lineModalLabel"></h3>
		</div>
		<div class="modal-body" style="background-color:#d8ffff;">
		<h3>This is an unlaunched Beta Version</h3>
		</div>
		
	</div>
 </div>
</div>-->




<div class="modal fade" id="myModal" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#e7eccc">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title " id="lineModalLabel">Word Of The Day</h3>
		</div>
		<div class="modal-body" style="background-color:#e9edf7;">
		<?php
		//$val1 = rand(0,58069); 
		srand(mktime(0, 0, 0));
		$val1 = rand(0, 58069);
		$qry = mysql_query("SELECT `eword`,`meaning` FROM `chennai_tam` WHERE `sno` = '$val1'")or die(mysql_error());
		$fet = mysql_fetch_array($qry);
		echo $fet['eword'];
		echo "</br>";
		echo $fet['meaning'];
		$qry = mysql_query("SELECT `count` FROM `visitors`");
		$fet = mysql_fetch_array($qry);
		$visit = $fet['count'];
		?>	
		</div>
		<div class="modal-header" style="background-color:#e7eccc">
			<h3 class="modal-title " id="lineModalLabel">இன்றைய சொல்</h3>
		</div>
        <div class="modal-body" style="background-color:#e9edf7;">
        <?php
		//$val1 = rand(0,58069); 
		$val11 = rand(0, 140279);
		$qry1 = mysql_query("SELECT `tword`,`meaning` FROM `chennai_tt` WHERE `sno` = '$val11'")or die(mysql_error());
		$fet1 = mysql_fetch_array($qry1);
		echo $fet1['tword'];
		echo "</br>";
		echo $fet1['meaning'];
		?>	
        </div>
	</div>
</div>
</div>
 </div>
 <span class="hidden"><?php echo $visit; ?></span>

 </body>
 <?php
 if(!isset($_SESSION['nm']))
{

mysql_query("UPDATE `visitors` SET `count` = '$visit'+1");
?>
<script>
$(window).load(function()
{
	$('#myModal').modal('show');
});
</script>
<?php
}
$_SESSION['nm'] = rand();
 ?>	
	
	<script language="javascript">
	SelectedTab=2;
	SelectedMenu =2;
	showTab();
	document.getElementById('type').appendChild(
    document.getElementById('WholePage')
  );
</script>
   <!-- <SCRIPT language=JavaScript>incfont("Code2000","CODETamil")</SCRIPT>-->
     


</html>