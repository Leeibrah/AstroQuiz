<?php 

	include 'connect.php'; 

	$sql = "select * from qna"; //replace emp_info with your table name 
	$result = mysql_query($sql);
	$json = array();
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_row($result)){
		 $json[]=$row; 
			// $json['questions'][]=$row;
			// $json['question']=$row;
			// $json[] = array($row['question'],$row['answer1']);
		}
	}
?>

<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Asteroids Page</title>
	<link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	<style>

		body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	.logoimg{
		color:#df7366;
		text-decoration: none;
	}
	</style>
</head>
<body>

			<h1><a href="index.html" class="logoimg">AstroQuiz</a></h1>

			<br/>
			<h1>Asteroids</h1>
			<span>
				<h3>
					Asteroids are minor planets, especially those of the inner Solar System. The larger ones have also been called planetoids
				</h3>
			</span>	

			<!-- Accordion -->
			<h2 class="demoHeaders">Asteroids Questions</h2>

			<div id="accordion">
				<?php 
					$q = 1;
					$i = 1;
					$rbtn = 1;   //".$rbtn."
					$qcounter = 1; 
					$numbers = '<input type="radio" name="answer'.$qcounter.'">';
					foreach ($json as $key => $value) {
						// print_r($value);
						// exit();
						echo "<h3> Question ". $qcounter .": " .$value[$q]. "</h3><div>";
						$count = count($value);
						for ($j=2; $j < $count; $j++) { 
						 	echo '<input type="radio" name="answer'.$qcounter.'">'." ".$value[$j]. "<br><hr>";
						 	$numbers++;
						 	// break;
						 } 
						
						// print_r($value);
						// print_r($value[1]);
						// print_r($value[3]);
						$i++;
						$qcounter++;

						echo "</div>";
					}
				?>

			</div>	
			

			<div style="float:right; margin-top:10px;">
				<input type='button' value='View Your Score' id='btn'>

			</div>
		</body>

</html>

<script type="text/javascript">
 

  $('#btn').click(function() {
  	
  	var $count=0;

	    if($('input:radio[name=answer1]:nth(3)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 	
	    	// var $count=1;
	   		$count += 1;	   		
	    }
	    $count;

	    if($('input:radio[name=answer2]:nth(0)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 	
	   		$count += 1;	   		
	    }
	    $count;	    

	    if($('input:radio[name=answer3]:nth(1)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 
	   		$count +=1;	   		
	    }
	    $count;
	    if($('input:radio[name=answer4]:nth(1)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 	
	   		$count += 1;	   		
	    }
	    $count;	    

	    if($('input:radio[name=answer5]:nth(2)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 
	   		$count +=1;	   		
	    }
	    $count;
	    if($('input:radio[name=answer6]:nth(0)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 	
	   		$count += 1;	   		
	    }
	    $count;	    

	    if($('input:radio[name=answer7]:nth(1)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 
	   		$count +=1;	   		
	    }
	    $count;
	    if($('input:radio[name=answer8]:nth(1)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 	
	   		$count += 1;	   		
	    }
	    $count;	    

	    if($('input:radio[name=answer9]:nth(0)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 
	   		$count +=1;	   		
	    }
	    $count;

	    if($('input:radio[name=answer10]:nth(1)').is(':checked'))
	    // && ($('input:radio[name=answer2]:nth(0)').is(':checked')) 
	    { 
	   		$count +=1;	   		
	    }
	    $count;
	    alert($count);

  });
</script>