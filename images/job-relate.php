<?php 
error_reporting(0);
if(!isset($_COOKIE['login']))
{
	header("Location: login.php");
	exit();
}

?>

<?php
//include "header2.php";
include "header3.php";
//include "header5.php";
//include "leftmenu.php";
include "db.php";
$lu=$_COOKIE['lu'];


$rec_job=mysql_fetch_array(mysql_query("select *from job_related where user_id=".$lu));

//print_r($get_per);
//exit();

if($_GET['data']=="update") { print '<script type="text/javascript">alert(" Data Updated successfully");</script>'; }
if($_GET['get']=="insert") { print '<script type="text/javascript">alert("Data Updated successfully");</script>'; }
?>


  <td width="668" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="middle" class="right-area-tabs">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" align="left" valign="middle"><span class="places"> Job Related Expenses</span></td>
                      <td align="right"></td>
                    </tr>
                  </table>

<script language="javascript" src="js/validations.js" type="text/javascript"></script>

<!-- my code datepicker code generated here mallesh -->

<link rel="stylesheet" href="images/images/main.css">
					<script type="text/javascript" language="javascript" src="images/images/prototype-1.js"></script>
			<script type="text/javascript" language="javascript" src="images/images/prototype-base-extensions.js"></script>
			<script type="text/javascript" language="javascript" src="images/images/prototype-date-extensions.js"></script>
			<script type="text/javascript" language="javascript" src="images/images/behaviour.js"></script>
							<script type="text/javascript" language="javascript" src="images/images/datepicker.js"></script>
										<link rel="stylesheet" href="images/images/datepicker.css">
							<script type="text/javascript" language="javascript" src="images/images/behaviors.js"></script>

<!--   End ......................... here -->




<script type="text/javascript">



	

function pamount_change()
{

var date1 = document.getElementById('pamount6').value;
  var date2 = document.getElementById('pamount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);

  
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("pmonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("pmonths").value=displaymonths;
  }


		//document.getElementById("pmonths").value=_Diff;
		}		
		
		
		
		

function qamount_change()
{

var date1 = document.getElementById('qamount6').value;
  var date2 = document.getElementById('qamount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("qmonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("qmonths").value=displaymonths;
  }
		}


	
		
function ramount_change()
{

var date1 = document.getElementById('ramount6').value;
  var date2 = document.getElementById('ramount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("rmonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("rmonths").value=displaymonths;
  }
		}
	
	function xamount_change()
{

var date1 = document.getElementById('xamount6').value;
  var date2 = document.getElementById('xamount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("xmonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("xmonths").value=displaymonths;
  }
		}
	
	function yamount_change()
{

var date1 = document.getElementById('yamount6').value;
  var date2 = document.getElementById('yamount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("ymonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("ymonths").value=displaymonths;
  }
		}
	
	function zamount_change()
{

var date1 = document.getElementById('zamount6').value;
  var date2 = document.getElementById('zamount7').value;
  date1 = date1.split("-");
  date2 = date2.split("-");
  var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
  var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  if(daysApart<31)
  {
  var day="days";
  var displaydays=daysApart+day;
  //alert(displaydays);
    document.getElementById("zmonths").value=displaydays;
  }
  else
  {
  var month="month(s)";
  var m=Math.round(daysApart/31);
  var displaymonths=m+month;
  //alert(displaymonths);
  document.getElementById("zmonths").value=displaymonths;
  }
		}




	
</script>

<!-- Content --->
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="expense" name="myform" method="post" action="job-related.php" >


								<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody><tr>
<td width="30%"   align="center" valign="middle" class="tbl-area-tabs"><strong> PROJECT/ASSIGNMENT INFO</strong></td>
<td width="12%"  align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
  Assignment 1</strong></td>
<td width="12%"  align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
  Assignment 2</strong></td>
<td width="12%"  align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
  Assignment 3</strong></td>
<td width="12%" align="center" valign="middle" class="tbl-area-tabs" ><strong> Project/<br />
  Assignment 4</strong></td>
<td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
  Assignment 5</strong></td>
<td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
  Assignment 6</strong></td>
  </tr>

<tr bgcolor="#FFFFFF">
<td align="left" valign="top">Name of the Project</td>
<td align="center" valign="top"><input name="pamount1" type="text" value="<?php echo $rec_job['pamount1'];?>" id="pamount1" size="10" /></td>
<td align="center" valign="top"><input name="qamount1" type="text" value="<?php echo $rec_job['qamount1'];?>" id="qamount1" size="8" /></td>
<td align="center" valign="top"><input name="ramount1" type="text" value="<?php echo $rec_job['ramount1'];?>" id="ramount1" size="8" /></td>
<td align="center" valign="top" ><input name="xamount1" type="text" value="<?php echo $rec_job['xamount1'];?>" id="xamount1" size="8" /></td>
<td align="center" valign="top" ><input name="yamount1" type="text" value="<?php echo $rec_job['yamount1'];?>" id="yamount1" size="8" /></td>
<td align="center" valign="top"  ><input name="zamount1" type="text" value="<?php echo $rec_job['zamount1'];?>" id="zamount1" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Duration of the Project/Assignment</td>
  <td align="center" valign="top"><select name="pamount2" id="pamount2"  class="select-box-new">
    <option>Select</option>
    <option <?php if($rec_job['pamount2'] =="< 6 Months") echo " selected=\"selected\"";?> > < 6 Months </option>
    <option <?php if($rec_job['pamount2'] ==">6<12 Months") echo " selected=\"selected\"";?> > >6<12 Months </option>
    <option <?php if($rec_job['pamount2'] ==">12 Months ") echo " selected=\"selected\"";?> > >12 Months </option>
  </select></td>
  <td align="center" valign="top"><select name="qamount2" id="qamount2"  class="select-box-new">
    <option>Select</option>
    <option <?php if($rec_job['qamount2'] =="< 6 Months") echo " selected=\"selected\"";?> > < 6 Months</option>
    <option <?php if($rec_job['qamount2'] ==">6<12 Months") echo " selected=\"selected\"";?> > >6<12 Months</option>
    <option <?php if($rec_job['qamount2'] ==">12 Months") echo " selected=\"selected\"";?> > >12 Months</option>
  </select></td>
  <td align="center" valign="top"><select name="ramount2" id="ramount2" class="select-box-new">
    <option>Select</option>
    <option <?php if($rec_job['ramount2'] =="< 6 Months") echo " selected=\"selected\"";?> > < 6 Months</option>
    <option <?php if($rec_job['ramount2'] ==">6<12 Months") echo " selected=\"selected\"";?> > >6<12 Months</option>
    <option <?php if($rec_job['ramount2'] ==">12 Months") echo " selected=\"selected\"";?> > >12 Months</option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="xamount2" id="xamount2" class="select-box-new">
    <option>Select</option>
    <option <?php if($rec_job['xamount2'] =="< 6 Months") echo " selected=\"selected\"";?> > < 6 Months </option>
    <option <?php if($rec_job['xamount2'] ==">6<12 Months") echo " selected=\"selected\"";?> > >6<12 Months </option>
    <option <?php if($rec_job['xamount2'] ==">12 Months") echo " selected=\"selected\"";?> > >12 Months </option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="yamount2" id="yamount2" class="select-box-new">
    <option>Select</option>
	<option <?php if($rec_job['yamount2'] =="< 6 Months") echo " selected=\"selected\"";?>>< 6 Months</option>
    <option <?php if($rec_job['yamount2'] ==">6<12 Months") echo " selected=\"selected\"";?> >>6<12 Months</option>
    <option <?php if($rec_job['yamount2'] ==">12 Months") echo " selected=\"selected\"";?> >>12 Months</option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="zamount2" id="zamount2" class="select-box-new">
    <option>Select</option>
    <option <?php if($rec_job['zamount2'] =="< 6 Months") echo " selected=\"selected\"";?> > < 6 Months</option>
    <option <?php if($rec_job['zamount2'] =="6<12 Months") echo " selected=\"selected\"";?> > 6<12 Months</option>
    <option <?php if($rec_job['zamount2'] ==">12 Months") echo " selected=\"selected\"";?> > >12 Months</option>
  </select></td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Location of the Project - City</td>
<td align="center" valign="top"><input name="pamount3" type="text" value="<?php echo $rec_job['pamount3'];?>" id="pamount3" size="8" /></td>
<td align="center" valign="top"><input name="qamount3" type="text" value="<?php echo $rec_job['qamount3'];?>" id="qamount3" size="8" /></td>
<td align="center" valign="top"><input name="ramount3" type="text" value="<?php echo $rec_job['ramount3'];?>" id="ramount3" size="8" /></td>
<td align="center" valign="top" ><input name="xamount3" type="text" value="<?php echo $rec_job['xamount3'];?>" id="xamount3" size="8" /></td>
<td align="center" valign="top" ><input name="yamount3" type="text" value="<?php echo $rec_job['yamount3'];?>" id="yamount3" size="8" /></td>
<td align="center" valign="top"  ><input name="zamount3" type="text" value="<?php echo $rec_job['zamount3'];?>" id="zamount3" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Location of the Project - State</td>
  <td align="center" valign="top">
  
  <select name="pamount4" id="pamount4" class="select-box-new">
  
  
<?php if($rec_job['pamount4']!="")
			  {?>
			   <option><?php echo $rec_job['pamount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>
                                                 
                                                    <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
  <td align="center" valign="top"><select name="qamount4" id="qamount4" class="select-box-new">
  
<?php if($rec_job['qamount4']!="")
			  {?>
			   <option><?php echo $rec_job['qamount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>
                                                    <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
  <td align="center" valign="top"><select name="ramount4" id="ramount4" class="select-box-new">
<?php if($rec_job['ramount4']!="")
			  {?>
			   <option><?php echo $rec_job['ramount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>
                                                    <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="xamount4" id="xamount4" class="select-box-new">
<?php if($rec_job['xamount4']!="")
			  {?>
			   <option><?php echo $rec_job['xamount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>
                                                   <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="yamount4" id="yamount4" class="select-box-new">
  
<?php if($rec_job['yamount4']!="")
			  {?>
			   <option><?php echo $rec_job['yamount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>
                                                   <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><select name="zamount4" id="zamount4" class="select-box-new">
   
<?php if($rec_job['zamount4']!="")
			  {?>
			   <option><?php echo $rec_job['zamount4'];?></option>
			   <?php } else { ?>

<option>Select</option><?php } ?>                      <option>Alabama </option>	
                                                    <option>Alaska</option> 	
                                                    <option>Arizona</option> 	
                                                    <option>Arkansas </option>	
                                                    <option>California</option> 	
                                                    <option>Colorado </option>	
                                                    <option>Connecticut </option>	
                                                    <option>Delaware </option>	
                                                    <option>District of Columbia</option> 	
                                                    <option>Florida</option>	
                                                    <option>Georgia</option>	
                                                    <option>Hawaii</option>	
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>	
                                                    <option>Indiana</option>	
                                                    <option>Iowa</option>	
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>	
                                                    <option>Louisiana</option>	
                                                    <option>Maine</option>
                                                    <option>Maryland</option>	
                                                    <option>Massachusetts</option>	
                                                    <option>Michigan</option> 	
                                                    <option>Minnesota</option>  	
                                                    <option>Mississippi</option>  	
                                                    <option>Missouri</option>  	
                                                    <option>Montana</option>  	
                                                    <option>Nebraska</option>  	
                                                    <option>Nevada</option>  	
                                                    <option>New Hampshire </option> 	
                                                    <option>New Jersey</option>  	
                                                    <option>New Mexico</option>  	
                                                    <option>New York</option>  	
                                                    <option>North Carolina</option> 	
                                                    <option>North Dakota</option>  	
                                                    <option>Ohio</option>  	  	
                                                    <option>Oklahoma</option>  	
                                                    <option>Oregon</option>  	
                                                    <option>Pennsylvania</option>  	
                                                    <option>Rhode Island</option> 	
                                                    <option>South Carolina</option>  	
                                                    <option>South Dakota</option>  	
                                                    <option>Tennessee </option> 	
                                                    <option>Texas</option>  	
                                                    <option>Utah </option> 	
                                                    <option>Vermont</option>  	
                                                    <option>Virginia</option> 	
                                                    <option>Washington</option> 	
                                                    <option>West Virginia</option> 	
                                                    <option>Wisconsin</option> 	
                                                    <option>Wyoming</option>
                                  	 			<option>Foreign</option>
  </select></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Project Name / Client name</td>
  <td align="center" valign="top"><input name="pamount5" type="text" value="<?php echo $rec_job['pamount5'];?>" id="pamount5" size="8" /></td>
  <td align="center" valign="top"><input name="qamount5" type="text" value="<?php echo $rec_job['qamount5'];?>" id="qamount5" size="8" /></td>
  <td align="center" valign="top"><input name="ramount5" type="text" value="<?php echo $rec_job['ramount5'];?>" id="ramount5" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount5" type="text" value="<?php echo $rec_job['xamount5'];?>" id="xamount5" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount5" type="text" value="<?php echo $rec_job['yamount5'];?>" id="yamount5" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount5" type="text" value="<?php echo $rec_job['zamount5'];?>" id="zamount5" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Project Start Date</td>
    <td align="center" valign="top"><input name="pamount6" class="datepicker" onchange="pamount_change();" onkeyup="acceptnumspecial(this,'pamount6')" type="text" value="<?php echo $rec_job['pamount6'];?>" id="pamount6" size="8" /></td>
    <td align="center" valign="top"><input name="qamount6" class="datepicker" onchange="qamount_change();" onkeyup="acceptnumspecial(this,'qamount6')" type="text" value="<?php echo $rec_job['qamount6'];?>" id="qamount6" size="8" /></td>
    <td align="center" valign="top"><input name="ramount6" class="datepicker" onchange="ramount_change();" onkeyup="acceptnumspecial(this,'ramount6')" type="text" value="<?php echo $rec_job['ramount6'];?>" id="ramount6" size="8" /></td>
    <td align="center" valign="top" ><input name="xamount6" class="datepicker" onchange="xamount_change();" onkeyup="acceptnumspecial(this,'xamount6')"  type="text" value="<?php echo $rec_job['xamount6'];?>" id="xamount6" size="8" /></td>
    <td align="center" valign="top" ><input name="yamount6" class="datepicker" onchange="yamount_change();" onkeyup="acceptnumspecial(this,'yamount6')" type="text" value="<?php echo $rec_job['yamount6'];?>" id="yamount6" size="8" /></td>
    <td align="center" valign="top"  ><input name="zamount6" class="datepicker" onchange="zamount_change();" onkeyup="acceptnumspecial(this,'zamount6')" type="text" value="<?php echo $rec_job['zamount6'];?>" id="zamount6" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Project End Date</td>
  <td align="center" valign="top"><input name="pamount7" class="datepicker" onchange="pamount_change();" onkeyup="acceptnumspecial(this,'pamount7')"  type="text" value="<?php echo $rec_job['pamount7'];?>" id="pamount7" size="8" /></td>
  <td align="center" valign="top"><input name="qamount7" class="datepicker"  onchange="qamount_change();" onkeyup="acceptnumspecial(this,'qamount7')" type="text" value="<?php echo $rec_job['qamount7'];?>" id="qamount7" size="8" /></td>
  <td align="center" valign="top"><input name="ramount7" class="datepicker" onchange="ramount_change();" onkeyup="acceptnumspecial(this,'ramount7')"  type="text" value="<?php echo $rec_job['ramount7'];?>" id="ramount7" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount7" class="datepicker" onchange="xamount_change();" onkeyup="acceptnumspecial(this,'xamount7')"  type="text" value="<?php echo $rec_job['xamount7'];?>" id="xamount7" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount7" class="datepicker" onchange="yamount_change();" onkeyup="acceptnumspecial(this,'yamount7')"  type="text" value="<?php echo $rec_job['yamount7'];?>" id="yamount7" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount7" class="datepicker"  onchange="zamount_change();" onkeyup="acceptnumspecial(this,'zamount7')" type="text" value="<?php echo $rec_job['zamount7'];?>" id="zamount7" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Number of Months</td>
  <td align="center" valign="top"><input name="pmonths" type="text" value="<?php echo $rec_job['pmonths'];?>" onkeyup="acceptnumspecial(this,'pmonths')" id="pmonths" size="8" /></td>
  <td align="center" valign="top"><input name="qmonths" type="text" value="<?php echo $rec_job['qmonths'];?>" id="qmonths" size="8" /></td>
  <td align="center" valign="top"><input name="rmonths" type="text" value="<?php echo $rec_job['rmonths'];?>" id="rmonths" size="8" /></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><input name="xmonths" type="text" value="<?php echo $rec_job['xmonths'];?>" id="xmonths" size="8" /></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><input name="ymonths" type="text" value="<?php echo $rec_job['ymonths'];?>" id="ymonths" size="8" /></td>
  <td align="center" valign="top" bgcolor="#FFFFFF" ><input name="zmonths" type="text" value="<?php echo $rec_job['zmonths'];?>" id="zmonths" size="8" /></td>
  </tr>
</tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="30%" align="center" valign="middle" class="tbl-area-tabs"><h5><strong> EXPENSES &quot;PAID&quot; DURING THE PROJECT PERIOD</strong></h5></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 1</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 2</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 3</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 4</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 5</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 6</strong></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Apartment Rent</td>
  <td align="center" valign="top"><input name="pamount8" type="text" value="<?php echo $rec_job['pamount8'];?>" id="pamount8"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount8" type="text" value="<?php echo $rec_job['qamount8'];?>" id="qamount8" size="8" /></td>
  <td align="center" valign="top"><input name="ramount8" type="text" value="<?php echo $rec_job['ramount8'];?>" id="ramount8" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount8" type="text" value="<?php echo $rec_job['xamount8'];?>" id="xamount8" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount8" type="text" value="<?php echo $rec_job['yamount8'];?>" id="yamount8" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount8" type="text" value="<?php echo $rec_job['zamount8'];?>" id="zamount8" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Supplies</td>
  <td align="center" valign="top"><input name="pamount9" type="text"  value="<?php echo $rec_job['pamount9'];?>" id="pamount9" size="8" /></td>
  <td align="center" valign="top"><input name="qamount9" type="text"  value="<?php echo $rec_job['qamount9'];?>" id="qamount9" size="8" /></td>
  <td align="center" valign="top"><input name="ramount9" type="text"  value="<?php echo $rec_job['ramount9'];?>" id="ramount9" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount9" type="text"  value="<?php echo $rec_job['xamount9'];?>" id="xamount9" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount9" type="text"  value="<?php echo $rec_job['yamount9'];?>" id="yamount9" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount9" type="text"  value="<?php echo $rec_job['zamount9'];?>" id="zamount9" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Electricity</td>
  <td align="center" valign="top"><input name="pamount10" type="text"  value="<?php echo $rec_job['pamount10'];?>" id="pamount10" size="8" /></td>
  <td align="center" valign="top"><input name="qamount10" type="text"  value="<?php echo $rec_job['qamount10'];?>" id="qamount10" size="8" /></td>
  <td align="center" valign="top"><input name="ramount10" type="text"  value="<?php echo $rec_job['ramount10'];?>" id="ramount10" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount10" type="text"  value="<?php echo $rec_job['xamount10'];?>" id="xamount10" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount10" type="text"  value="<?php echo $rec_job['yamount10'];?>" id="yamount10" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount10" type="text"  value="<?php echo $rec_job['zamount10'];?>" id="zamount10" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Utilities: Water, Sewerage &amp; Trash expenses</td>
  <td align="center" valign="top"><input name="pamount11" type="text" value="<?php echo $rec_job['pamount11'];?>" id="pamount11" size="8" /></td>
  <td align="center" valign="top"><input name="qamount11" type="text" value="<?php echo $rec_job['qamount11'];?>" id="qamount11" size="8" /></td>
  <td align="center" valign="top"><input name="ramount11" type="text" value="<?php echo $rec_job['ramount11'];?>" id="ramount11" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount11" type="text" value="<?php echo $rec_job['xamount11'];?>" id="xamount11" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount11" type="text" value="<?php echo $rec_job['yamount11'];?>"  id="yamount11" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount11" type="text" value="<?php echo $rec_job['zamount11'];?>" id="zamount11" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Cable TV</td>
  <td align="center" valign="top"><input name="pamount12" type="text" value="<?php echo $rec_job['pamount12'];?>" id="pamount12" size="8" /></td>
  <td align="center" valign="top"><input name="qamount12" type="text" value="<?php echo $rec_job['qamount12'];?>" id="qamount12" size="8" /></td>
  <td align="center" valign="top"><input name="ramount12" type="text" value="<?php echo $rec_job['ramount12'];?>" id="ramount12" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount12" type="text" value="<?php echo $rec_job['xamount12'];?>" id="xamount12" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount12" type="text" value="<?php echo $rec_job['yamount12'];?>" id="yamount12" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount12" type="text" value="<?php echo $rec_job['zamount12'];?>" id="zamount12" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Landline - Phone (Business/official part only)</td>
  <td align="center" valign="top"><input name="pamount13" type="text" value="<?php echo $rec_job['pamount13'];?>" id="pamount13" size="8" /></td>
  <td align="center" valign="top"><input name="qamount13" type="text" value="<?php echo $rec_job['qamount13'];?>" id="qamount13" size="8" /></td>
  <td align="center" valign="top"><input name="ramount13" type="text" value="<?php echo $rec_job['ramount13'];?>" id="ramount13" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount13" type="text" value="<?php echo $rec_job['xamount13'];?>" id="xamount13" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount13" type="text" value="<?php echo $rec_job['yamount13'];?>" id="yamount13" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount13" type="text" value="<?php echo $rec_job['zamount13'];?>" id="zamount13" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Internet</td>
  <td align="center" valign="top"><input name="pamount14" type="text" value="<?php echo $rec_job['pamount14'];?>" id="pamount14" size="8" /></td>
  <td align="center" valign="top"><input name="qamount14" type="text" value="<?php echo $rec_job['qamount14'];?>" id="qamount14" size="8" /></td>
  <td align="center" valign="top"><input name="ramount14" type="text" value="<?php echo $rec_job['ramount14'];?>" id="ramount14" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount14" type="text" value="<?php echo $rec_job['xamount14'];?>" id="xamount14" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount14" type="text" value="<?php echo $rec_job['yamount14'];?>" id="yamount14" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount14" type="text" value="<?php echo $rec_job['zamount14'];?>" id="zamount14" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Heating expenses</td>
  <td align="center" valign="top"><input name="pamount15" type="text" value="<?php echo $rec_job['pamount15'];?>"  id="pamount15" size="8" /></td>
  <td align="center" valign="top"><input name="qamount15" type="text" value="<?php echo $rec_job['qamount15'];?>" id="qamount15" size="8" /></td>
  <td align="center" valign="top"><input name="ramount15" type="text" value="<?php echo $rec_job['ramount15'];?>" id="ramount15" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount15" type="text" value="<?php echo $rec_job['xamount15'];?>" id="xamount15" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount15" type="text" value="<?php echo $rec_job['yamount15'];?>" id="yamount15" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount15" type="text" value="<?php echo $rec_job['zamount15'];?>" id="zamount15" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Laundry expenses</td>
  <td align="center" valign="top"><input name="pamount16" type="text" value="<?php echo $rec_job['pamount16'];?>" id="pamount16" size="8" /></td>
  <td align="center" valign="top"><input name="qamount16" type="text" value="<?php echo $rec_job['qamount16'];?>" id="qamount16" size="8" /></td>
  <td align="center" valign="top"><input name="ramount16" type="text" value="<?php echo $rec_job['ramount16'];?>" id="ramount16" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount16" type="text" value="<?php echo $rec_job['xamount16'];?>" id="xamount16" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount16" type="text" value="<?php echo $rec_job['yamount16'];?>" id="yamount16" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount16" type="text" value="<?php echo $rec_job['zamount16'];?>" id="zamount16" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Housekeeping</td>
  <td align="center" valign="top"><input name="pamount17" type="text" value="<?php echo $rec_job['pamount17'];?>" id="pamount17" size="8" /></td>
  <td align="center" valign="top"><input name="qamount17" type="text" value="<?php echo $rec_job['qamount17'];?>" id="qamount17" size="8" /></td>
  <td align="center" valign="top"><input name="ramount17" type="text" value="<?php echo $rec_job['ramount17'];?>" id="ramount17" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount17" type="text" value="<?php echo $rec_job['xamount17'];?>" id="xamount17" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount17" type="text" value="<?php echo $rec_job['yamount17'];?>" id="yamount17" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount17" type="text" value="<?php echo $rec_job['zamount17'];?>" id="zamount17" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Pest Control</td>
  <td align="center" valign="top"><input name="pamount18" type="text" value="<?php echo $rec_job['pamount18'];?>" id="pamount18" size="8" /></td>
  <td align="center" valign="top"><input name="qamount18" type="text" value="<?php echo $rec_job['qamount18'];?>" id="qamount18" size="8" /></td>
  <td align="center" valign="top"><input name="ramount18" type="text" value="<?php echo $rec_job['ramount18'];?>" id="ramount18" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount18" type="text" value="<?php echo $rec_job['xamount18'];?>" id="xamount18" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount18" type="text" value="<?php echo $rec_job['yamount18'];?>" id="yamount18" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount18" type="text" value="<?php echo $rec_job['zamount18'];?>" id="zamount18" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Home Owners insurance</td>
  <td align="center" valign="top"><input name="pamount19" type="text" value="<?php echo $rec_job['pamount19'];?>" id="pamount19" size="8" /></td>
  <td align="center" valign="top"><input name="qamount19" type="text" value="<?php echo $rec_job['qamount19'];?>"  id="qamount19" size="8" /></td>
  <td align="center" valign="top"><input name="ramount19" type="text" value="<?php echo $rec_job['ramount19'];?>" id="ramount19" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount19" type="text" value="<?php echo $rec_job['xamount19'];?>" id="xamount19" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount19" type="text" value="<?php echo $rec_job['yamount19'];?>" id="yamount19" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount19" type="text" value="<?php echo $rec_job['zamount19'];?>" id="zamount19" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Renters Insurance</td>
  <td align="center" valign="top"><input name="pamount20" type="text" value="<?php echo $rec_job['pamount20'];?>" id="pamount20" size="8" /></td>
  <td align="center" valign="top"><input name="qamount20" type="text" value="<?php echo $rec_job['qamount20'];?>" id="qamount20" size="8" /></td>
  <td align="center" valign="top"><input name="ramount20" type="text" value="<?php echo $rec_job['ramount20'];?>" id="ramount20" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount20" type="text" value="<?php echo $rec_job['xamount20'];?>" id="xamount20" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount20" type="text" value="<?php echo $rec_job['yamount20'];?>" id="yamount20" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount20" type="text" value="<?php echo $rec_job['zamount20'];?>" id="zamount20" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Property Insurance</td>
  <td align="center" valign="top"><input name="pamount21" type="text" value="<?php echo $rec_job['pamount21'];?>" id="pamount21" size="8" /></td>
  <td align="center" valign="top"><input name="qamount21" type="text" value="<?php echo $rec_job['qamount21'];?>" id="qamount21" size="8" /></td>
  <td align="center" valign="top"><input name="ramount21" type="text" value="<?php echo $rec_job['ramount21'];?>" id="ramount21" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount21" type="text" value="<?php echo $rec_job['xamount21'];?>" id="xamount21" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount21" type="text" value="<?php echo $rec_job['yamount21'];?>" id="yamount21" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount21" type="text" value="<?php echo $rec_job['zamount21'];?>" id="zamount21" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Repairs &amp; Maintenance</td>
  <td align="center" valign="top"><input name="pamount22" type="text" value="<?php echo $rec_job['pamount22'];?>"  id="pamount22" size="8" /></td>
  <td align="center" valign="top"><input name="qamount22" type="text" value="<?php echo $rec_job['qamount22'];?>" id="qamount22" size="8" /></td>
  <td align="center" valign="top"><input name="ramount22" type="text" value="<?php echo $rec_job['ramount22'];?>" id="ramount22" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount22" type="text" value="<?php echo $rec_job['xamount22'];?>" id="xamount22" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount22" type="text" value="<?php echo $rec_job['yamount22'];?>" id="yamount22" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount22" type="text" value="<?php echo $rec_job['zamount22'];?>" id="zamount22" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Parking fees</td>
  <td align="center" valign="top"><input name="pamount23" type="text" value="<?php echo $rec_job['pamount23'];?>" id="pamount23" size="8" /></td>
  <td align="center" valign="top"><input name="qamount23" type="text" value="<?php echo $rec_job['qamount23'];?>" id="qamount23" size="8" /></td>
  <td align="center" valign="top"><input name="ramount23" type="text" value="<?php echo $rec_job['ramount23'];?>" id="ramount23" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount23" type="text" value="<?php echo $rec_job['xamount23'];?>" id="xamount23" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount23" type="text" value="<?php echo $rec_job['yamount23'];?>" id="yamount23" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount23" type="text" value="<?php echo $rec_job['zamount23'];?>" id="zamount23" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Tolls</td>
  <td align="center" valign="top"><input name="pamount24" type="text" value="<?php echo $rec_job['pamount24'];?>" id="pamount24" size="8" /></td>
  <td align="center" valign="top"><input name="qamount24" type="text" value="<?php echo $rec_job['qamount24'];?>" id="qamount24" size="8" /></td>
  <td align="center" valign="top"><input name="ramount24" type="text" value="<?php echo $rec_job['ramount24'];?>" id="ramount24" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount24" type="text" value="<?php echo $rec_job['xamount24'];?>" id="xamount24" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount24" type="text" value="<?php echo $rec_job['yamount24'];?>" id="yamount24" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount24" type="text" value="<?php echo $rec_job['zamount24'];?>" id="zamount24" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Commuting expenses - Taxi expenses</td>
  <td align="center" valign="top"><input name="pamount25" type="text" value="<?php echo $rec_job['pamount25'];?>" id="pamount25" size="8" /></td>
  <td align="center" valign="top"><input name="qamount25" type="text" value="<?php echo $rec_job['qamount25'];?>" id="qamount25" size="8" /></td>
  <td align="center" valign="top"><input name="ramount25" type="text" value="<?php echo $rec_job['ramount25'];?>" id="ramount25" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount25" type="text" value="<?php echo $rec_job['xamount25'];?>" id="xamount25" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount25" type="text" value="<?php echo $rec_job['yamount25'];?>" id="yamount25" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount25" type="text" value="<?php echo $rec_job['zamount25'];?>" id="zamount25" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Cell phone (Business/official part only)</td>
  <td align="center" valign="top"><input name="pamount26" type="text" value="<?php echo $rec_job['pamount26'];?>" id="pamount26" size="8" /></td>
  <td align="center" valign="top"><input name="qamount26" type="text" value="<?php echo $rec_job['qamount26'];?>" id="qamount26" size="8" /></td>
  <td align="center" valign="top"><input name="ramount26" type="text" value="<?php echo $rec_job['ramount26'];?>" id="ramount26" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount26" type="text" value="<?php echo $rec_job['xamount26'];?>" id="xamount26" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount26" type="text" value="<?php echo $rec_job['yamount26'];?>" id="yamount26" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount26" type="text" value="<?php echo $rec_job['zamount26'];?>" id="zamount26" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top">Meals and Incidentals</td>
  <td align="center" valign="top"><input name="pamount27" type="text" value="<?php echo $rec_job['pamount27'];?>" id="pamount27" size="8" /></td>
  <td align="center" valign="top"><input name="qamount27" type="text" value="<?php echo $rec_job['qamount27'];?>" id="qamount27" size="8" /></td>
  <td align="center" valign="top"><input name="ramount27" type="text" value="<?php echo $rec_job['ramount27'];?>" id="ramount27" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount27" type="text" value="<?php echo $rec_job['xamount27'];?>" id="xamount27" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount27" type="text" value="<?php echo $rec_job['yamount27'];?>" id="yamount27" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount27" type="text" value="<?php echo $rec_job['zamount27'];?>" id="zamount27" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">Others, if any (describe)</td>
   <td align="center" valign="top"><input name="pamount28" type="text" value="<?php echo $rec_job['pamount28'];?>" id="pamount28" size="8" /></td>
  <td align="center" valign="top"><input name="qamount28" type="text" value="<?php echo $rec_job['qamount28'];?>" id="qamount28" size="8" /></td>
  <td align="center" valign="top"><input name="ramount28" type="text" value="<?php echo $rec_job['ramount28'];?>" id="ramount28" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount28" type="text" value="<?php echo $rec_job['xamount28'];?>" id="xamount28" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount28" type="text" value="<?php echo $rec_job['yamount28'];?>" id="yamount28" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount28" type="text" value="<?php echo $rec_job['zamount28'];?>" id="zamount28" size="8" /></td>
</tr>
<tr bgcolor="#FFFFFF">
   <td align="left" valign="top">AMOUNT REIMBURSED BY EMPLOYER AGAINST ABOVE EXPENSES</td>
  <td align="center" valign="top"><input name="pamount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="pamount29" size="8" /></td>
  <td align="center" valign="top"><input name="qamount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="qamount29" size="8" /></td>
  <td align="center" valign="top"><input name="ramount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="ramount29" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="xamount29" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="yamount29" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount29" type="text" value="<?php echo $rec_job['pamount29'];?>" id="zamount29" size="8" /></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="30%" align="center" valign="middle" class="tbl-area-tabs"><h5><strong> EXPENSES PAID FOR THE ENTIRE ASSIGNMENT</strong></h5></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 1</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 2</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 3</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 4</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 5</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 6</strong></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Air Fare to visit to permanent home (e.g. to India)</td>
  <td align="center" valign="top"><input name="pamount30" type="text" value="<?php echo $rec_job['pamount30'];?>"  id="pamount30" size="8" /></td>
  <td align="center" valign="top"><input name="qamount30" type="text" value="<?php echo $rec_job['qamount30'];?>" id="qamount" size="8" /></td>
  <td align="center" valign="top"><input name="ramount30" type="text" value="<?php echo $rec_job['ramount30'];?>" id="ramount30" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount30" type="text" value="<?php echo $rec_job['xamount30'];?>" id="xamount30" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount30" type="text" value="<?php echo $rec_job['yamount30'];?>" id="yamount30" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount30" type="text" value="<?php echo $rec_job['zamount30'];?>" id="zamount30" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Moving Expenses (If distance from old office to new one is &gt; 50 Miles)</td>
   <td align="center" valign="top"><input name="pamount31" type="text" value="<?php echo $rec_job['pamount31'];?>"  id="pamount31" size="8" /></td>
  <td align="center" valign="top"><input name="qamount31" type="text" value="<?php echo $rec_job['qamount31'];?>"  id="qamount31" size="8" /></td>
  <td align="center" valign="top"><input name="ramount31" type="text" value="<?php echo $rec_job['ramount31'];?>"  id="ramount31" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount31" type="text" value="<?php echo $rec_job['xamount31'];?>"  id="xamount31" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount31" type="text" value="<?php echo $rec_job['yamount31'];?>"   id="yamount31" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount31" type="text" value="<?php echo $rec_job['zamount31'];?>"  id="zamount31" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Books purchased</td>
   <td align="center" valign="top"><input name="pamount32" type="text" value="<?php echo $rec_job['pamount32'];?>" id="pamount32" size="8" /></td>
  <td align="center" valign="top"><input name="qamount32" type="text" value="<?php echo $rec_job['qamount32'];?>"  id="qamount32" size="8" /></td>
  <td align="center" valign="top"><input name="ramount32" type="text" value="<?php echo $rec_job['ramount32'];?>"  id="ramount32" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount32" type="text" value="<?php echo $rec_job['xamount32'];?>"  id="xamount32" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount32" type="text" value="<?php echo $rec_job['yamount32'];?>"  id="yamount32" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount32" type="text" value="<?php echo $rec_job['zamount32'];?>"  id="zamount32" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Briefcase, bags etc purchased for work</td>
  <td align="center" valign="top"><input name="pamount33" type="text" value="<?php echo $rec_job['pamount33'];?>"  id="pamount33" size="8" /></td>
  <td align="center" valign="top"><input name="qamount33" type="text" value="<?php echo $rec_job['qamount33'];?>"  id="qamount33" size="8" /></td>
  <td align="center" valign="top"><input name="ramount33" type="text" value="<?php echo $rec_job['ramount33'];?>"  id="ramount33" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount33" type="text" value="<?php echo $rec_job['xamount33'];?>"  id="xamount33" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount33" type="text" value="<?php echo $rec_job['yamount33'];?>"  id="yamount33" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount33" type="text" value="<?php echo $rec_job['zamount33'];?>"  id="zamount33" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Client Gifts (Must be incurred in the course of work, up to $25 per recipient)</td>
   <td align="center" valign="top"><input name="pamount34" type="text" id="pamount34" value="<?php echo $rec_job['pamount34'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount34" type="text" id="qamount34" value="<?php echo $rec_job['qamount34'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount34" type="text" id="ramount34" value="<?php echo $rec_job['ramount34'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount34" type="text" id="xamount34" value="<?php echo $rec_job['xamount34'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount34" type="text" id="yamount34" value="<?php echo $rec_job['yamount34'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount34" type="text" id="zamount34" value="<?php echo $rec_job['zamount34'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Damages paid to former employer for breach of employment contract</td>
  <td align="center" valign="top"><input name="pamount35" type="text" id="pamount35" value="<?php echo $rec_job['pamount35'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount35" type="text" id="qamount35" value="<?php echo $rec_job['qamount35'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount35" type="text" id="ramount35" value="<?php echo $rec_job['ramount35'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount35" type="text" id="xamount35" value="<?php echo $rec_job['xamount35'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount35" type="text" id="yamount35" value="<?php echo $rec_job['yamount35'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount35" type="text" id="zamount35" value="<?php echo $rec_job['zamount35'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Education expenses that improves or maintains your skills</td>
  <td align="center" valign="top"><input name="pamount36" type="text" id="pamount36" value="<?php echo $rec_job['pamount36'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount36" type="text" id="qamount36" value="<?php echo $rec_job['qamount36'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount36" type="text" id="ramount36" value="<?php echo $rec_job['ramount36'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount36" type="text" id="xamount36" value="<?php echo $rec_job['xamount36'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount36" type="text" id="yamount36" value="<?php echo $rec_job['yamount36'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount36" type="text" id="zamount36" value="<?php echo $rec_job['zamount36'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Employees contribution to State disability funds</td>
  <td align="center" valign="top"><input name="pamount37" type="text" id="pamount37" value="<?php echo $rec_job['pamount37'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount37" type="text" id="qamount37" value="<?php echo $rec_job['qamount37'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount37" type="text" id="ramount37" value="<?php echo $rec_job['ramount37'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount37" type="text" id="xamount37" value="<?php echo $rec_job['xamount37'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount37" type="text" id="yamount37" value="<?php echo $rec_job['yamount37'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount37" type="text" id="zamount37" value="<?php echo $rec_job['zamount37'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Fax charges incurred for work</td>
  <td align="center" valign="top"><input name="pamount38" type="text" id="pamount38" value="<?php echo $rec_job['pamount38'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount38" type="text" id="qamount38" value="<?php echo $rec_job['qamount38'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount38" type="text" id="ramount38" value="<?php echo $rec_job['ramount38'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount38" type="text" id="xamount38" value="<?php echo $rec_job['xamount38'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount38" type="text" id="yamount38" value="<?php echo $rec_job['yamount38'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount38" type="text" id="zamount38" value="<?php echo $rec_job['zamount38'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Job Hunting / employment agency expenses/Resume preparation</td>
  <td align="center" valign="top"><input name="pamount39" type="text" id="pamount39" value="<?php echo $rec_job['pamount39'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount39" type="text" id="qamount39" value="<?php echo $rec_job['qamount39'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount39" type="text" id="ramount39" value="<?php echo $rec_job['ramount39'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount39" type="text" id="xamount39" value="<?php echo $rec_job['xamount39'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount39" type="text" id="yamount39" value="<?php echo $rec_job['yamount39'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount39" type="text" id="zamount39" value="<?php echo $rec_job['zamount39'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Job related Training</td>
   <td align="center" valign="top"><input name="pamount40" type="text" id="pamount40" value="<?php echo $rec_job['pamount40'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount40" type="text" id="qamount40" value="<?php echo $rec_job['qamount40'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="ramount40" type="text" id="ramount40" value="<?php echo $rec_job['ramount40'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount40" type="text" id="xamount40" value="<?php echo $rec_job['xamount40'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount40" type="text" id="yamount40" value="<?php echo $rec_job['yamount40'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount40" type="text" id="zamount40" value="<?php echo $rec_job['zamount40'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Lease breakage due to Project cancelation</td>
   <td align="center" valign="top"><input name="pamount41" type="text" id="pamount41" value="<?php echo $rec_job['pamount41'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount41" type="text" id="qamount41" value="<?php echo $rec_job['qamount41'];?>"   size="8" /></td>
  <td align="center" valign="top"><input name="ramount41" type="text" id="ramount41" value="<?php echo $rec_job['ramount41'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount41" type="text" id="xamount41" value="<?php echo $rec_job['xamount41'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="yamount41" type="text" id="yamount41" value="<?php echo $rec_job['yamount41'];?>"  size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount41" type="text" id="zamount41" value="<?php echo $rec_job['zamount41'];?>"  size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Legal fees for Work permit/visa processing</td>
  <td align="center" valign="top"><input name="pamount42" type="text" id="pamount42" value="<?php echo $rec_job['pamount42'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount42" type="text" id="qamount42" value="<?php echo $rec_job['qamount42'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount42" type="text" id="ramount42" value="<?php echo $rec_job['ramount42'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount42" type="text" id="xamount42" value="<?php echo $rec_job['xamount42'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount42" type="text" id="yamount42" value="<?php echo $rec_job['yamount42'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount42" type="text" id="zamount42" value="<?php echo $rec_job['zamount42'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Legal fees to protect employment/contract negotiations &amp; Preparation</td>
  <td align="center" valign="top"><input name="pamount43" type="text" id="pamount43" value="<?php echo $rec_job['pamount43'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount43" type="text" id="qamount43" value="<?php echo $rec_job['qamount43'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount43" type="text" id="ramount43" value="<?php echo $rec_job['ramount43'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount43" type="text" id="xamount43" value="<?php echo $rec_job['xamount43'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount43" type="text" id="yamount43" value="<?php echo $rec_job['yamount43'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount43" type="text" id="zamount43" value="<?php echo $rec_job['zamount43'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Lodging for Initial 7 days</td>
  <td align="center" valign="top"><input name="pamount44" type="text" id="pamount44" value="<?php echo $rec_job['pamount44'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount44" type="text" id="qamount44" value="<?php echo $rec_job['qamount44'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount44" type="text" id="ramount44" value="<?php echo $rec_job['ramount44'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount44" type="text" id="xamount44" value="<?php echo $rec_job['xamount44'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount44" type="text" id="yamount44" value="<?php echo $rec_job['yamount44'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount44" type="text" id="zamount44" value="<?php echo $rec_job['zamount44'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Malpractice insurance </td>
  <td align="center" valign="top"><input name="pamount45" type="text" id="pamount45" value="<?php echo $rec_job['pamount45'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount45" type="text" id="qamount45" value="<?php echo $rec_job['qamount45'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount45" type="text" id="ramount45" value="<?php echo $rec_job['ramount45'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount45" type="text" id="xamount45" value="<?php echo $rec_job['xamount45'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount45" type="text" id="yamount45" value="<?php echo $rec_job['yamount45'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount45" type="text" id="zamount45" value="<?php echo $rec_job['zamount45'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Passport fees for business travel</td>
   <td align="center" valign="top"><input name="pamount46" type="text" id="pamount46" value="<?php echo $rec_job['pamount46'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount46" type="text" id="qamount46" value="<?php echo $rec_job['qamount46'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount46" type="text" id="ramount46" value="<?php echo $rec_job['ramount46'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount46" type="text" id="xamount46" value="<?php echo $rec_job['xamount46'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount46" type="text" id="yamount46" value="<?php echo $rec_job['yamount46'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount46" type="text" id="zamount46" value="<?php echo $rec_job['zamount46'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Physical examinations reqd by the employer</td>
  <td align="center" valign="top"><input name="pamount47" type="text" id="pamount47" value="<?php echo $rec_job['pamount47'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount47" type="text" id="qamount47" value="<?php echo $rec_job['qamount47'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount47" type="text" id="ramount47" value="<?php echo $rec_job['ramount47'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount47" type="text" id="xamount47" value="<?php echo $rec_job['xamount47'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount47" type="text" id="yamount47" value="<?php echo $rec_job['yamount47'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount47" type="text" id="zamount47" value="<?php echo $rec_job['zamount47'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">PO box/Lock box opened for Office work</td>
  <td align="center" valign="top"><input name="pamount48" type="text" id="pamount48" value="<?php echo $rec_job['pamount48'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount48" type="text" id="qamount48" value="<?php echo $rec_job['qamount48'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount48" type="text" id="ramount48" value="<?php echo $rec_job['ramount48'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount48" type="text" id="xamount48" value="<?php echo $rec_job['xamount48'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount48" type="text" id="yamount48" value="<?php echo $rec_job['yamount48'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount48" type="text" id="zamount48" value="<?php echo $rec_job['zamount48'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Professional Membership</td>
  <td align="center" valign="top"><input name="pamount49" type="text" id="pamount49" value="<?php echo $rec_job['pamount49'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount49" type="text" id="qamount49" value="<?php echo $rec_job['qamount49'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount49" type="text" id="ramount49" value="<?php echo $rec_job['ramount49'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount49" type="text" id="xamount49" value="<?php echo $rec_job['xamount49'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount49" type="text" id="yamount49" value="<?php echo $rec_job['yamount49'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount49" type="text" id="zamount49" value="<?php echo $rec_job['zamount49'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Professional Upkeep</td>
  <td align="center" valign="top"><input name="pamount50" type="text" id="pamount50" value="<?php echo $rec_job['pamount50'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount50" type="text" id="qamount50" value="<?php echo $rec_job['qamount50'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount50" type="text" id="ramount50" value="<?php echo $rec_job['ramount50'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount50" type="text" id="xamount50" value="<?php echo $rec_job['xamount50'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount50" type="text" id="yamount50" value="<?php echo $rec_job['yamount50'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount50" type="text" id="zamount50" value="<?php echo $rec_job['zamount50'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Safety equipment, tools purchased for work</td>
  <td align="center" valign="top"><input name="pamount51" type="text" id="pamount51" value="<?php echo $rec_job['pamount51'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount51" type="text" id="qamount51" value="<?php echo $rec_job['qamount51'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount51" type="text" id="ramount51" value="<?php echo $rec_job['ramount51'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount51" type="text" id="xamount51" value="<?php echo $rec_job['xamount51'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount51" type="text" id="yamount51" value="<?php echo $rec_job['yamount51'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount51" type="text" id="zamount51" value="<?php echo $rec_job['zamount51'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Storage room expenses reqd to store official stuff</td>
  <td align="center" valign="top"><input name="pamount52" type="text" id="pamount52" value="<?php echo $rec_job['pamount52'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount52" type="text" id="qamount52" value="<?php echo $rec_job['qamount52'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount52" type="text" id="ramount52" value="<?php echo $rec_job['ramount52'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount52" type="text" id="xamount52" value="<?php echo $rec_job['xamount52'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount52" type="text" id="yamount52" value="<?php echo $rec_job['yamount52'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount52" type="text" id="zamount52" value="<?php echo $rec_job['zamount52'];?>" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Subscriptions to journals required for work / Technical periodicals</td>
   <td align="center" valign="top"><input name="pamount53" type="text" id="pamount53" value="<?php echo $rec_job['pamount53'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount53" type="text" id="qamount53" value="<?php echo $rec_job['qamount53'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount53" type="text" id="ramount53" value="<?php echo $rec_job['ramount53'];?>"  size="8" /></td>
  <td align="center" valign="top" ><input name="xamount53" type="text" id="xamount53" value="<?php echo $rec_job['xamount53'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount53" type="text" id="yamount53" value="<?php echo $rec_job['yamount53'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount53" type="text" id="zamount53" value="<?php echo $rec_job['zamount53'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Supplies used for Office work</td>
  <td align="center" valign="top"><input name="pamount54" type="text" id="pamount54" value="<?php echo $rec_job['pamount54'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount54" type="text" id="qamount54" value="<?php echo $rec_job['qamount54'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount54" type="text" id="ramount54" value="<?php echo $rec_job['ramount54'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount54" type="text" id="xamount54" value="<?php echo $rec_job['xamount54'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount54" type="text" id="yamount54" value="<?php echo $rec_job['yamount54'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount54" type="text" id="zamount54" value="<?php echo $rec_job['zamount54'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Technical periodicals</td>
   <td align="center" valign="top"><input name="pamount55" type="text" id="pamount55" value="<?php echo $rec_job['pamount55'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount55" type="text" id="qamount55" value="<?php echo $rec_job['qamount55'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount55" type="text" id="ramount55" value="<?php echo $rec_job['ramount55'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount55" type="text" id="xamount55" value="<?php echo $rec_job['xamount55'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount55" type="text" id="yamount55" value="<?php echo $rec_job['yamount55'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount55" type="text" id="zamount55" value="<?php echo $rec_job['zamount55'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Transportation cost to attend job interviews</td>
  <td align="center" valign="top"><input name="pamount56" type="text" id="pamount56" value="<?php echo $rec_job['pamount56'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount56" type="text" id="qamount56" value="<?php echo $rec_job['qamount56'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount56" type="text" id="ramount56" value="<?php echo $rec_job['ramount56'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount56" type="text" id="xamount56" value="<?php echo $rec_job['xamount56'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount56" type="text" id="yamount56" value="<?php echo $rec_job['yamount56'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount56" type="text" id="zamount56" value="<?php echo $rec_job['zamount56'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Travel expense from your US home to client location</td>
  <td align="center" valign="top"><input name="pamount57" type="text" id="pamount57" value="<?php echo $rec_job['pamount57'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount57" type="text" id="qamount57" value="<?php echo $rec_job['qamount57'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount57" type="text" id="ramount57" value="<?php echo $rec_job['ramount57'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount57" type="text" id="xamount57" value="<?php echo $rec_job['xamount57'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount57" type="text" id="yamount57" value="<?php echo $rec_job['yamount57'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount57" type="text" id="zamount57" value="<?php echo $rec_job['zamount57'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Trip to Mexico/Canada/India for Work Permit/Visa stamping</td>
  <td align="center" valign="top"><input name="pamount58" type="text" id="pamount58" value="<?php echo $rec_job['pamount58'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount58" type="text" id="qamount58" value="<?php echo $rec_job['qamount58'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount58" type="text" id="ramount58" value="<?php echo $rec_job['ramount58'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount58" type="text" id="xamount58" value="<?php echo $rec_job['xamount58'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount58" type="text" id="yamount58" value="<?php echo $rec_job['yamount58'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount58" type="text" id="zamount58" value="<?php echo $rec_job['zamount58'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Uniform/work clothes required for work expenses</td>
  <td align="center" valign="top"><input name="pamount59" type="text" id="pamount59" value="<?php echo $rec_job['pamount59'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount59" type="text" id="qamount59" value="<?php echo $rec_job['qamount59'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount59" type="text" id="ramount59" value="<?php echo $rec_job['ramount59'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount59" type="text" id="xamount59" value="<?php echo $rec_job['xamount59'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount59" type="text" id="yamount59" value="<?php echo $rec_job['yamount59'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount59" type="text" id="zamount59" value="<?php echo $rec_job['zamount59'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Union/Business association/Professional societies Dues</td>
  <td align="center" valign="top"><input name="pamount60" type="text" id="pamount60" value="<?php echo $rec_job['pamount60'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount60" type="text" id="qamount60" value="<?php echo $rec_job['qamount60'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount60" type="text" id="ramount60" value="<?php echo $rec_job['ramount60'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount60" type="text" id="xamount60" value="<?php echo $rec_job['xamount60'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount60" type="text" id="yamount60" value="<?php echo $rec_job['yamount60'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount60" type="text" id="zamount60" value="<?php echo $rec_job['zamount60'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Others, if any (describe)</td>
  <td align="center" valign="top"><input name="pamount61" type="text" id="pamount61" value="<?php echo $rec_job['pamount61'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount61" type="text" id="qamount61" value="<?php echo $rec_job['qamount61'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount61" type="text" id="ramount61" value="<?php echo $rec_job['ramount61'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount61" type="text" id="xamount61" value="<?php echo $rec_job['xamount61'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount61" type="text" id="yamount61" value="<?php echo $rec_job['yamount61'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount61" type="text" id="zamount61" value="<?php echo $rec_job['zamount61'];?>" size="8" /></td>

    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="30%" align="center" valign="middle" class="tbl-area-tabs"><strong> COMMUTE EXPENSES (From Client location to Your Home)</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 1</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 2</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 3</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment4</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 5</strong></td>
      <td width="12%" align="center" valign="middle" class="tbl-area-tabs"><strong> Project/<br />
        Assignment 6</strong></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Daily commuting miles while on project/assignment</td>
  <td align="center" valign="top"><input name="pamount62" type="text" id="pamount62" value="<?php echo $rec_job['pamount62'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount62" type="text" id="qamount62" value="<?php echo $rec_job['qamount62'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount62" type="text" id="ramount62" value="<?php echo $rec_job['ramount62'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount62" type="text" id="xamount62" value="<?php echo $rec_job['xamount62'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount62" type="text" id="yamount62" value="<?php echo $rec_job['yamount62'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount62" type="text" id="zamount62" value="<?php echo $rec_job['zamount62'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Date own vehicle was first used</td>
  <td align="center" valign="top"><input name="pamount63" type="text" id="pamount63" value="<?php echo $rec_job['pamount63'];?>"  size="8" /></td>
  <td align="center" valign="top"><input name="qamount63" type="text" id="qamount63" value="<?php echo $rec_job['qamount63'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount63" type="text" id="ramount63" value="<?php echo $rec_job['ramount63'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount63" type="text" id="xamount63" value="<?php echo $rec_job['xamount63'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount63" type="text" id="yamount63" value="<?php echo $rec_job['yamount63'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount63" type="text" id="zamount63" value="<?php echo $rec_job['zamount63'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Total mileage on the car</td>
  <td align="center" valign="top"><input name="pamount64" type="text" id="pamount64" value="<?php echo $rec_job['pamount64'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="qamount64" type="text" id="qamount64" value="<?php echo $rec_job['qamount64'];?>" size="8" /></td>
  <td align="center" valign="top"><input name="ramount64" type="text" id="ramount64" value="<?php echo $rec_job['ramount64'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="xamount64" type="text" id="xamount64" value="<?php echo $rec_job['xamount64'];?>" size="8" /></td>
  <td align="center" valign="top" ><input name="yamount64" type="text" id="yamount64" value="<?php echo $rec_job['yamount64'];?>" size="8" /></td>
  <td align="center" valign="top"  ><input name="zamount64" type="text" id="zamount64" value="<?php echo $rec_job['zamount64'];?>" size="8" /></td>

    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="30%" align="center" valign="middle" class="tbl-area-tabs"><strong> PERSONAL ASSETS USED FOR WORK</strong></td>
  <td width="12%" align="center" valign="top"><input name="pamount65" type="text" id="pamount65" value="<?php echo $rec_job['pamount65'];?>"  size="8" /></td>
  <td width="12%" align="center" valign="top"><input name="qamount65" type="text" id="qamount65" value="<?php echo $rec_job['qamount65'];?>"  size="8" /></td>
  <td width="12%" align="center" valign="top"><input name="ramount65" type="text" id="ramount65" value="<?php echo $rec_job['ramount65'];?>" size="8" /></td>
  <td width="12%" align="center" valign="top" ><input name="xamount65" type="text" id="xamount65" value="<?php echo $rec_job['xamount65'];?>" size="8" /></td>
  <td width="12%" align="center" valign="top" ><input name="yamount65" type="text" id="yamount65" value="<?php echo $rec_job['yamount65'];?>" size="8" /></td>
  <td width="12%" align="center" valign="top"  ><input name="zamount65" type="text" id="zamount65" value="<?php echo $rec_job['zamount65'];?>" size="8" /></td>

    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Laptop</td>
       <td align="center" valign="top"><input name="pamount66" type="text" value="<?php echo $rec_job['pamount66'];?>"  id="pamount66" size="8" /></td>
      <td align="center" valign="top"><input name="qamount66" type="text" value="<?php echo $rec_job['qamount66'];?>" id="qamount66" size="8" /></td>
      <td align="center" valign="top"><select name="ramount66" id="ramount66"  class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['ramount66'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount66'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount66" type="text" value="<?php echo $rec_job['xamount66'];?>" id="xamount66" size="8" /></td>
      <td align="center" valign="top"><input name="yamount66" type="text" value="<?php echo $rec_job['yamount66'];?>"  id="yamount66" size="8" /></td>
      <td align="center" valign="top"><select name="zamount66" id="zamount66" class="select-box-new">
        <option>Select</option>
         <option <?php if($rec_job['zamount66'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount66'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Cell phone - Instrument cost</td>
       <td align="center" valign="top"><input name="pamount67" type="text" value="<?php echo $rec_job['pamount67'];?>"  id="pamount67" size="8" /></td>
      <td align="center" valign="top"><input name="qamount67" type="text" value="<?php echo $rec_job['qamount67'];?>"  id="qamount67" size="8" /></td>
      <td align="center" valign="top"><select name="ramount67" id="ramount67" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['ramount67'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount67'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount67" value="<?php echo $rec_job['xamount67'];?>"  type="text" id="xamount67" size="8" /></td>
      <td align="center" valign="top"><input name="yamount67" value="<?php echo $rec_job['yamount67'];?>"  type="text" id="yamount67" size="8" /></td>
      <td align="center" valign="top"><select name="zamount67" id="zamount67" class="select-box-new">
        <option>Select</option>
         <option <?php if($rec_job['zamount67'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount67'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Desktop computer</td>
      <td align="center" valign="top"><input name="pamount68" value="<?php echo $rec_job['pamount68'];?>"  type="text" id="pamount68" size="8" /></td>
      <td align="center" valign="top"><input name="qamount68" value="<?php echo $rec_job['qamount68'];?>"  type="text" id="qamount68" size="8" /></td>
      <td align="center" valign="top"><select name="ramount68"   id="ramount68" class="select-box-new">
        <option>Select</option>
           <option <?php if($rec_job['ramount68'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount68'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount68" value="<?php echo $rec_job['xamount68'];?>"  type="text" id="xamount68" size="8" /></td>
      <td align="center" valign="top"><input name="yamount68" value="<?php echo $rec_job['yamount68'];?>"  type="text" id="yamount68" size="8" /></td>
      <td align="center" valign="top"><select name="zamount68"  id="zamount68" class="select-box-new">
        <option>Select</option>
         <option <?php if($rec_job['zamount68'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount68'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Computer accessories</td>
      <td align="center" valign="top"><input name="pamount69" value="<?php echo $rec_job['pamount69'];?>"   type="text" id="pamount69" size="8" /></td>
      <td align="center" valign="top"><input name="qamount69" value="<?php echo $rec_job['qamount69'];?>"  type="text" id="qamount69" size="8" /></td>
      <td align="center" valign="top"><select name="ramount69"   id="ramount69" class="select-box-new"> 
        <option>Select</option>
         <option <?php if($rec_job['ramount69'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount69'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount69" value="<?php echo $rec_job['xamount69'];?>"  type="text" id="xamount69" size="8" /></td>
      <td align="center" valign="top"><input name="yamount69" value="<?php echo $rec_job['yamount69'];?>"  type="text" id="yamount69" size="8" /></td>
      <td align="center" valign="top"><select name="zamount69"  id="zamount69" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['zamount69'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount69'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Routers, Servers, Backup disks purchased for business</td>
      <td align="center" valign="top"><input name="pamount70" value="<?php echo $rec_job['pamount70'];?>"   type="text" id="pamount" size="8" /></td>
      <td align="center" valign="top"><input name="qamount70" value="<?php echo $rec_job['qamount70'];?>"  type="text" id="qamount" size="8" /></td>
      <td align="center" valign="top"><select name="ramount70" id="ramount" class="select-box-new">
        <option>Select</option>
             <option <?php if($rec_job['ramount70'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount70'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount70"value="<?php echo $rec_job['xamount70'];?>"   type="text" id="xamount70" size="8" /></td>
      <td align="center" valign="top"><input name="yamount70" value="<?php echo $rec_job['yamount70'];?>"  type="text" id="yamount70" size="8" /></td>
      <td align="center" valign="top"><select name="zamount70" id="zamount70" class="select-box-new">
        <option>Select</option>
             <option <?php if($rec_job['zamount70'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount70'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Computer furniture</td>
     <td align="center" valign="top"><input name="pamount71" value="<?php echo $rec_job['pamount71'];?>"  type="text" id="pamount71" size="8" /></td>
      <td align="center" valign="top"><input name="qamount71" value="<?php echo $rec_job['qamount71'];?>"  type="text" id="qamount71" size="8" /></td>
      <td align="center" valign="top"><select name="ramount71" id="ramount71" class="select-box-new">
        <option>Select</option>
          <option <?php if($rec_job['ramount71'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount71'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount71" value="<?php echo $rec_job['xamount71'];?>"  type="text" id="xamount71" size="8" /></td>
      <td align="center" valign="top"><input name="yamount71" value="<?php echo $rec_job['yamount71'];?>"  type="text" id="yamount71" size="8" /></td>
      <td align="center" valign="top"><select name="zamount71" id="zamount71" class="select-box-new">
        <option>Select</option>
          <option <?php if($rec_job['zamount71'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount71'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>    
      </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Printers</td>
      <td align="center" valign="top"><input name="pamount72" value="<?php echo $rec_job['pamount72'];?>"   type="text" id="pamount72" size="8" /></td>
      <td align="center" valign="top"><input name="qamount72" value="<?php echo $rec_job['qamount72'];?>"  type="text" id="qamount72" size="8" /></td>
      <td align="center" valign="top"><select name="ramount72"   id="ramount72" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['ramount72'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount72'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount72"  value="<?php echo $rec_job['xamount72'];?>"  type="text" id="xamount72" size="8" /></td>
      <td align="center" valign="top"><input name="yamount72" value="<?php echo $rec_job['yamount72'];?>"  type="text" id="yamount72" size="8" /></td>
      <td align="center" valign="top"><select name="zamount72" id="zamount72" class="select-box-new">
        <option>Select</option>
      <option <?php if($rec_job['zamount72'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount72'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Scanners</td>
      <td align="center" valign="top"><input name="pamount73" value="<?php echo $rec_job['pamount73'];?>"  type="text" id="pamount73" size="8" /></td>
      <td align="center" valign="top"><input name="qamount73" value="<?php echo $rec_job['qamount73'];?>"  type="text" id="qamount73" size="8" /></td>
      <td align="center" valign="top"><select name="ramount73"   id="ramount73" class="select-box-new">
        <option>Select</option>
         <option <?php if($rec_job['ramount73'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount73'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount73" value="<?php echo $rec_job['xamount73'];?>"  type="text" id="xamount73" size="8" /></td>
      <td align="center" valign="top"><input name="yamount73" value="<?php echo $rec_job['yamount73'];?>"  type="text" id="yamount73" size="8" /></td>
      <td align="center" valign="top"><select name="zamount73" id="zamount73" class="select-box-new">
        <option>Select</option>
      <option <?php if($rec_job['zamount73'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount73'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Software</td>
      <td align="center" valign="top"><input name="pamount74" value="<?php echo $rec_job['pamount74'];?>"   type="text" id="pamount74" size="8" /></td>
      <td align="center" valign="top"><input name="qamount74" value="<?php echo $rec_job['qamount74'];?>"  type="text" id="qamount74" size="8" /></td>
      <td align="center" valign="top"><select name="ramount74" id="ramount74" class="select-box-new">
        <option>Select</option>
         <option <?php if($rec_job['ramount74'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount74'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount74" value="<?php echo $rec_job['xamount74'];?>"  type="text" id="xamount74" size="8" /></td>
      <td align="center" valign="top"><input name="yamount74" value="<?php echo $rec_job['yamount74'];?>" type="text" id="yamount74" size="8" /></td>
      <td align="center" valign="top"><select name="zamount74" id="zamount74" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['zamount74'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount74'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Owned home used for business</td>
      <td align="center" valign="top"><input name="pamount75" type="text" value="<?php echo $rec_job['pamount75'];?>"  id="pamount75" size="8" /></td>
      <td align="center" valign="top"><input name="qamount75" type="text" value="<?php echo $rec_job['qamount75'];?>"  id="qamount75" size="8" /></td>
      <td align="center" valign="top"><select name="ramount75" id="ramount75" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['ramount75'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount75'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount75" value="<?php echo $rec_job['xamount75'];?>"  type="text" id="xamount75" size="8" /></td>
      <td align="center" valign="top"><input name="yamount75" value="<?php echo $rec_job['yamount75'];?>"  type="text" id="yamount75" size="8" /></td>
      <td align="center" valign="top"><select name="zamount75" id="zamount75" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['zamount75'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount75'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Home furniture used for business</td>
       <td align="center" valign="top"><input name="pamount76" value="<?php echo $rec_job['pamount76'];?>"  type="text" id="pamount76" size="8" /></td>
      <td align="center" valign="top"><input name="qamount76" value="<?php echo $rec_job['qamount76'];?>"  type="text" id="qamount76" size="8" /></td>
      <td align="center" valign="top"><select name="ramount76" id="ramount76" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['ramount76'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount76'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount76" value="<?php echo $rec_job['xamount76'];?>"  type="text" id="xamount76" size="8" /></td>
      <td align="center" valign="top"><input name="yamount76" value="<?php echo $rec_job['yamount76'];?>"  type="text" id="yamount76" size="8" /></td>
      <td align="center" valign="top"><select name="zamount76" id="zamount76" class="select-box-new">
        <option>Select</option>
      <option <?php if($rec_job['zamount76'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount76'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Other asset - Give field to write the detail</td>
      <td align="center" valign="top"><input name="pamount77" value="<?php echo $rec_job['pamount77'];?>"   type="text" id="pamount77" size="8" /></td>
      <td align="center" valign="top"><input name="qamount77" value="<?php echo $rec_job['qamount77'];?>"  type="text" id="qamount77" size="8" /></td>
      <td align="center" valign="top"><select name="ramount77" id="ramount77" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['ramount77'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['ramount77'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
      <td align="center" valign="top"><input name="xamount77" value="<?php echo $rec_job['xamount77'];?>"   type="text" id="xamount77" size="8" /></td>
      <td align="center" valign="top"><input name="yamount77" value="<?php echo $rec_job['yamount77'];?>"  type="text" id="yamount77" size="8" /></td>
      <td align="center" valign="top"><select name="zamount77" id="zamount77" class="select-box-new">
        <option>Select</option>
     <option <?php if($rec_job['zamount77'] =="<50%") echo " selected=\"selected\"";?> ><50%</option>
        <option <?php if($rec_job['zamount77'] ==">50%") echo " selected=\"selected\"";?> >>50%</option>
      </select></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="30%" align="center" valign="middle" class="tbl-area-tabs"><strong> CAR EXPENSES &quot;PAID&quot; DURING THE YEAR</strong></td>
      <td width="12%" align="center" valign="top"><input name="pamount78" type="text" value="<?php echo $rec_job['pamount78'];?>" id="pamount78" size="8" /></td>
      <td width="12%" align="center" valign="top"><input name="qamount78" type="text" value="<?php echo $rec_job['qamount78'];?>" id="qamount78" size="8" /></td>
      <td width="12%" align="center" valign="top"><input name="ramount78" type="text" value="<?php echo $rec_job['ramount78'];?>" id="ramount78" size="8" /></td>
      <td width="12%" align="center" valign="top" ><input name="xamount78" type="text" value="<?php echo $rec_job['xamount78'];?>" id="xamount78" size="8" /></td>
      <td width="12%" align="center" valign="top" ><input name="yamount78" type="text" value="<?php echo $rec_job['yamount78'];?>" id="yamount78" size="8" /></td>
      <td width="12%" align="center" valign="top"  ><input name="zamount78" type="text" value="<?php echo $rec_job['zamount78'];?>" d="zamount78" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Lease payments</td>
      <td align="center" valign="top"><input name="pamount79" type="text" value="<?php echo $rec_job['pamount79'];?>" id="pamount79" size="8" /></td>
      <td align="center" valign="top"><input name="qamount79" type="text" value="<?php echo $rec_job['qamount79'];?>" id="qamount79" size="8" /></td>
      <td align="center" valign="top"><input name="ramount79" type="text" value="<?php echo $rec_job['ramount79'];?>" id="ramount79" size="8" /></td>
      <td align="center" valign="top" ><input name="xamount79" type="text" value="<?php echo $rec_job['xamount79'];?>" id="xamount79" size="8" /></td>
      <td align="center" valign="top" ><input name="yamount79" type="text" value="<?php echo $rec_job['yamount79'];?>" id="yamount79" size="8" /></td>
      <td align="center" valign="top"  ><input name="zamount79" type="text" value="<?php echo $rec_job['zamount79'];?>" id="zamount79" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Car Insurance</td>
      <td align="center" valign="top"><input name="pamount80" type="text" value="<?php echo $rec_job['pamount80'];?>" id="pamount80" size="8" /></td>
      <td align="center" valign="top"><input name="qamount80" type="text" value="<?php echo $rec_job['qamount80'];?>" id="qamount80" size="8" /></td>
      <td align="center" valign="top"><input name="ramount80" type="text" value="<?php echo $rec_job['ramount80'];?>" id="ramount80" size="8" /></td>
      <td align="center" valign="top" ><input name="xamount80" type="text" value="<?php echo $rec_job['xamount80'];?>" id="xamoun80" size="8" /></td>
      <td align="center" valign="top" ><input name="yamount80" type="text" value="<?php echo $rec_job['yamount80'];?>" id="yamount80" size="8" /></td>
      <td align="center" valign="top"  ><input name="zamount80" type="text" value="<?php echo $rec_job['zamount80'];?>" id="zamount80" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Garage rent</td>
      <td align="center" valign="top"><input name="pamount81" type="text"  value="<?php echo $rec_job['pamount81'];?>" id="pamount81" size="8" /></td>
      <td align="center" valign="top"><input name="qamount81" type="text"  value="<?php echo $rec_job['qamount81'];?>" id="qamount81" size="8" /></td>
      <td align="center" valign="top"><input name="ramount81" type="text"  value="<?php echo $rec_job['ramount81'];?>" id="ramount81" size="8" /></td>
      <td align="center" valign="top" ><input name="xamount81" type="text"  value="<?php echo $rec_job['xamount81'];?>" id="xamount81" size="8" /></td>
      <td align="center" valign="top" ><input name="yamount81" type="text"  value="<?php echo $rec_job['yamount81'];?>" id="yamount81" size="8" /></td>
      <td align="center" valign="top"  ><input name="zamount81" type="text"  value="<?php echo $rec_job['zamount81'];?>" id="zamount81" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Auto Club (AAA)</td>
      <td align="center" valign="top"><input name="pamount82" type="text"  value="<?php echo $rec_job['pamount82'];?>"  id="pamount82" size="8" /></td>
      <td align="center" valign="top"><input name="qamount82" type="text"  value="<?php echo $rec_job['qamount82'];?>" id="qamount82" size="8" /></td>
      <td align="center" valign="top"><input name="ramount82" type="text"  value="<?php echo $rec_job['ramount82'];?>" id="ramount82" size="8" /></td>
      <td align="center" valign="top" ><input name="xamount82" type="text"  value="<?php echo $rec_job['xamount82'];?>" id="xamount82" size="8" /></td>
      <td align="center" valign="top" ><input name="yamount82" type="text"  value="<?php echo $rec_job['yamount82'];?>" id="yamount82" size="8" /></td>
      <td align="center" valign="top"  ><input name="zamount82" type="text"  value="<?php echo $rec_job['zamount82'];?>" id="zamount82" size="8" /></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="75%" align="center" valign="middle" class="tbl-area-tabs"><strong> Information on Your Vehicle</strong></td>
      <td width="103" align="center" valign="middle" bgcolor="#FFFFFF" class="tbl-area-tabs">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">Vehicle was available for Personal use during off-duty hours</td>
      <td align="center" valign="top"><select name="textfield1" id="textfield" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['textfield1'] =="yes") echo " selected=\"selected\"";?>>yes</option>
    <option <?php if($rec_job['textfield1'] =="no") echo " selected=\"selected\"";?>>no</option>
    
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">You or your spouse have another vehicle available for personal use</td>
      <td align="center" valign="top"><select name="textfield2" id="textfield2" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['textfield2'] =="yes") echo " selected=\"selected\"";?>>yes</option>
    <option <?php if($rec_job['textfield2'] =="no") echo " selected=\"selected\"";?>>no</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">You have evidence to support your deduction</td>
      <td align="center" valign="top"><select name="textfield3" id="textfield3" class="select-box-new">
        <option>Select</option>
		<option <?php if($rec_job['textfield3'] =="yes") echo " selected=\"selected\"";?> >yes</option>
    <option <?php if($rec_job['textfield3'] =="no") echo " selected=\"selected\"";?>>no</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">If yes, the evidence is written</td>
      <td align="center" valign="top"><select name="textfield4" id="textfield4" class="select-box-new">
        <option>Select</option>
        <option <?php if($rec_job['textfield4'] =="yes") echo " selected=\"selected\"";?>>yes</option>
    <option <?php if($rec_job['textfield4'] =="no") echo " selected=\"selected\"";?>>no</option>
      </select></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="75%" align="center" valign="middle" class="tbl-area-tabs"><strong> MOVING DETAILS</strong></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF" class="tbl-area-tabs">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">NUMBER OF MILES FROM YOUR OLD HOME TO YOUR NEW WORKPLACE</td>
      <td align="center" valign="top"><select name="textfield5" id="textfield5" class="select-box-new">
        <option>Select</option>
        <option  <?php if($rec_job['textfield5'] =="MORE THAN 50 MILES") echo " selected=\"selected\"";?>>MORE THAN 50 MILES</option>
        <option  <?php if($rec_job['textfield5'] =="LESS THAN 50 MILES") echo " selected=\"selected\"";?>>LESS THAN 50 MILES</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">NUMBER OF MILES FROM YOUR OLD HOME TO YOUR OLD WORKPLACE</td>
      <td align="center" valign="top"><select name="textfield6" id="textfield6" class="select-box-new">
        <option>Select</option>
         <option  <?php if($rec_job['textfield6'] =="MORE THAN 50 MILES") echo " selected=\"selected\"";?>>MORE THAN 50 MILES</option>
        <option  <?php if($rec_job['textfield6'] =="LESS THAN 50 MILES") echo " selected=\"selected\"";?>>LESS THAN 50 MILES</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">DO YOU WORK FULL TIME AT THE NEW JOB</td>
      <td align="center" valign="top"><select name="textfield7" id="textfield7" class="select-box-new">
        <option>Select</option>
           <option  <?php if($rec_job['textfield7'] =="MORE THAN 50 MILES") echo " selected=\"selected\"";?>>MORE THAN 50 MILES</option>
        <option  <?php if($rec_job['textfield7'] =="LESS THAN 50 MILES") echo " selected=\"selected\"";?>>LESS THAN 50 MILES</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">ARE YOU GOING TO STAY ATLEAST 39 WEEKS DURING NEXT 12 MONTHS</td>
      <td align="center" valign="top"><select name="textfield8" id="textfield8" class="select-box-new">
        <option>Select</option>
        <option  <?php if($rec_job['textfield8'] =="MORE THAN 50 MILES") echo " selected=\"selected\"";?>>MORE THAN 50 MILES</option>
        <option  <?php if($rec_job['textfield8'] =="LESS THAN 50 MILES") echo " selected=\"selected\"";?>>LESS THAN 50 MILES</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">ARE YOU GOING TO STAY AT THE NEW LOCATION ATLEAST 78 WEEKS DURING THE 24</td>
      <td align="center" valign="top"><select name="textfield9" id="textfield9" class="select-box-new">
        <option>Select</option>
           <option  <?php if($rec_job['textfield9'] =="MORE THAN 50 MILES") echo " selected=\"selected\"";?>>MORE THAN 50 MILES</option>
        <option  <?php if($rec_job['textfield9'] =="LESS THAN 50 MILES") echo " selected=\"selected\"";?>>LESS THAN 50 MILES</option>
      </select></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tr>
    <td width="75%" height="40">EXPENSES RELATED TO :</td>
    <td align="center">
	<select name="textfield10" id="textfield10" class="select-box-new">
        <option value="">select</option>
        <?php
$sql=mysql_query("select distinct dfirstname from dependents where user=$lu");
while($result=mysql_fetch_array($sql))
{
?>
    <option value="<?php echo $result['dfirstname'];?>" <?php if($rec_job['textfield10']==$result['dfirstname']) { ?> selected="selected" <?php } ?> ><?php echo $result['dfirstname']; ?></option>
    <?php
}
?>
    
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" align="center" bgcolor="#d6eafb" cellpadding="8" cellspacing="1">
  <tbody>
    <tr>
      <td width="75%" align="center" valign="middle" class="tbl-area-tabs"><strong> MOVING EXPENSES</strong></td>
      <td align="center" valign="middle" class="tbl-area-tabs"><strong>AMOUNT IN USD</strong></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">TRAVELING EXPENSES - AIRFARE (FOR SELF AND FAMILY MEMBERS)</td>
      <td align="center" valign="top"><input name="textfield11" value="<?php echo $rec_job['textfield11'];?>"  type="text" id="textfield11" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">TRAVELING EXPENSES - CAR RENTAL/FUEL/REPAIR</td>
      <td align="center" valign="top"><input name="textfield12" value="<?php echo $rec_job['textfield12'];?>"  type="text" id="textfield12" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">MILEAGE EXPENSES (ACTUAL MILES*19 CENTS/MILE)</td>
      <td align="center" valign="top"><input name="textfield13" value="<?php echo $rec_job['textfield13'];?>"  type="text" id="textfield13" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">LODGING EXPENSES (HOTEL EXPENSE, NOT MEALS)</td>
      <td align="center" valign="top"><input name="textfield14" value="<?php echo $rec_job['textfield14'];?>"  type="text" id="textfield14" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">COST TO PACK, AND CRATE</td>
      <td align="center" valign="top"><input name="textfield15" value="<?php echo $rec_job['textfield15'];?>"  type="text" id="textfield15" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">COST FOR TRANSPORTATION OF GOODS</td>
      <td align="center" valign="top"><input name="textfield16" value="<?php echo $rec_job['textfield16'];?>"  type="text" id="textfield16" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">STORAGE OF HOUSEHOLD GOODS &amp; PERSONAL EFFECTS</td>
      <td align="center" valign="top"><input name="textfield17" value="<?php echo $rec_job['textfield17'];?>"   type="text" id="textfield17" size="8" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="left" valign="top">REIMBURSEMENT RECEIVED FROM YOUR EMPLOYER</td>
      <td align="center" valign="top"><input name="textfield18" value="<?php echo $rec_job['textfield18'];?>"  type="text" id="textfield18" size="8" /></td>
    </tr>
  </tbody>
</table>
								  <br>
                                  <p align="center"><input type="submit" name="submit" value="Submit">
<a href="job-relate.php"><input type="button" value="Cancel" name="reset"></a></p>




</form>
<p>&nbsp;</p>

<!-- Content Area End --->

</td>
                </tr>
              </table></td>

<?php
//include "footer2.php";
?>
