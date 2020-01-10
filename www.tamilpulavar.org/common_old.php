<?php
error_reporting(0);
include("connection.php");
$val = $_POST['typeahead'];
if($val == "")
{
	$val = $_POST['typeahead1'];
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="form/assets/img/ico.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tamil Pulavar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- 	<script src="js/ajax.js"></script>-->  
            <meta name="description" content="The India&#39;s most comprehensive online dictionary, tamil pulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, 
        abbreviations, and medical, financial, legal specialized dictionaries,tamil dictionary,செந்தமிழ் சொற்களஞ்சியம், அனைத்து தமிழ்ச்சொற்களுக்கான விளக்கங்கள் , எடுத்துக்காட்டுக்கள் அடங்கிய இணையம்,
        Word of the Day and more, tamilpulavar.com has been helping millions of people improve their use of the English & Tamil language with its free digital services,
        tamilpulavar.in has been helping millions of people improve their use of the English & Tamil language with its free digital services,
        tamilpulavar.org has been helping millions of people improve their use of the English & Tamil language with its free digital services,Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,
        Search by English and Tamil is available for all words, Phonetic search is also available for many popular words">
        
        <meta property="og:description" content="Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,
        Search by English and Tamil is available for all words, Phonetic search is also available for many popular words,The World's most comprehensive online dictionary,tamil dictionary, tamil pulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, abbreviations, and medical, financial, legal specialized dictionaries"> 
        <meta property="og:title" content="Dictionary, Encyclopedia , Thesaurus ,online Dictionary, online dictionary tamil, tamil pulavar,tamilpulavar.com - The world&#39;s favorite online dictionary!">
        <meta property="og:type" content="website"> 
        <meta content="http://www.tamilpulavar.com/" property="og:url">
        <meta content="tamilpulavar.com,tamilpulavar.in,tamilpulavar.org" property="og:site_name">
        <meta name="keywords" content="dictionary, online dictionary, dictionaries, Tamil dictionary, tamil pulavar, encyclopedia, thesaurus, எழுத்துக்கள்,எழுதி ,களஞ்சியம் ,கிரந்தம்,அளவைகள்,ஆட்டங்கள்,கலைச்சொற்கள்,வினாவல்,சொல்லாட்டம்,eluthy,பேழை,கலைச்சொற்கள்,திரட்டுகள்
        dictionary, tamil,medical dictionary, English dictionary, definition, legal dictionary, computer dictionary, law, dictionary, free, financial glossary, 
        English dictionary, English-tamil dictionary, Tamil-english dictionary,tamil dictionary,tamil dictionary, தமிழ் அகராதி,மொழி பெயர்ப்பு,tamil translation">
        <meta name="application-name" content="Tamil Dictionary" />
        <meta name="author" content="admin@ultisoft.in" />	
        <meta name="robots" content="All" />	
        <meta property="twitter:title" content="Tamil Dictionary" />	
        <meta name="keywords" content="<?php echo $val; ?>, online dictionary, English dictionary, <?php echo $val; ?> definition, define <?php echo $val; ?>, definition of <?php echo $val; ?>, <?php echo $val; ?> pronunciation, <?php echo $val; ?> meaning, <?php echo $val; ?> origin, <?php echo $val; ?> examples" />
        <meta property="og:title" content="the definition of <?php echo $val; ?>" />
        <meta name="description" content="<?php echo $val; ?> definition See more." />

  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
   
       <link rel="stylesheet" href="css/tamil_pulavar.css">
   
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>
 <div class="container-fluid">
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

?>

<div class="row" style="background-color:#87CEEB;">
	<div class="col-xs-12" > 
        <div class="col-xs-5">
            <img src="img/Tamil Pulavar - Logo Tamil Small_edited.png" />	
        </div>
        <div class="col-xs-7">
		<button data-toggle="modal" data-target="#squarespaceModal_login" class="btn"  id="bt">Login</button>
        <button data-toggle="modal" data-target="#squarespaceModal_donate" class="btn"  id="bt">Donate</button>
		</div>
    </div>
            <div class="col-xs-12" style="margin-top:30px;" >
            
				<div class="col-xs-12 ">	
              <div  id="enable_english">   
             <input type="text" name="typeaheadmob" id="cnt" value="" class="form-control typeaheadmob tt-querymob " autocomplete="off" spellcheck="false">         </div>
         <div   id="enable_tamil">
                 <input type="text" name="typeaheadmob1" id="cnt1" value="" class="form-control typeaheadmob1 tt-querymob1 converters" autocomplete="off" spellcheck="false" onKeyPress="javascript:convertThis(event)" charset="utf-8">
              	</div>  
          </div>
          <div class="clearfix"><br /></div>
        <div class="col-xs-12 ">
             <div class="onoffswitch center-block ">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();"  checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
         </div>
          <div class="col-xs-3 col-xs-offset-4">
          		<button type="submit" onclick="call();" class="btn btn-default " style="border-radius:10px;">Search</button>
          </div>
              </div>
		

    
</div>
<div class="row">
	<div class="col-md-12">
    <br />
    </div>
</div>  


<div class="row">
	<div class="col-md-12 col-xs-12">
<div class="row">
<div class="col-xs-4">
<div class="list-group">
		 <a onclick="call(); " class="list-group-item" id="first">Common</a>
         <a onclick="call_freedic('http://www.freethesaurus.com/','thes');" class="list-group-item">Thesaurus</a>
         <a onclick="call_freedic('http://medical-dictionary.thefreedictionary.com/','med');" class="list-group-item" id="hid">Medical Dictionary</a>
          <a onclick="call_freedic('http://legal-dictionary.thefreedictionary.com/','leg');" class="list-group-item" id="hid">Legal Dictionary</a>
         <a onclick="call_freedic('http://financial-dictionary.thefreedictionary.com/','fin');" class="list-group-item" id="hid">Financial Dictionary</a>
        
         <a onclick="call_freedic('http://idioms.thefreedictionary.com/','idi');" class="list-group-item" id="hid">Idioms</a>
         <a onclick="call_freedic('http://encyclopedia2.thefreedictionary.com/','enc');" class="list-group-item" id="hid">Encyclopedia</a>
          <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" class="list-group-item" id="hid">Wikipedia </a>
          <a onclick="call_freedic('http://acronyms.thefreedictionary.com/','acr');" class="list-group-item" id="hid">Acronyms</a>
           
		</div>
        </div>
<div id="r1" class="col-xs-8">
</div>
</div>



</div>
</div>

  <div class="clearfix">
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
                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-ShareAlike License.</a></p>
                   </div>  			
				  <div class="col-xs-12">
          <ul class="list-inline">
         	  <li ><a href="about.php" target="_blank"  style="text-decoration:none;  color:#09F; font-weight: bold;">About</a></li>
              <li ><a href="privacy.php" target="_blank" style="text-decoration:none;  color:#09F; font-weight: bold;">Terms & Conditions</a></li>
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


<?php 
}else { ?>
<div class="row">
	<div class="col-md-12 col-xs-12" style="background-color:#87CEEB;"> 
        <div class="col-md-3 col-sm-2 pull-left">
            <img src="img/Tamil Pulavar - Logo Tamil Small.png" />	
        </div>
        
            <div class="col-md-7 col-xs-8"style="margin-top:35px;" >
            <div class="col-md-2  col-sm-2">
             <div class="onoffswitch ">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();"  checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
             </div>
				<div class="col-md-6 col-xs-6">	
              <div  id="enable_english">   
             <input type="text" name="typeahead" id="cnt" value="" class="form-control typeahead tt-query " autocomplete="off" spellcheck="false">         </div>
         <div   id="enable_tamil">
                 <input type="text" name="typeahead1" id="cnt1" value="" class="converters form-control typeahead1 tt-query " autocomplete="off" spellcheck="false" onKeyPress="javascript:convertThis(event)" charset="utf-8" >
              	</div>  
          </div>
        
            <!--<div class="col-md-3 col-xs-2"  >-->
            	<button type="submit" onclick="call();" class="btn btn-default pull-left" style="border-radius:10px;">Search</button>
           <!-- </div>-->
              </div>
		<div class="col-md-2  pull-right">
		<button data-toggle="modal" data-target="#squarespaceModal_login" class="btn"  id="bt">Login</button>
        <button data-toggle="modal" data-target="#squarespaceModal_donate" class="btn"  id="bt">Donate</button>

		</div>

    </div>
</div>
<div class="row">
	<div class="col-md-12">
    <br />
     

    	<ul class="tabrow">
    
            <li id="first" class="com_select"><a onclick="call();">Common</a></li>
            <li class="com_select"> <a onclick="call_freedic('http://www.freethesaurus.com/','thes');">Thesaurus</a> </li>
            <li class="com_select"> <a onclick="call_freedic('http://medical-dictionary.thefreedictionary.com/','med');" id="hid">Medical Dictionary</a></li>
            <li class="com_select"><a onclick="call_freedic('http://legal-dictionary.thefreedictionary.com/','leg');" id="hid">Legal Dictionary</a></li>
            <li class="com_select"><a onclick="call_freedic('http://financial-dictionary.thefreedictionary.com/','fin');" id="hid">Financial Dictionary</a></li>
          
            <li class="com_select"><a onclick="call_freedic('http://idioms.thefreedictionary.com/','idi');" id="hid">Idioms</a></li>
            <li class="com_select"><a onclick="call_freedic('http://encyclopedia2.thefreedictionary.com/','enc');" id="hid">Encyclopedia</a></li>
            <li class="com_select"><a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" id="hid">Wikipedia </a></li>
              <li class="com_select"><a onclick="call_freedic('http://acronyms.thefreedictionary.com/','acr');" id="hid">Acronyms</a></li>
            <!--<li class="com_select"><a onclick="tabcall('synonym');" >Synonyms</a></li>
            <li class="com_select"> <a onclick="tabcall('antonyms');">Antonyms</a></li>-->
		</ul>
	 </div>
</div>

<div id="r1">
	</div>
<div>
<br><br><br><br>

</div>


  <div class="clearfix">
  
  </div>
  
  
  <footer class="navbar-fixed-bottom"  style="background-color:#c5c5c5;">
   <div class="row">

  <br>
          <div class="col-md-4">
                    <ul class="social-network social-circle pull-left">
                        
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&amp;src=sdkpreparse" class="icoFacebook" style="background-color:#09F;"   title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?text=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoTwitter"  style="background-color:#09F;"  title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" target="_blank" class="icoGoogle"  style="background-color:#09F;"  title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&title=Tamil Pulavar
&summary=Tamil Pulavar&source=LinkedIn" target="_blank" class="icoLinkedin" style="background-color:#09F;"  title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>	
                    </div>
                   <div class="col-md-4">
                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-ShareAlike License.</a></p>
                   </div>  			
				  <div class="col-md-4">
          <ul class="list-inline pull-right" style="margin-top:8px;">
         	  <li ><a href="about.php" target="_blank" class="h5" style="text-decoration:none; font-size:16px; color:#09F; font-weight: bold;">About</a></li>
              <li ><a href="privacy.php" target="_blank" class="h5" style="text-decoration:none; font-size:16px; color:#09F; font-weight: bold;">Terms & Conditions</a></li>
              <li ><a href="http://www.ultisoft.in" target="_blank" class="h5" style="text-decoration:none; font-size:16px;">powered by <img src="img/uss_logo_small.png"></a></li>
              
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
<?php } ?>

</div>


	

        
<!--fullwidth-->    






           
<div class="modal fade" id="squarespaceModal_signup" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content" >
		<div class="modal-header" style="background-color:#ffd8ff;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign up</h3>
		</div>
		<div class="modal-body" style="background-color:#e0ffff;">

			<form  action="form/mailer.php" method="post" name="form1" id="form1" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter email" required>
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
                <label for="exampleInputPassword1">Captcha</label>
                <br />		
<img src="form/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box"  class="img-responsive" width="150"
height="150"/><br /><input name="verif_box" type="text"  class="form-control" id="verif_box" />
              </div>
               <button type="submit" class="btn btn-danger">Submit</button>
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

      
 </div>               
</body>
 
<SCRIPT language=JavaScript src="form/tamiltyping/common.js"></SCRIPT>
<SCRIPT language=JavaScript src="form/tamiltyping/tamil.js"></SCRIPT>
<script>
    $(document).ready(function()
	{
		$('#default').click();
		$("#enable_english").hide();
		$('input.typeahead1').typeahead(
			{
			name: 'typeahead1',
			remote:'search.php?key=%QUERY',
			limit : 10
			 });
		$('input.typeahead').typeahead(
			{
			name: 'typeahead',
			remote:'search1.php?key=%QUERY',
			limit : 10
			 });	 
		$('input.typeaheadmob1').typeahead(
		{
			name: 'typeahead1',
			remote:'search.php?key=%QUERY',
			limit : 10
		 });
		//alert("hai");
		$( function()
		 {
			var txt = "<?php echo $val; ?>";
			if (txt.match(/[a-z]/i)) 
			{
				$.ajax({
				url:"eng2tam.php",
				data:{val:txt},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				},	
				});
			}
			else
			{
			$.ajax({
				url:"fetch.php",
				data:{val:txt},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				},	
				});
			}
			
			$(".com_select").click(function(e) {
			  e.preventDefault();
			  $(".com_select").removeClass("selected");
			  $(this).addClass("selected");
			});
 	 } );	
	});
	function call()
	{
		 $("li").removeClass("selected");
		 $("#first").addClass("selected");
		 if($('#enable_tamil').is(":visible"))
		 {
			var txt = $("#cnt1").val();
			$("input[name='typeahead']").val("");

		 }
		 else if($('#enable_english').is(":visible"))
		 {	
			var txt = $("#cnt").val();
			$("input[name='typeahead1']").val(""); 
	
		 }
		/*if(txt == "")
		{*/
			//var txt = $("#cnt").val();
			if(txt == "")
			{
				var txt = "<?php echo $val; ?>";
			}
		//alert(txt);	
		/*}*/
		if (txt.match(/[a-z]/i)) 
			{
				$.ajax({
				url:"eng2tam.php",
				data:{val:txt},
				type:"POST",
				success: function(result)
				{
					$("#r1").html();
					$("#r1").html(result);
				},	
				});
				$("#cnt").val() = "";	
			}
			else
			{
				$.ajax({
					url:"fetch.php",
					data:{val:txt},
					type:"POST",
					success: function(result)
					{
						$("#r1").html(result);
					},	
					});
				$("#cnt1").val() = "";	
			}
		}
	function call_com(txt1)
	{
		var txt_2 = txt1;
		$.ajax({
			url:"fetch.php",
			data:{val:txt_2},
			type:"POST",
			success: function(result)
			{
				$("#r1").html(result);
			},	
			});
	}
	/*function tabcall(tab)
	{
		var txt = $("#cnt").val();
		if(txt == "")
		{
			var txt = $("#cnt1").val();
			if(txt == "")
			{
				var txt = "<?php //echo $val; ?>";
			}
		}
			$.ajax({
				url:"fetchtab.php",
				data:{val:txt,table:tab},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				},	
				});
	}	*/
	function call_freedic(tab,nam)
	{
			var txt = $("#cnt").val();
			if(txt == "")
			{
				var txt = $("#cnt1").val();
				if(txt == "")
				{
					var txt = "<?php echo $val;?>";

				}
			}
			if(txt.match(/[a-z]/i)) 
			{
				$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
				$.ajax({
				url:"fetchtab.php",
				data:{val:txt,table:tab},
				type:"POST",
				success: function(result)
				{
					delete txt;
					$("#r1").html(result);
				},	
				});
			}
			else 
			{
				if(nam == "thes")
				{
					$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
					$.ajax({
					url:"fetchtab.php",
					data:{val:txt,table:nam},
					type:"POST",
					success: function(result)
					{
						$("#r1").html(result);
					},	
					});
				
				}
			}
			
	}
		function call1()
		 {
			 
			if($('#enable_tamil').is(":visible"))
			 {
				 $("input[name='typeahead']").val("");
				 $('#enable_english').show();
				 $('#enable_tamil').hide();
			 }
			else if($('#enable_english').is(":visible"))
			 {
				$("input[name='typeahead1']").val(""); 
				$('#enable_tamil').show();
				$('#enable_english').hide();
			 }
			
	 	}	
 </script>
</html>