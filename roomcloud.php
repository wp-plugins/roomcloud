<?php
/**
 * Plugin Name: Roomcloud
 * Plugin URI: http://www.roomcloud.net
 * Description: A Plugin to add roomcloud booking form to hotel website using [roomcloud] shortcode
 * Version: 1.1
 * Author: Raffaello Bindi
 * Author URI: http://www.roomcloud.net
 * License: GPL2
 */
add_shortcode('roomcloud', 'rc_booking');
add_shortcode('roomcloud_iframe', 'rc_iframe');
function rc_iframe($atts){

/*
echo("hotel:");
echo($_POST['hotel']);
echo('<br>');
echo("page_id:");
echo($_GET['page_id']);
echo('<br>');
echo("lang:");
echo($_GET['lang']);
echo('<br>');
*/

   $chlda = '';
   $chld = $_POST['children'];
    
   if($chld>0){
      for ($x=0; $x<$chld; $x++) {
         $ar='child_'.$x;
	 $a=$_POST[$ar];
  	 $chlda=$chlda.'&child_'.$x.'='.$a;
      } 
   }


   echo('<iframe width="800" height="600" src="');

   echo('http://www.roomcloud.net/be/se1/hotel.jsp?hotel='.$_POST['hotel'].'&pin='.$_POST['pin'].'&start_day='.$_POST['start_day'].'&start_month='.$_POST['start_month'].'&start_year='.$_POST['start_year'].'&end_day='.$_POST['end_day'].'&end_month='.$_POST['end_month'].'&end_year='.$_POST['end_year'].'&m=1&l=0&p=0&h=0&lang='.$_GET['lang'].'&t=0&n=0&adults='.$_POST['adults'].'&children='.$_POST['children'].$chlda);

   echo('"></iframe>');
 
   return;
}
function rc_booking($atts){

   $host="http://www.roomcloud.net/be/se1/hotel.jsp?";
   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"]."&";

   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";

   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="144";
   
   $ADULTS='Adults';
   $CHILDREN='Children';
   $SEARCH='search';
   $CHILDREN_AGE='Children age';
   $JANUARY='January';
   $FEBRUARY='February';
   $MARCH='March';
   $APRIL='April';
   $MAY='May';
   $JUNE='June';
   $JULY='July';
   $AUGUST='August';
   $SEPTEMBER='September';
   $OCTOBER='October';
   $NOVEMBER='November';
   $DECEMBER='December';

?>
<FORM name='formSearch' action="<?php echo($host);?>hotel=<?php echo($hotel);?>&lang=<?php echo($lang);?>" method='post'>
<table id="booking_table">
<tr>
<td align="left">Check in</td>
<td align="left"><select class="formcheck" name="start_day">
<option value="01" >1
</option><option value="02" >2
</option><option value="03" >3
</option><option value="04" >4
</option><option value="05" >5
</option><option value="06" >6
</option><option value="07" >7
</option><option value="08" >8
</option><option value="09" >9
</option><option value="10" >10
</option><option value="11" >11
</option><option value="12" >12
</option><option value="13" >13
</option><option value="14" >14
</option><option value="15" >15
</option><option value="16" >16
</option><option value="17" >17
</option><option value="18" >18
</option><option value="19" >19
</option><option value="20" >20
</option><option value="21" >21
</option><option value="22" >22
</option><option value="23" >23
</option><option value="24" >24
</option><option value="25" >25
</option><option value="26" >26
</option><option value="27" >27
</option><option value="28" >28
</option><option value="29" >29
</option><option value="30" >30
</option><option value="31" >31
</option></select></td>
<td>
<select class="formcheck" name="start_month"
 >
		 <option value="01" ><?php echo($JANUARY);?>
</option><option value="02" ><?php echo($FEBRUARY);?>
</option><option value="03" ><?php echo($MARCH);?>
</option><option value="04" ><?php echo($APRIL);?>
</option><option value="05" ><?php echo($MAY);?>
</option><option value="06" ><?php echo($JUNE);?>
</option><option value="07" ><?php echo($JULY);?>
</option><option value="08" ><?php echo($AUGUST);?>
</option><option value="09" ><?php echo($SEPTEMBER);?>
</option><option value="10" ><?php echo($OCTOBER);?>
</option><option value="11" ><?php echo($NOVEMBER);?>
</option><option value="12" ><?php echo($DECEMBER);?>
</option>
</select></td>
<td>
<select  class="formcheck"  name="start_year">
	     <option value="2013" >2013
</option><option value="2014" >2014
</option><option value="2015" >2015
</option><option value="2016" >2016
</option><option value="2017" >2017
</option><option value="2018" >2018
</option><option value="2019" >2019
</option></select></td>
</tr>
</tr>
<tr>
<td align="left">Check out</td>
<td align="left">
<select  class="formcheck"  name="end_day">
		 <option value="01" >1
</option><option value="02" >2
</option><option value="03" >3
</option><option value="04" >4
</option><option value="05" >5
</option><option value="06" >6
</option><option value="07" >7
</option><option value="08" >8
</option><option value="09" >9
</option><option value="10" >10
</option><option value="11" >11
</option><option value="12" >12
</option><option value="13" >13
</option><option value="14" >14
</option><option value="15" >15
</option><option value="16" >16
</option><option value="17" >17
</option><option value="18" >18
</option><option value="19" >19
</option><option value="20" >20
</option><option value="21" >21
</option><option value="22" >22
</option><option value="23" >23
</option><option value="24" >24
</option><option value="25" >25
</option><option value="26" >26
</option><option value="27" >27
</option><option value="28" >28
</option><option value="29" >29
</option><option value="30" >30
</option><option value="31" >31
</select></td>
<td>
<select class="formcheck" name="end_month">
		 <option value="01" ><?php echo($JANUARY);?>
</option><option value="02" ><?php echo($FEBRUARY);?>
</option><option value="03" ><?php echo($MARCH);?>
</option><option value="04" ><?php echo($APRIL);?>
</option><option value="05" ><?php echo($MAY);?>
</option><option value="06" ><?php echo($JUNE);?>
</option><option value="07" ><?php echo($JULY);?>
</option><option value="08" ><?php echo($AUGUST);?>
</option><option value="09" ><?php echo($SEPTEMBER);?>
</option><option value="10" ><?php echo($OCTOBER);?>
</option><option value="11" ><?php echo($NOVEMBER);?>
</option><option value="12" ><?php echo($DECEMBER);?>
</option>
</select></td>
<td>
<select class="formcheck" name="end_year" >
		 <option value="2013" >2013
</option><option value="2014" >2014
</option><option value="2015" >2015
</option><option value="2016" >2016
</option><option value="2017" >2017
</option><option value="2018" >2018
</option><option value="2019" >2019
</option>
</select></td>
</tr>
<tr>
<td  align="left"><?php echo($ADULTS);?></td>
<td  align="left" valign="middle">
<select class="formcheck" name="adults">
<option>1</option>
<option selected>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></td>
<td align="right">
cod. promo:</td>
<td>
<input name="pin" class="formcheck" size="6"></td>
</tr>
<tr>
<td align="left"><?php echo($CHILDREN);?></td>
<td  align="left" valign="middle">
<select class="formcheck" name="children">
<option></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select></td>
<td colspan="2" style="vertical-align: middle; text-align: right;">
<input type="submit" value="<?php echo($SEARCH);?>" class="formcheck" style="width:120px"></td>
</tr>
</table>
</FORM>
<style>
#booking_table{
margin: 0;
}
#booking_table td{
  padding: 6px 2px;
  font-size: 10px;
}
.formcheck{
  font-size: 9px;
}
</style>
<script language="javascript" src="http://www.roomcloud.net/be/js/javascript.js" type="text/JavaScript"></script><script language="JavaScript">jQuery(document).ready(function($){$('select').on('change', function(){if($(this).attr('name')=='children' )buildIntervals($("select[name='children']").val()); else checkDates();}); });</script><script language="JavaScript">var MONTH_NAMES=new Array('January','February','March','April','May','June','July','August','September','October','November','December','01','02','03','04','05','06','07','08','09','10','11','12');var DAY_NAMES=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sun','Mon','Tue','Wed','Thu','Fri','Sat');</script><script language="JavaScript">function LZ(x) {return(x<0||x>9?"":"0")+x}</script><script language="JavaScript">function formatDate(date,format) {format=format+"";var result="";var i_format=0;var c="";var token="";var y=date.getYear()+"";var M=date.getMonth()+1;var d=date.getDate();var E=date.getDay();var H=date.getHours();var m=date.getMinutes();var s=date.getSeconds();var yyyy,yy,MMM,MM,dd,hh,h,mm,ss,ampm,HH,H,KK,K,kk,k;var value=new Object();if (y.length < 4) {y=""+(y-0+1900);}value["y"]=""+y;value["yyyy"]=y;value["yy"]=y.substring(2,4);value["M"]=M;value["MM"]=LZ(M);value["MMM"]=MONTH_NAMES[M-1];value["NNN"]=MONTH_NAMES[M+11];value["d"]=d;value["dd"]=LZ(d);value["E"]=DAY_NAMES[E+7];value["EE"]=DAY_NAMES[E];value["H"]=H;value["HH"]=LZ(H);if (H==0){value["h"]=12;}else if (H>12){value["h"]=H-12;}else {value["h"]=H;}value["hh"]=LZ(value["h"]);if (H>11){value["K"]=H-12;} else {value["K"]=H;}value["k"]=H+1;value["KK"]=LZ(value["K"]);value["kk"]=LZ(value["k"]);if (H > 11) { value["a"]="PM"; }else { value["a"]="AM"; }value["m"]=m;value["mm"]=LZ(m);value["s"]=s;value["ss"]=LZ(s);while (i_format < format.length) {c=format.charAt(i_format);token="";while (format.charAt(i_format)==c) {token += format.charAt(i_format++);if(i_format == format.length)break;}if (value[token] != null) { result=result + value[token]; }else { result=result + token; }}return result;}</script><script language="JavaScript">function getDateString(y_obj,m_obj,d_obj) {var y = y_obj.options[y_obj.selectedIndex].value;var m = m_obj.options[m_obj.selectedIndex].value;var d = d_obj.options[d_obj.selectedIndex].value;if (y=="" || m=="") { return null; }if (d=="") { d=1; }return str= y+'-'+m+'-'+d;}</script><script language="JavaScript">function getDateString(y_obj,m_obj,d_obj) {var y = y_obj.options[y_obj.selectedIndex].value;var m = m_obj.options[m_obj.selectedIndex].value;var d = d_obj.options[d_obj.selectedIndex].value;if (y=="" || m=="") { return null; }if (d=="") { d=1; }return str= y+'-'+m+'-'+d;}</script><script language="JavaScript">function checkDates(){var d1 = getDateString(document.formSearch.start_year,document.formSearch.start_month,document.formSearch.start_day);
var d2 = getDateString(document.formSearch.end_year,document.formSearch.end_month,document.formSearch.end_day);
if(d1>=d2){var curTime = getDateFromFormat(d1,"yyyy-MM-dd");
var curDate = new Date(curTime);
curDate.setDate(curDate.getDate() + 1);
document.formSearch.end_year.value=formatDate(curDate,"yyyy");
document.formSearch.end_month.value=formatDate(curDate,"MM");
document.formSearch.end_day.value=formatDate(curDate,"dd");
}}</script><script language="JavaScript">function getDateFromFormat(val,format) {val=val+"";format=format+"";var i_val=0;var i_format=0;var c="";var token="";var token2="";var x,y;var now=new Date();var year=now.getYear();var month=now.getMonth()+1;var date=1;var hh=now.getHours();var mm=now.getMinutes();var ss=now.getSeconds();var ampm="";while (i_format < format.length) {c=format.charAt(i_format);token="";while ((format.charAt(i_format)==c)) {token += format.charAt(i_format++);if((i_format == format.length))break;}if (token=="yyyy" || token=="yy" || token=="y") {if (token=="yyyy") { x=4;y=4; }if (token=="yy")   { x=2;y=2; }if (token=="y")    { x=2;y=4; }year=_getInt(val,i_val,x,y);if (year==null) { return 0; }i_val += year.length;if (year.length==2) {if (year > 70) { year=1900+(year-0); }else { year=2000+(year-0); }}}else if (token=="MMM"||token=="NNN"){month=0;for (var i=0; i<MONTH_NAMES.length; i++) {	var month_name=MONTH_NAMES[i];	if (val.substring(i_val,i_val+month_name.length).toLowerCase()==month_name.toLowerCase()) {			if (token=="MMM"||token=="NNN") {			var go=true;						if(token=="NNN"){				if(i<=11)				go=false;						}						if(go){							month=i+1;				if (month>12) { month -= 12; }				i_val += month_name.length;				break;			}		}	}}if ((month < 1)||(month>12)){return 0;}}else if (token=="EE"||token=="E"){for (var i=0; i<DAY_NAMES.length; i++) {var day_name=DAY_NAMES[i];if (val.substring(i_val,i_val+day_name.length).toLowerCase()==day_name.toLowerCase()) {i_val += day_name.length;break;}}}else if (token=="MM"||token=="M") {month=_getInt(val,i_val,token.length,2);if(month==null||(month<1)||(month>12)){return 0;}i_val+=month.length;}else if (token=="dd"||token=="d") {date=_getInt(val,i_val,token.length,2);if(date==null||(date<1)||(date>31)){return 0;}i_val+=date.length;}else if (token=="hh"||token=="h") {hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>12)){return 0;}i_val+=hh.length;}else if (token=="HH"||token=="H") {hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>23)){return 0;}i_val+=hh.length;}else if (token=="KK"||token=="K") {hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>11)){return 0;}i_val+=hh.length;}else if (token=="kk"||token=="k") {hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>24)){return 0;}i_val+=hh.length;hh--;}else if (token=="mm"||token=="m") {mm=_getInt(val,i_val,token.length,2);if(mm==null||(mm<0)||(mm>59)){return 0;}i_val+=mm.length;}else if (token=="ss"||token=="s") {ss=_getInt(val,i_val,token.length,2);if(ss==null||(ss<0)||(ss>59)){return 0;}i_val+=ss.length;}else if (token=="a") {if (val.substring(i_val,i_val+2).toLowerCase()=="am") {ampm="AM";}else if (val.substring(i_val,i_val+2).toLowerCase()=="pm") {ampm="PM";}else {return 0;}i_val+=2;}else {if (val.substring(i_val,i_val+token.length)!=token) {return 0;}else {i_val+=token.length;}}}if (i_val != val.length) { return 0; }if (month==2) {	if ( ( (year%4==0) ) || (year%400==0) ) {			var go=true;		if ( (year%4==0) )			if(year%100 == 0)				go=false;		if(go)			if (date > 29){ return 0; }		}	else { if (date > 28) { return 0; } }}if ((month==4)||(month==6)||(month==9)||(month==11)) {if (date > 30) { return 0; }}if (hh<12) { 	if(ampm=="PM")		hh=hh-0+12; }else if (hh>11) {	if(ampm=="AM")		hh-=12; }var newdate=new Date(year,month-1,date,hh,mm,ss);return newdate.getTime();}</script><script language="JavaScript">function _getInt(str,i,minlength,maxlength) {for (var x=maxlength; x>=minlength; x--) {var token=str.substring(i,i+x);if (token.length < minlength) { return null; }if (_isInteger(token)) { return token; }}return null;}
</script><script language="JavaScript">function _isInteger(val) {var digits="1234567890";for (var i=0; i < val.length; i++) {if (digits.indexOf(val.charAt(i))==-1) { return false; }}return true;}</script>
<script type="text/javascript">var now = new Date();
document.formSearch.start_year.value=formatDate(now,"yyyy");
document.formSearch.start_month.value=formatDate(now,"MM");
document.formSearch.start_day.value=formatDate(now,"dd");
now.setDate(now.getDate() + 1);
document.formSearch.end_year.value=formatDate(now,"yyyy");
document.formSearch.end_month.value=formatDate(now,"MM");
document.formSearch.end_day.value=formatDate(now,"dd");
</script><script language="javascript">function buildIntervals(selected) {var tbl=document.getElementById("booking_table");var firstRow = 4;var len = tbl.rows.length;for(i=len-1; i>=firstRow;i--){tbl.deleteRow(i);}for(i=selected-1; i>=0;i--){var row = tbl.insertRow(firstRow);var cellLeft = row.insertCell(0);cellLeft.setAttribute("align","left");cellLeft.setAttribute("font-size","10px");var textNode = document.createTextNode("<?php echo($CHILDREN_AGE);?> "+(i+1));cellLeft.appendChild(textNode);var cellCenter = row.insertCell(1);cellCenter.setAttribute("align","left");var select = document.createElement("select");select.setAttribute("name","child_"+i);select.setAttribute("class","formcheck");var textNode = document.createTextNode("<?php echo($CHILDREN_AGE);?> "+(i+1));select.options[0] = new Option('','');select.options[1] = new Option('0','0');select.options[2] = new Option('1','1');select.options[3] = new Option('2','2');select.options[4] = new Option('3','3');select.options[5] = new Option('4','4');select.options[6] = new Option('5','5');select.options[7] = new Option('6','6');select.options[8] = new Option('7','7');select.options[9] = new Option('8','8');select.options[10] = new Option('9','9');select.options[11] = new Option('10','10');select.options[12] = new Option('11','11');select.options[13] = new Option('12','12');select.options[14] = new Option('13','13');select.options[15] = new Option('14','14');cellCenter.appendChild(select);var cellRight = row.insertCell(2);cellRight.setAttribute("colspan","2");}}</script>



<?php
}