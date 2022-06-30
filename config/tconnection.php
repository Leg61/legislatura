<? set_time_limit(0);
 error_reporting (E_ALL ^ E_NOTICE);
?>
<?
class TConeccion{
  var $Query;
  var $C;
  var $Link;
    function 
Error(){
    echo mysqli_error();
  }
  function 
TConeccion(){

	  $Server	= "localhost";
	  $User		= "comuncac_mtroncoso";
	  $Password	= "rWruy1fRyq3DXZt";
	  $Database	= "comuncac_legislativoedomex";
	  $Result 	= true;

if (!$this->Link = mysqli_connect($Server, $User, $Password))
{
  $Result = false; 
}
if (!mysqli_select_db($this->Link, $Database))
{
  $Result = false;
}
   return $Result;
  }
function Gestion($Gestion){
    $Result = true; 
    if ($this->Query = mysqli_query($this->Link, $Gestion)){
	  if (strpos($Gestion, "ELECT") == 1) {
	    $this->C = mysqli_num_rows($this->Query);
      }
	}else{
	  $this->Error();
	  $Result = false;
	}
	return $Result;
  }
  function Close(){
    mysqli_close($this->Link); 
  }
} 
?>