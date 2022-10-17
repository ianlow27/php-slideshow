<?php
/* ==============================================
TO DO:
======
- details
-------------------------------------------------
DONE:
=====
# Changelog
## 1.0.0 - yyyy-mm-dd
### Changed
- details
### Fixed
- details
### Added
- details
================================================= */
namespace Ianl28\PhpSlideshow;

use Ianl28\StarterFiles as sf;


class PhpSlideshow{
private $gwSf;
//-------------------------------
public function __construct(){
  echo "This is called from PhpSlideshow->__construct()\n";
}//endfunc
//-------------------------------
public function testfunc($pstr){
  echo "[parameter passed into testfunc(): ". $pstr ." ]";
}//endfunc
//-------------------------------
public function main(){
  $gwSf = new sf\StarterFiles;
echo '<!DOCTYPE html><html><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
';
echo $gwSf->JSUtils();
echo '
<style>
__a {text-decoration:none;}
</style>
</head>
<body style="margin:0px;font-family:Times New Roman;">
<table width="100%" border=0 borderwidth=0 bordercolor=blue cellspacing=0 cellpadding=0>
<tr><td style="background-color:darkslategrey;color:white;xxtext-align:right;">
<table width="100%">
<tr>
<td width="99%" style="text-align:center;color:white;" >
  php-slideshow
</td>
<td width="1%" >
<input type="text" onkeydown="txcmd_onkeypress();" id="txcmd" style="width:10px;"/>
</td>
</tr>
</table>

<script>

alert("3___" + test1("jhkhkjhhkhj12123"));
alert("4___" + gebid("kjhkjhkh"));


let txcmd = document.getElementById("txcmd");
txcmd.focus();
function txcmd_onkeypress(){
  let e=event;
  const keycode = Number(e.keyCode);
  if      ((keycode == 39) || (keycode == 40)){
    alert("forward");
  }else if((keycode == 37) || (keycode == 38)){
    alert("backward");
  }
txcmd.value="";
txcmd.focus();
}//endfunc

</script>


</td></tr>
<tr><td>';


echo '<div id="dvmain" style="width:100%;background-color:#ddf;"> adkjahd kajdhasd kajdha dkajhda kdah dkasjhd sakdjh askd
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/> <br/>
';

  echo "This is called from PhpSlideshow->main()\n";
  echo self::testfunc(date("Ymd-Hi:s"));

echo '</div>';

echo ' </td></tr> </table>

<div id="dvcode" style="width:80%;height:80%;border:1px solid #aaa;background-color:#afa;position:fixed;top:20px;left:20px;">
<textarea id="txtcode" style="width:95%;height:80%;margin:10px;"></textarea>
<button id="btnsave" onclick="btnsave();">Save</button>
</div>
<script>
function btnsave(){
  locstor("123", gebid("txtcode").value);
//alert(locstor("123"));
}//endfunc
</script>

</body></html>';
}//endfunc
//-------------------------------

}//endclass 
?>
