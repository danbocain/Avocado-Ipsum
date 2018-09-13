<html>
<head>
<title>Avocado Ipsum - The OMEGA-3 of Text Generators</title>
<meta name="robots" content="noodp,noydir"/>
<meta name="description" content="Stop using boring Latin-filler Ipsum generators and add some personality to your website. Fill your website with avocado and Mexican cuisine text!"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Avocado Ipsum - The OMEGA-3 of Text Generators"/>
<meta property="og:description" content="Stop using boring Latin-filler Ipsum generators and add some personality to your website. Fill your website with avocado and Mexican cuisine text!"/>
<link rel="shortcut icon" href="avocado.ico" />
<meta name="google-site-verification" content="buSw8T9Z9deBJep-oMq66uu-bezuziV8hQr4_TOUffk" />
<link rel="stylesheet" type="text/css" media="screen" href="jq.css" />
<style type="text/css">
#main { padding: 0 20px 20px 20px }
h2 { background-color: #eee; font-weight: normal; margin:0; padding:10px; font-size: small }
.ipsum { 
	border:1px solid #ccc;
	position:relative;
	width:700px;
	margin:10px auto;
	padding:10px;
}
</style>
<script type="text/javascript" src="jquery-1.2.3.js"></script>
<script type="text/javascript">(function($) {
  $.fn.lorem = function(options) {
  	$.fn.lorem.defaults = {
		type: 'paragraphs',
		amount: '3',
		ptags: true
	};
	var opts = $.extend({}, $.fn.lorem.defaults, options);
	var min_num = 1;  
	var max_num = 3; 
	var diff = max_num-min_num+1 ; 
	var howmany = opts.amount;
	var lorem = new Array(5);
	lorem[1] ="Avocado tortilla chicken. Ground beef taco spicy jalapeno sauce sour cream. Chimichanga avocado empanadas tortilla jalapenos. Red pepper guacamole spicy corn taco beef.  Avocado jalapeno tomato lime tacos. Mashed hass Avocado guacamole salsa dip. Carnitas tacos."; 
	
	lorem[2] ="Peach salsa nachos habanero peppers. Enchilada jalapeno sauce. Red pepper guacamole spicy corn taco beef. Refried bean avocado jalapeno lime zest. Mashed hass Avocado guacamole salsa dip. Nacho sour cream salsa avocado bean dip jalapeno. Tequila-lime, chicken quesadilla black beans. Creamy avocado chili chimichangas."; 
	
	lorem[3] ="Refried bean avocado jalapeno lime zest. Taco pork enchiladas. Creamy avocado chili chimichangas. Peach salsa nachos habanero peppers. Baked avocado mango peach salsa tostadas. Peach salsa nachos habanero peppers. Chicken bean hot tamales chili sauce lime burrito. Red pepper guacamole spicy corn taco beef."; 
	
	lorem[4] ="Gordita avocado habanero Tamale tortilla nacho beef. Hot beef cheese tamales. Gooey zesty guacamole baked burrito. Avocado tequila chili. Chicken pork cheese tacos. Nacho beef chimichanga tortilla Avocado."; 
	
	lorem[5] ="Ground beef taco spicy jalapeno sour cream. Avocado jalapeno tomato lime tacos. Taco burrito jalapeno avocado. Salsa enchiladas beans big green skin avocado. Mashed hass Avocado guacamole salsa dip. Carnitas tacos. Baked avocado mango peach salsa tostadas. Peach salsa nachos habanero peppers."; 
	
	
	function makeipsum(){
		var ipsum_text = "";
		for (var i = 0; i < howmany; i++){
			rnd_number=Math.floor(Math.random()*diff + min_num); 
		if(options.ptags==true){
			ipsum_text+="<p>";
		}
		ipsum_text+=lorem[rnd_number];
		if(opts.ptags==true){
			ipsum_text+="</p>";
		}
		ipsum_text+="\n\n";
		}
		switch(opts.type) {
			case "words":{
		      	var numOfWords = opts.amount;
				numOfWords = parseInt( numOfWords );
				var list = new Array();
				var wordList = new Array();
				wordList = ipsum_text.split( ' ' );
				var iParagraphCount = 0;
				var iWordCount = 0;
				while( list.length < numOfWords ) {
					if( iWordCount > wordList.length ) {
						iWordCount = 0;
		        		iParagraphCount++;
		      		  	if( iParagraphCount + 1 > lorem.length ) {
							iParagraphCount = 0;
						}
		        		wordList = lorem[ iParagraphCount ].split( ' ' );
		        		wordList[0] = "\n\n" + wordList[ 0 ];
					}
		       		list.push( wordList[ iWordCount ] );
		       		iWordCount++;
				}
				ipsum_text = list.join(' '); // changed
			break;
			}
			case 'characters':
			{
				var outputString = '';
			    var numOfChars = opts.amount;
			    numOfChars = parseInt( numOfChars );
			    var tempString = lorem.join( "\n\n" );
				while(outputString.length < numOfChars ){
						outputString += tempString;
				}
			    ipsum_text = outputString.substring(0, numOfChars );
			break;
			}
			case 'paragraphs':{
			///no action needed
			break;
			}
		}
		return ipsum_text;
	}


return this.each(function() {
	  $this = $(this);
	  var markup = makeipsum();
	  $this.html(markup);
	  
	});
  };

})(jQuery);</script>
</head>
<body>
	
<div align="center" style="width: 1000px; margin: 0 auto;">

<p>&#8220;Lipsum&#8221; is a great way to fill out your website so people can visualize what the page may look like with actual text on it. Traditionally people stuck with latin, but in the recent years, we&#8217;ve seen a growing popularity in niche, or themed text generation. You can find text generators for <a href="http://cupcakeipsum.com/" target="_blank">cupcakes</a>, <a href="http://baconipsum.com/" target="_blank">bacon</a>, and even one for <a href="http://beeripsum.com/" target="_blank">beer</a>!</p>
<p>This website provides text generation, themed around&#8230; <em>you guessed it!</em> Avocados!</p>

<input type="button" onclick="$('.ipsum').lorem({ type: 'words',amount:'100',ptags:true});" value="Smash Some Avocados!" /><br />
</div><!--centering div-->
<div class="ipsum"></div>
<div align="center" style="width: 1000px; margin: 0 auto;">

</div><!--centering div-->


</body>
</html>

