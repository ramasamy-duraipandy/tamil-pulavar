<?php
include("connection.php");
session_start();
error_reporting(0);
$val = $_POST['typeahead'];
$keybrd =$_POST['keybrd'];
$_SESSION['ty_key']=$keybrd;
if($val == "")
{
	$val = $_POST['typeahead1'];
}
if($val == "")
{
	header("LOCATION:index.php");
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
      <meta name="description" content="The India&#39;s most comprehensive online dictionary, tamil pulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, abbreviations, and medical, financial, legal specialized dictionaries,tamil dictionary,செந்தமிழ் சொற்களஞ்சியம், அனைத்து தமிழ்ச்சொற்களுக்கான விளக்கங்கள் , எடுத்துக்காட்டுக்கள் அடங்கிய இணையம்,
Word of the Day and more, tamilpulavar.com has been helping millions of people improve their use of the English & Tamil language with its free digital services, tamilpulavar.in has been helping millions of people improve their use of the English & Tamil language with its freedigital services, tamilpulavar.org has been helping millions of people improve their use of the English & Tamil language with its free digital services,Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,
Search by English and Tamil is available for all words, Phonetic search is also available for many popular words,Dictinaries Like J. P. Fabricius's Tamil and English dictionary,தமிழ் தமிழ் அகரமுதலி,David McAlpin - A Core vocabulary for Tamil,Miron Winslow - A Comprehensive Tamil and English Dictionary,சென்னைப் பல்கலைக்கழகத் தமிழ்ப் பேரகராதி,பால்ஸ் அகராதி,சென்னைப் பல்கலைக்கழக ஆங்கிலம் - தமிழ் அகராதி,இசையினி தமிழ் அகராதி,கழகத் தமிழ் அகராதி,கதிரைவேற்பிள்ளை தமிழ் அகராதி,இசையினி ஆங்கிலம்-தமிழ் அகராதி,சங்கச் சொல்லடைவு அகராதி,சதுரகராதி">
        <meta property="og:description" content="Tamilpulavar is a Tamil dictionary with over 100,000+ words and multiple dictionary sources are available for search,Search by English and Tamil is available for all words, Phonetic search is also available for many popular words,The World's most comprehensive online dictionary,tamil dictionary, tamil pulavar, thesaurus, and encyclopedia with synonyms, definitions, idioms, abbreviations, and medical, financial, legal specialized dictionaries"> 
    <meta property="og:title" content="Dictionary, Encyclopedia , Thesaurus ,online Dictionary, online dictionary tamil, tamil pulavar,tamilpulavar.com - The world&#39;s favorite online dictionary!,Dictinaries Like J. P. Fabricius's Tamil and English dictionary,தமிழ் தமிழ் அகரமுதலி,David McAlpin - A Core vocabulary for Tamil,Miron Winslow - A Comprehensive Tamil and English Dictionary,சென்னைப் பல்கலைக்கழகத் தமிழ்ப் பேரகராதி,பால்ஸ் அகராதி,சென்னைப் பல்கலைக்கழக ஆங்கிலம் - தமிழ் அகராதி,இசையினி தமிழ் அகராதி,கழகத் தமிழ் அகராதி,கதிரைவேற்பிள்ளை தமிழ் அகராதி,இசையினி ஆங்கிலம்-தமிழ் அகராதி,சங்கச் சொல்லடைவு அகராதி,சதுரகராதி">
    <meta property="og:type" content="website"> 

        <meta content="http://www.tamilpulavar.com/" property="og:url">

        <meta content="tamilpulavar.com,tamilpulavar.in,tamilpulavar.org" property="og:site_name">

        <meta name="keywords" content="dictionary, online dictionary, dictionaries, Tamil dictionary, tamil pulavar, encyclopedia, thesaurus, எழுத்துக்கள்,எழுதி ,களஞ்சியம் ,கிரந்தம்,அளவைகள்,ஆட்டங்கள்,கலைச்சொற்கள்,வினாவல்,சொல்லாட்டம்,eluthy,பேழை,கலைச்சொற்கள்,திரட்டுகள்

        dictionary, tamil,medical dictionary, English dictionary, definition, legal dictionary, computer dictionary, law, dictionary, free, financial glossary, 

        English dictionary, English-tamil dictionary, Tamil-english dictionary,tamil dictionary,tamil dictionary, தமிழ் அகராதி,மொழி பெயர்ப்பு,tamil translation,   J. P. Fabricius's Tamil and English dictionary,தமிழ் தமிழ் அகரமுதலி,David McAlpin - A Core vocabulary for Tamil,Miron Winslow - A Comprehensive Tamil and English Dictionary,சென்னைப் பல்கலைக்கழகத் தமிழ்ப் பேரகராதி,பால்ஸ் அகராதி,சென்னைப் பல்கலைக்கழக ஆங்கிலம் - தமிழ் அகராதி,இசையினி தமிழ் அகராதி,கழகத் தமிழ் அகராதி,கதிரைவேற்பிள்ளை தமிழ் அகராதி,இசையினி ஆங்கிலம்-தமிழ் அகராதி,சங்கச் சொல்லடைவு அகராதி,சதுரகராதி">

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

<style>
li
{
	cursor:pointer;
}
</style>



</head>

<body>

 <div class="container-fluid">

<?php
if($_SESSION['dash'] == "loggedin")
{ ?>
<script>
$(function()
	{
		$('[data-toggle="tooltip"]').tooltip();
	$(".bt_show").show();
	$(".bt_hide").hide();	
	});
</script>	
    <?php
} 

if($_SESSION['ty_key'] != "")
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



?>



<div class="row" style="background-color:#87CEEB;">

	

      

        <div class="col-xs-12">
		<p class="bt_show pull-left" style="margin-top:5px; font-family:'Arial Black', Gadget, sans-serif; color:#F00; display:none;">Hi,&nbsp;<?php echo $_SESSION['name']; ?> &nbsp;</p>
		<button class="btn bt_hide"  id="bt"><a href="login.php" style="text-decoration:none;">Login</a></button>
 		<button class="btn bt_show" id="bt" style="display:none;"><a href="form/dashboard.php" style="text-decoration:none; color:#FFF"><i class="fa fa-cog fa-spin fa-lg" aria-hidden="true"></i> Dashboard</a></button>
 		<button class="btn"  id="bt"><a href="donate.php" style="text-decoration:none;">Donate</a></button>

		</div>
		  <div class="col-xs-12">

           <a href="index.php"> <img src="images/Tamil Pulavar - Logo Tamil Small.png" /></a>

        </div>
    

            <div class="col-xs-12" style="margin-top:30px;" >

				<div class="col-xs-12 ">	
				
              <div  id="enable_english">   

             <input type="text" name="typeahead" id="cnt" value="" class="form-control typeaheadmob tt-querymob " autocomplete="off" spellcheck="false">
  					<div class="form-group" id="result1" style="width: 300px;">
            </div>        
                      </div>
             

         <div   id="enable_tamil">

                            <input type="search"  name="typeahead1" class="form-control tt-query" id="cnt1"   placeholder="சொல்லினை உள்ளிடுக" >

                 <div class="form-group" id="result" style="width: 300px;">
            </div>

              	</div>  

          </div>

          <div class="clearfix"><br /></div>

        <div class="col-xs-12 ">

             <div class="onoffswitch center-block ">

                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();"  checked>

                     <label class="onoffswitch-label" for="myonoffswitch" data-toggle="tooltip" title="Click to change language">

                        <span class="onoffswitch-inner"></span>

                        <span class="onoffswitch-switch"></span>

                    </label>

                </div>

         </div>
         <div id="type">
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

<div class="list-group" id="lst">

		 <a onclick="call(); " class="list-group-item" id="first">English - Tamil</a>
         
         <a onclick="tamil_terminology();" class="list-group-item"> Tamil Terminology</a>
         
          <a onclick="call_freedic('http://www.thefreedictionary.com/','eng');" class="list-group-item">English</a>

         <a onclick="call_freedic('http://www.freethesaurus.com/','thes');" class="list-group-item">Thesaurus</a>

         <a onclick="call_freedic('http://medical-dictionary.thefreedictionary.com/','med');" class="list-group-item" id="hid">Medical</a>

          <a onclick="call_freedic('http://legal-dictionary.thefreedictionary.com/','leg');" class="list-group-item" id="hid">Legal</a>

         <a onclick="call_freedic('http://financial-dictionary.thefreedictionary.com/','fin');" class="list-group-item" id="hid">Financial</a>

        

         <a onclick="call_freedic('http://idioms.thefreedictionary.com/','idi');" class="list-group-item" id="hid">Idioms</a>

         <a onclick="call_freedic('http://encyclopedia2.thefreedictionary.com/','enc');" class="list-group-item" id="hid">Encyclopedia</a>

          <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" class="list-group-item" id="hid">Wikipedia </a>

          <a onclick="call_freedic('http://acronyms.thefreedictionary.com/','acr');" class="list-group-item" id="hid">Acronyms</a>
		 
           

		</div>





<div class="list-group" id="lst_tam" style="font-size:10px">

		 <a onclick="call(); " class="list-group-item" id="first">பொது</a>
         
   
         <a onclick="call_freedic('http://www.freethesaurus.com/','thes');" class="list-group-item">இணை/எதிர்</a>

         <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','tam_com');" class="list-group-item" id="hid">கலைச்சொல்<br>அகராதி</a>
          <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" class="list-group-item" id="hid">விக்கி</a>
		  <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wikidict');" class="list-group-item" id="hid">விக்சனரி</a>
          <a onClick="yappu();" class="list-group-item" id="hid">யாப்பறிஞர்</a>
          <a onClick="sandom();" class="list-group-item" id="hid">சந்தம்</a>
          <a onClick="src();" class="list-group-item" id="hid">அசை<br>தேடல்</a>
          <a onClick="proverb();" class="list-group-item" id="hid">பழமொழி</a>
          <a onClick="ilakiyam();" class="list-group-item" id="hid">செம்மொழி்</a>
          <a onClick="karpom();" class="list-group-item" id="hid">கற்போம்</a>
		</div>
        </div>
<div class="list-group" id="lst0">  
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

                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank">(CC BY-SA 4.0)</a></p>

                   </div>  			

				  <div class="col-xs-12">

          <ul class="list-inline">
            <li><a href="api.php" target="_blank" style="text-decoration:none; color:#09F; font-weight: bold;">Api</a></li>
			  <li ><a href="contact.php" target="_blank" style="text-decoration:none; color:#09F; font-weight: bold;">Contact</a></li>
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




	</footer>



<?php 

}else { ?>
<div class="row">
	<div class="col-md-12 col-xs-12" style="background-color:#87CEEB;"> 
        <div class="col-md-3 col-sm-2 pull-left">
            <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil Small.png" /></a>	
        </div>

        

            <div class="col-md-7 col-xs-8"style="margin-top:35px;" >
            <form action="common.php" method="post">


            <div  class="col-md-2  col-sm-2">

             <div class="onoffswitch ">

                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onClick="call1();" checked>

                      <label class="onoffswitch-label" for="myonoffswitch" data-toggle="tooltip" title="Click to change language" data-placement="bottom">

                        <span class="onoffswitch-inner"></span>

                        <span class="onoffswitch-switch"></span>

                    </label>

                </div>

             </div>

				<div class="col-md-7 col-xs-6">	

              <div  id="enable_english">   

             <input type="text" name="typeahead" id="cnt" value="" class="form-control typeahead tt-query " autocomplete="off" spellcheck="false">     
             <div id="result1" >
               </div>     
             </div>

         <div   id="enable_tamil">

                 <input type="text" name="typeahead1" id="cnt1" value="" class="converters form-control typeahead1 tt-query " autocomplete="off" spellcheck="false" onKeyPress="javascript:convertThis(event)" charset="utf-8" >
				<div id="result" >
               </div>
               <div id="type">
               </div>
              	</div>  

          </div>

        

            <!--<div class="col-md-3 col-xs-2"  >-->

            	<button type="submit" onclick="call();" class="btn btn-default pull-left" style="border-radius:10px;">Search</button>

           <!-- </div>-->
			</form>
              </div>

		<div class="col-md-2  pull-right">
		<p class="bt_show pull-left" style="margin-top:5px; font-family:'Arial Black', Gadget, sans-serif; color:#F00; display:none;">Hi,&nbsp;<?php echo $_SESSION['name']; ?> &nbsp;</p><br><br>
		<button data-toggle="modal" data-target="#squarespaceModal_login" class="btn bt_hide"  id="bt">Login</button>
       <button class="btn bt_show" id="bt" style="display:none;"><a href="form/dashboard.php" style="text-decoration:none; color:#FFF;"><i class="fa fa-cog fa-spin fa-lg" aria-hidden="true"></i> Dashboard</a></button>

        <button data-toggle="modal" data-target="#squarespaceModal_donate" class="btn"  id="bt">Donate</button>



		</div>



    </div>

</div>

<div class="row">


	<div class="col-md-12">

    <br />

     



    	<ul class="tabrow" id="lst">

    

            <li id="first" class="com_select"><a onclick="call();">English - Tamil</a></li>
            
            <li class="com_select"><a onclick="tamil_terminology();">Tamil Terminology</a></li>
            
            <li class="com_select"><a onclick="call_freedic('http://www.thefreedictionary.com/','eng');" >English</a></li>

            <li class="com_select"> <a onclick="call_freedic('http://www.freethesaurus.com/','thes');">Thesaurus</a> </li>

            <li class="com_select"> <a onclick="call_freedic('http://medical-dictionary.thefreedictionary.com/','med');" id="hid">Medical</a></li>

            <li class="com_select"><a onclick="call_freedic('http://legal-dictionary.thefreedictionary.com/','leg');" id="hid">Legal</a></li>

            <li class="com_select"><a onclick="call_freedic('http://financial-dictionary.thefreedictionary.com/','fin');" id="hid">Financial</a></li>

          

            <li class="com_select"><a onclick="call_freedic('http://idioms.thefreedictionary.com/','idi');" id="hid">Idioms</a></li>

            <li class="com_select"><a onclick="call_freedic('http://encyclopedia2.thefreedictionary.com/','enc');" id="hid">Encyclopedia</a></li>

            <li class="com_select"><a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" id="hid">Wikipedia </a></li>

              <li class="com_select"><a onclick="call_freedic('http://acronyms.thefreedictionary.com/','acr');" id="hid">Acronyms</a></li>

            <!--<li class="com_select"><a onclick="tabcall('synonym');" >Synonyms</a></li>

            <li class="com_select"> <a onclick="tabcall('antonyms');">Antonyms</a></li>-->

		</ul>


<ul class="tabrow" id="lst_tam">

    

            <li id="first" class="com_select"><a onclick="call();">பொது</a></li>
            
     

            <li class="com_select"> <a onclick="call_freedic('http://www.freethesaurus.com/','thes');">இணை/எதிர்</a> </li>

            <li class="com_select"> <a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','tam_com');" id="hid">கலைச்சொல் </a></li>


            <li class="com_select"><a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wiki');" id="hid">விக்கி</a></li>
			 <li class="com_select"><a onclick="call_freedic('http://encyclopedia.thefreedictionary.com/','wikidict');" id="hid">விக்சனரி</a></li>
              <li class="com_select"><a onClick="yappu();" id="hid">யாப்பறிஞர்</a></li>
              <li class="com_select"><a onClick="sandom();" id="hid">சந்தம்</a></li>
              <li class="com_select"><a onClick="src();" id="hid">அசை தேடல்</a></li>
              <li class="com_select"><a onClick="proverb();" id="hid">பழமொழி</a></li>
               <li class="com_select"><a onClick="ilakiyam();" id="hid">செம்மொழி</a></li>
              <li class="com_select"><a onClick="karpom();" id="hid">கற்போம்</a></li>
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
             
              <li ><a href="http://www.ultisoft.in" target="_blank" style="text-decoration:none; font-size:15px;">powered by<img src="img/uss_logo_small.png"></a></li>
              
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
	<SCRIPT language="JavaScript" src="form/tamiltyping/layout.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="form/tamiltyping/menus.js"></SCRIPT>
    <SCRIPT language=JavaScript src="form/tamiltyping/common.js"></SCRIPT>
    <SCRIPT language=JavaScript src="form/tamiltyping/tamil.js"></SCRIPT>


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

                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name" required>

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

                <label for="exampleInputPassword1">Confirm Password</label>

                <input type="password" class="form-control" id="cnfpwd" name="cnfpwd" placeholder="Confirm Password" required>

              </div>

                <div class="form-group">

                <label for="exampleInputPassword1">Captcha</label>

                <br />		

<img src="form/verificationimage.php" alt="verification image, type it in the box"  class="img-responsive" width="150"

height="150"/>
The sign in is required for voluntary contributors only. General Users can use the site without sign in. Thanks..<br /><input name="verif_box" type="text"  class="form-control" id="verif_box" />

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

 

	
	<script language="javascript">
	SelectedTab=2;
	SelectedMenu =2;
	showTab();
	document.getElementById('type').appendChild(
    document.getElementById('WholePage'));
	</script>

<script>

    $(document).ready(function()

	{
		$("#result").hide();
		$("#result1").hide();
		$('input.typeahead1').keyup(function()
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
			$('.typeahead1').val(decoded);
		});
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeahead1")){
			$("#result").fadeOut(); 
			}
		});
		
		$('input.typeaheadmob').keyup(function()
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
		/*$('input.typeahead').typeahead(

			{

			name: 'typeahead',

			remote:'search1.php?key=%QUERY',

			limit : 10

			 });*/
		 $("#result").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.typeaheadmob1').val(decoded);
		});	
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeaheadmob1")){
			$("#result").fadeOut(); 
			}
		});
		$("#result1").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.typeaheadmob').val(decoded);
		});	
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeaheadmob")){
			$("#result1").fadeOut(); 
			}
		});
		/*
		$('input.typeahead').typeahead(

			{

			name: 'typeahead',

			remote:'search1.php?key=%QUERY',

			limit : 10

			 });	  */
			 
		$('input.typeahead').keyup(function()

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
			$('.typeahead').val(decoded);
		});	
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("typeahead")){
			$("#result1").fadeOut(); 
			}
		});


		$('input.typeaheadmob1').keyup(function()

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

		//alert("hai");

		$( function()

		 {

			var txt = "<?php echo $val; ?>";

			if (txt.match(/[a-z]/i)) 

			{
				
				$("#enable_tamil").hide();
				$("#myonoffswitch").removeAttr("checked");
				$("#lst_tam").hide();
				$("#lst0").show();
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
			$("#enable_english").hide();
			$("#myonoffswitch").attr("checked");	
			$("#lst").hide();
			$("#lst1").hide();
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
				//alert('hai');

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
				if(nam == "thes" )
				{
					$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
					$.ajax
					({
					url:"fetchtab.php",
					data:{val:txt,table:nam},
					type:"POST",
						success: function(result)
						{
							$("#r1").html(result);
						},	

					});
				}
				else if(nam == "wiki")
				{
						$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
						$.ajax({
							url: "https://ta.wikipedia.org/w/api.php",
							data: {
								format: "json",
								action: "parse",
								page: txt,
								prop:"text",
								section:0,
							},
							dataType: 'jsonp',
							success: function (data)
						 	{
								
								$("#r1").delay(30000).html("<center>Word Not Found</center>");
								console.log(data)
						  		//$("#article").html(data.parse.text["*"])
								
								var markup = data.parse.text["*"];
								var i = $('<div></div>').html(markup);
								
								// remove links as they will not work
								i.find('a').each(function() 
								{ 
									$(this).replaceWith($(this).html()); 
								});
								
								// remove any references
								i.find('sup').remove();
								
								// remove cite error
								i.find('.mw-ext-cite-error').remove();
								
								$('#r1').html($(i).find('p'));
								
							},
							
						});
				}
				else if(nam == "wikidict")
				{
						
 						$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
						$.getJSON('http://ta.wiktionary.org/w/api.php?action=parse&page='+txt+'&format=json&prop=text&callback=?',
						function(json)
						{
							var appen = "<div class='col-md-6 col-md-offset-3 col-xs-12'>"+json.parse.text['*'] +"<br /><br /><br /><br /><br /></div>";
						 		
						$('#r1').html(appen);
						$("#r1").find('a').each(function() 
								{ 
									$(this).replaceWith($(this).html()); 
								});
						$("#r1").find('sup').remove();
						$("#r1").find('.mw-ext-cite-error').remove();
						 });
				}
				else if(nam == "tam_com")
				{
					$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
					var val = "<?php echo $val;?>";
					$.ajax
					({
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
				 $("#WholePage").hide();
				 $("#lst").show();
				 $("#lst_tam").hide();
				 $("#r1").html("");
			 }
		else if($('#enable_english').is(":visible"))
			 {
				$("input[name='typeahead1']").val(""); 
				$('#enable_tamil').show();
				$('#enable_english').hide();
				$("#WholePage").show();
				$("#lst").hide();
				$("#lst_tam").show();
				$("#r1").html("");
			 }
	 }	
		function yappu()
		{
			$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
			var val = "<?php echo $val;?>";
			$.ajax({
				url:"yapp/yapp.php",
				data:{"val":val},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				}

			});
			
		}
	function sandom()
		{
			$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
			var val = "<?php echo $val;?>";
			$.ajax({
				url:"yapp/sandom.php",
				data:{"val":val},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				}

			});
			
		}	
	function src()
		{
			$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
			var val = "<?php echo $val;?>";
			$.ajax({
				url:"yapp/startend.php",
				data:{"wrd":val},
				type:"POST",
				success: function(result)
				{
					$("#r1").html(result);
				}
			});
		}
	function proverb()
	{
		//alert("hai");
		$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
		var val = "<?php echo $val;?>";
		//alert(val);
		$.ajax(
		{
			url:"yapp/pazha.php",
			data:{"wrd":val},
			type:"POST",
			success: function(result)
			{
					$("#r1").html(result);
			}
		})
	}
	function tamil_terminology()
	{
		$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
		var val = "<?php echo $val;?>";
		$.ajax(
		{
			url:"tamil_terminology.php",
			data:{"wrd":val},
			type:"POST",
			success: function(result)
			{
					$("#r1").html(result);
			}
		})
	}
	function ilakiyam()
	{
		//alert("hai");
		$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
		var val = "<?php echo $val;?>";
		//alert(val);
		$.ajax(
		{
			url:"ilakiyam.php",
			data:{"wrd":val},
			type:"POST",
			success: function(result)
			{
					$("#r1").html(result);
			}
		})
	}
	function karpom()
	{
		//alert("hai");
		$("#r1").html("<center><img src='img/loading_spinner.gif'/></center>'");
		var val = "<?php echo $val;?>";
		//alert(val);
		$.ajax(
		{
			url:"karpom.php",
			data:{"wrd":val},
			type:"POST",
			success: function(result)
			{
					$("#r1").html(result);
			}
		})
	}	
 </script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
          sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH,
          destinationLanguage: ['ta'], // or [google.elements.transliteration.LanguageCode.HINDI],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textfields with the given ids.
        var ids = [ "transl1", "transl2" ];
        control.makeTransliteratable(ids);

        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('translControl');
      }
      google.setOnLoadCallback(onLoad);
	</script>
  
	
	<!--document.getElementById('type').appendChild(
    document.getElementById('WholePage')
  );
-->
</html>