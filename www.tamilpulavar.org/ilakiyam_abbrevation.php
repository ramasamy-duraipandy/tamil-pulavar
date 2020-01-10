<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>இலக்கியம்</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>
<body>
<div class="container">
<div class="page-header">

    <div class="row">

        <div class="col-md-6">

        <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil Small.png" class="pull-left" /></a>

        </div>

        <div class="col-md-6">

        <img src="img/uss_logo .png" class="pull-right" />

        </div>

     </div>

</div>

	<div class="row">

    	<div class="col-md-10 col-md-offset-1 col-xs-12">
<?php 
$topic	=	$_GET['get'];
?>
		<h2 class="text-success h2 w3-animate-zoom"><?php echo $topic; ?></h2>
			<?php
        if($topic == "பதினெண்கீழ்க்கணக்கு")
        {
       		?>
           	<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நாலடி - நாலடியார்,<br />,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நான்மணி - நான்மணிக்கடிகை,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;இன்னா - இன்னா நாற்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;இனிய - இனியவை நாற்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கார் - கார் நாற்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;களவழி நாற்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஐந்திணை ஐம்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஐந்திணை எழுபது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திணைமொழி ஐம்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திணை - திணைமாலை நூற்றைம்பது,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறள் - திருக்குறள்(முப்பால்),<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திரி - திரிகடுகம்,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஆசாரக் - ஆசாரக்கோவை,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பழ - பழமொழி நானூறு,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சிறுபஞ் - சிறுபஞ்சமூலம்,<br /> 
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;முதுமொழி - முதுமொழிக்காஞ்சி,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஏலாதி - ஏலாதி,<br />
       		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கைந் - கைந்நிலை" class="pull-right"><i class="fa fa-question-circle" aria-hidden="true"></i></a>';
        <?php }
        elseif($topic == "சங்க இலக்கியம்")
        {
        	?><i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திரு -திருமுருகாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொரு - பொருநராற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சிறு - சிறுபாணாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பெரும் -பெரும்பாணாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;முல் - முல்லைப்பாட்டு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மது - மதுரைக்காஞ்சி,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நெடு - நெடுநல்வாடை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறி - குறிஞ்சிப்பாட்டு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பட் - பட்டினப்பாலை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மலை - மலைபடுகடாம்,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நற் - நற்றிணை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறு - குறுந்தொகை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஐங் - ஐங்குறுநூறு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பதி - பதிற்றுப்பத்து,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பரி - பரிபாடல்,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கலி - கலித்தொகை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;அகம் - அகநானூறு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;புறம் - புறநானூறு
        <?php }
        elseif($topic == "தொல்காப்பியம்")
		{
			?>
	 	<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். நூன் - எழுத்ததிகாரம் நூன்மரபு,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். மொழி - எழுத்ததிகாரம் மொழிமரபு,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். பிறப் - எழுத்ததிகாரம் பிறப்பியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். புணர் - எழுத்ததிகாரம் புணரியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். தொகை - எழுத்ததிகாரம் தொகை மரபு,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். உருபி - எழுத்ததிகாரம் உருபியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். உயிர் - எழுத்ததிகாரம் உயிர்மயங்கியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். புள்ளி - எழுத்ததிகாரம் புள்ளிமயங்கியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;எழுத். குற்றி - எழுத்ததிகாரம் குற்றியலுகரப் புணரியல்,<br />		
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். கிளவி - சொல்லதிகாரம் கிளவியாக்கம்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். வேற்று - சொல்லதிகாரம் வேற்றுமையியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். வேற்.மயங் - சொல்லதிகாரம் வேற்றுமை மயங்கியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். விளி  - சொல்லதிகாரம் விளிமரபு,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். பெயர் - சொல்லதிகாரம் பெயரியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். வினை - சொல்லதிகாரம் வினையியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். இடை - சொல்லதிகாரம் இடையியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். உரி - சொல்லதிகாரம் உரியியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சொல். எச்ச - சொல்லதிகாரம் எச்சவியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். அகத் - பொருளதிகாரம் அகத்திணையியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். புறத் - பொருளதிகாரம் புறத்திணையியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். கள - பொருளதிகாரம் களவியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். கற் - பொருளதிகாரம் கற்பியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். பொருளி - பொருளதிகாரம் பொருளியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். மெய்ப் - பொருளதிகாரம் மெய்ப்பாட்டியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். உவம - பொருளதிகாரம் உவமவியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். செய்யு - பொருளதிகாரம் செய்யுளியல்,<br />
		<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொருள். மரபி - பொருளதிகாரம் மரபியல்
		
	  <?php }
	   elseif($topic == "தொல்காப்பியம்")
		{
        ?>
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;உஞ்ஞை - உஞ்சைக் காண்டம்,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; இலாவாண - இலாவாண காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மகத - மகத காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வத்தவ - வத்தவ காண்டம்,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; நரவாண - நரவாண காண்டம்,<br />
        
        
        <?php }
		
	   elseif($topic == "திருக்குறள்")
		{
        ?>
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறள் - திருக்குறள்,<br />
          
       <?php }
	   elseif($topic == "சிலப்பதிகாரம்")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;புகார் - புகார்க் காண்டம்	,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; வஞ்சி - மதுரைக் காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மது - வஞ்சிக் காண்டம்,<br />
         
        
        <?php }
	   elseif($topic == "மணிமேகலை")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மணி - மணிமேகலை,<br />
          
         <?php }
	   elseif($topic == "சீவக சிந்தாமணி")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சிந்தா - சீவக சிந்தாமணி,<br />
          
        <?php }
	   elseif($topic == "வளையாபதி")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வளையா - வளையாபதி,<br />
            
           <?php }
	   elseif($topic == "குண்டலகேசி.")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குண்டல - குண்டலகேசி,<br />
           
           <?php }
	   elseif($topic == "முத்தொள்ளாயிரம்")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;முத்தொள் - முத்தொள்ளாயிரம்,<br />
          
         <?php }
	   elseif($topic == "இறையனார் அகப்பொருள்")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;இறை - இறையனார் அகப்பொருள்,<br />
          
         <?php }
	   elseif($topic == "கம்பராமாயணம்")
		{
        ?>
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பால - பாலகாண்டம்,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; அயோ - அயோத்தியா காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஆரண் - ஆரணிய காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; கிட் - கிட்கிந்தா காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சுந் - சுந்தர காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; யுத்1 -  1 யுத்த காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; யுத்2 -  2 யுத்த காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; யுத்3 - 3 யுத்த காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; யுத்4 - 4 யுத்த காண்டம்
               <?php }
	   elseif($topic == "நளவெண்பா")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நள - நளவெண்பா,<br />
            <?php }
	   elseif($topic == "பெரியபுராணம்")
		{
        ?>
        	
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பாயிரம் - பாயிரம்	 ,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; திருமலை - திருமலைச் சருக்கம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;தில்லை - தில்லைவாழ் அந்தணர் சருக்கம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;இலை - இலை மலிந்த சருக்கம்	 ,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மும்மை- மும்மையால் உலகாண்ட சருக்கம்	,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திருநின்ற -  திருநின்ற சருக்கம்	,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வம்பறா -  வம்பறா வரிவண்டுச் சருக்கம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வார்கொண்ட - வார்கொண்ட வனமுலையாள் சருக்கம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொய் - பொய்யடிமை இல்லாத புலவர் சருக்கம்,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கறை -  கறைக்கண்டன் சருக்கம்	,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கடல் -  கடல் சூழ்ந்த சருக்கம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பத்தராய் -  பத்தராய்ப் பணிவார் சருக்கம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மன்னிய -   மன்னிய நீர்ச் சருக்கம், <br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வெள்ளானை -  வெள்ளானைச் சருக்கம்
            <?php }
	   elseif($topic == "பெருங்கதை")
		{
        ?>
        	<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;உஞ்ஞை - உஞ்சைக் காண்டம் ,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;இலாவாண - இலாவாண காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மகத - மகத காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;வத்தவ- வத்தவ காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நரவாண- நரவாண காண்டம்	
             <?php }
	   elseif($topic == "திருவாசகம்")
		{
        ?>
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திருவா- திருவாசகம்,<br />
       <?php }
	   elseif($topic == "திருமுருகாற்றுப்படை மற்றும் நெடுநல்வாடை")
		{
        ?>
        	<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திரு - திருமுருகாற்றுப்படை,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நெடு - நெடுநல்வாடை
        <?php }
        elseif($topic == "சங்க இலக்கியம் மற்றும் திருக்குறள்")
        {
        	?>
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;திரு -திருமுருகாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பொரு - பொருநராற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;சிறு - சிறுபாணாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பெரும் -பெரும்பாணாற்றுப்படை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;முல் - முல்லைப்பாட்டு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மது - மதுரைக்காஞ்சி,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நெடு - நெடுநல்வாடை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறி - குறிஞ்சிப்பாட்டு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பட் - பட்டினப்பாலை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மலை - மலைபடுகடாம்,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;நற் - நற்றிணை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறு - குறுந்தொகை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;ஐங் - ஐங்குறுநூறு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பதி - பதிற்றுப்பத்து,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;பரி - பரிபாடல்,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;கலி - கலித்தொகை,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;அகம் - அகநானூறு,<br />
			<i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;புறம் - புறநானூறு,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;குறள் - திருக்குறள்,<br />
             <?php }
	   elseif($topic == "சிலப்பதிகாரம் மற்றும் மணிமேகலை")
		{
        ?>
        	
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;புகார் - புகார்க் காண்டம்	,<br />
           <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp; வஞ்சி - மதுரைக் காண்டம்,<br />
            <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மது - வஞ்சிக் காண்டம்,<br />
             <i class="glyphicon glyphicon-arrow-right w3-animate-right"></i>&nbsp;&nbsp;மணி - மணிமேகலை
        <?php }
		?>
		</div>

	</div>





<footer>

   <div class="row" style="font-family:Verdana, Geneva, sans-serif;">

<hr />
          <div class="col-md-4" >
         	                  <h4 style="color:#F00;">Contact</h4>
                                    <p >Ultimate Software Solutions,<br />
                                    	H/68,First floor,Haravi Street,<br>
                                    	6th cross,R.M colony,<br>
                                    	Dindigul-624001,<br />
                                   		Tamil Nadu,India.</p>
                                   
                      
                    </div>

                   <div class="col-md-4" style="margin-top:38px;">

                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">(CC BY-NC-SA 4.0)</a></p>

                   </div>  			

				  <div class="col-md-4"  style="margin-top:38px; font-family:Verdana, Geneva, sans-serif;">

          
			 <p  class="pull-right">Phone : 0451-2460747 <br>
                                    Email&nbsp;&nbsp;: contact@tamilpulavar.org</p>
                             

          </div>

                </div>

      


	</footer>
</div>
	



</body>

</html>
