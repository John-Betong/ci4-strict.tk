<?php 
	declare(strict_types=1);
	error_reporting(-1);
	ini_set('display_errors', 'true');

//========================================
function delToolBar()
:string 
{
	$xxs = glob('../writable/debugbar/*.*');
	foreach($xxs as $id => $ff):
		if( unlink($ff) ):
			# echo '<br>Deleted: ' .$ff;
		endif;	
	endforeach;	

	return '';
}//
 

//========================================
// 
//========================================
function vd2($val='Nothing passed???')
{
	list($callee) = debug_backtrace();
	$title 				= $callee['file'].' @line: '.$callee['line'];

	$style= <<< ____TMP
		<dl style=" 
			width:88%; 
			margin:2em auto; 
			background-color:#ffe; color:#00a; 
			padding: 0.88em;
			border: dotted 2px red;
			text-align:left;
			">
			<dt> $title </dt>
			<dd>
			<div> &nbsp; </div>
____TMP;

	$style= <<< ____TMP
		<div>
		<fieldset style=" 
			width:88%; 
			margin:2em auto; 
			background-color:#ffe; color:#00a; 
			padding: 0.88em;
			border: dotted 2px red;
			text-align:left;
			">
____TMP;
	echo $style;

  # list($callee) = debug_backtrace();

  $arguments = func_get_args();

  $totalArguments = func_num_args();

  # echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
  echo 	'<legend style="background:lightgrey; padding:5px;">'
				.		$callee['file'].' @line: '.$callee['line']
				.'</legend><pre><code>';

  foreach ($arguments as $i2 => $argument)
  {
  	echo '<strong>Debug #'.$i2.' of '.$totalArguments.'</strong>: '.'<br>';
      
    # this cam be changed to print_r() if you prefer that.
    print_r($argument);
    # var_dump($argument);
  }
	# echo '</dd></dl>';	
  echo "</code></pre></fieldset><div><br>";
}

//========================================
// 
//========================================
function vd3($val='Nothing passed???')
{
	list($callee) 	= debug_backtrace();
	$title 					= $callee['file'].' @line: '.$callee['line'];
  $arguments 			= func_get_args();
  $totalArguments = func_num_args();

	$style= <<< ____TMP
		<div>
		<fieldset style=" 
			width:88%; 
			margin:2em auto; 
			background-color:#ffe; color:#00a; 
			padding: 0.88em;
			border: dotted 2px red;
			text-align:left;
			">
____TMP;
	echo $style;

  echo 	'<legend style="background:lightgrey; padding:5px;">'
				.		$callee['file'].' @line: '.$callee['line']
				.'</legend><pre><code>';

  foreach ($arguments as $i2 => $argument)
  {
  	echo 	 '<strong>Debug #'.$i2.' of '.$totalArguments
  				.'</strong>: '.'<br>';
      
    print_r($argument); # var_dump($argument);
  }
  echo "</code></pre></fieldset><div><br>";
}

//========================================
function table
(
	$val 		=	[], 
	string 	$title 	=	"Yes we have NO title"
)
:string 
{
	list($callee) = debug_backtrace();
	$title 				= $callee['file'].' @line: '.$callee['line'];

	$style= <<< ____TMP
		<dl style=" 
			width:88%; 
			margin:2em auto; 
			background-color:#ffe; color:#00a; 
			padding: 0.88em;
			border: dotted 2px red;
			text-align:left;
			">
			<dt> $title </dt>
			<dd>
				<div> &nbsp; </div>
____TMP;
	echo $style;
	
		# if( ! is_array()):
		echo '<table>';
		foreach( (array) $val as $id => $row) :
			echo '<tr ><td class="tal">', $id ,'</td><td class="tal">', $row, '</td></tr>';
		endforeach;	
		echo '</table>';

	echo '</dd></dl>';	


	return '';	
}

//========================================
function vd
(
	$val 						=	'NO $val ???', 
	string $title 	=	"Yes we have NO title"
)
:string 
{
	list($callee) = debug_backtrace();
	$title 				= $callee['file'].' @line: '.$callee['line'];

	$style= <<< ____TMP
		<dl style=" 
			width:88%; 
			margin:2em auto; 
			background-color:#ffe; color:#00a; 
			padding: 0.88em;
			border: dotted 2px red;
			text-align:left;
			">
			<dt> $title </dt>
			<dd>
____TMP;

	echo $style;
		if( is_array($val) ):
			foreach($val as $key => $item):
				if( is_array($item) ):
					print_r($item);
				else:	
					echo '<br>' .gettype($key) .' ==> ' .$key . ' ==> ' .$item;
				endif;	
			endforeach;
		else:		
			echo '<pre>'; var_dump($val);	echo '</pre>';
		endif;	
	echo '</dd></dl>';	

	return '';	
}

//========================================
function fred
(
	$val 						= '! $val', 
	string $title 	=	"Yes we have NO title"
)
:string 
{
	list($callee) = debug_backtrace();
	$title 				= $callee['file'].' @line: '.$callee['line'];

	$prn = print_r($val, true);
	$style = <<< ____EOT
		width:88%; 
		margin:2em auto; 
		background-color:#ffe; color:#00a; 
		padding: 0.88em;
		border: dotted 2px red;
		text-align:left;
____EOT;

	$result = <<< ____TMP
		<dl style="$style">
			<dt>$title ==> </dt>
				<dd> <pre > $prn </pre> </dd>
		</dl>		
____TMP;
	echo $result;

	return '';
}


//==================================================
function getDefs()
:string 
{
		$defs = [
		'CI_DEBUG' 				=> CI_DEBUG,
		'APP_NAMESPACE' 	=> APP_NAMESPACE,
		'ENVIRONMENT' 		=> ENVIRONMENT,
		'CI_ENVIRONMENT' 	=> CI_ENVIRONMENT,
		'SYSTEMPATH' 			=> SYSTEMPATH, 
		'ROOTPATH' 				=> ROOTPATH, 
		'WRITEPATH' 			=> WRITEPATH, 
		'TESTPATH' 				=> TESTPATH, 
		'COMPOSER_PATH' 	=> COMPOSER_PATH,
		'SHOW_DEBUG_BACKTRACE' => SHOW_DEBUG_BACKTRACE,
	#	'APPATH' 					=> APPATH,
	#	'SPARKED' 				=> SPARKED,
	];
	$table = '<table style="display:inine-block; font-size:small; text-align:left; 
		border:solid 1px red;">';
	foreach($defs as $id => $def):
		$table .= <<< ____TMP
			<tr> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td> $id </td><td> $def </td> </tr>
____TMP;
	endforeach;
	$table .= '</table>';

	return $table;
}

