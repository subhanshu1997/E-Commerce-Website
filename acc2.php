<!DOCTYPE html>
<html>
	<head>
		<title>Hard Disk</title>
			<body bgcolor="F0F0F0"><br />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
<pre>
			<a href="top2.html"><img src="logo.png" align="left" width="75" height="40" /></a>  <img src="name.jpg" align="left" width="70" height="30" />	<i class="fa fa-search w3-large" ></i><input type="text" name="search" size="50" placeholder="Search for Products,Brands and more" style="font-size:15pt;padding:10px;border:3px black;border-radius:6px 6px 6px 6px;" /> <input type="submit" name="search" value="Search" style="font-size:15pt;padding:10px;border:3px black;border-radius:6px 6px 6px 6px;" /></center><br /><br />
<img src="74.jpg" height="10" width="1355" style="border-radius:6px 0px 0px 6px;">
			</pre>
<style type="text/css">
  ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: #A9A9A9;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
<pre>	<font face="Comic Sans MS" size="6">Hard Disk :</u></font><br />
	<img src="ha1.jpeg" height="400" width="450"/> 	 	<img src="ha2.jpeg" height="200" width="170"/> 	 	<img src="ha3.jpeg" height="170" width="210"/>		  

	<a href="#"><input type="submit" name="Buy Now" value="Buy now" style="font-size:30pt;color:white;background-color:#00D000;border:10px black; paddding:10px; border-radius:6px 6px 6px 6px;"/></a>  <a href="#"><input type="submit" name="addtocart" value="Add to cart" style="font-size:20pt;color:white;background-color:DodgerBlue;border:10px black; paddding:100px; border-radius:6px 6px 6px 6px;"/></a> 		<font face="Times New Roman" size="8"> &#8377 108899/-</font>
<font face="Monotype Corsiva" size="8"><u>                                                                                                  <b>Specifications :</b></u></font>

	<font face="Bradley Hand ITC" size="6"><b>Description:</b></font>
	<font face="Times New Roman" size="4"> 
			This is a light-weight handset.
			Handy & light-weight.
			Limited stock.
			Mesh panel detail,round panel.
			RAM: <a href="#">3 GB</a> 
			Internal: <a href="#">32 GB</a> 
			Camera: <a href="#">8,13</a> 
			Processor: <a href="#">2.4Ghz</a><form method='post'>
			<font size="5" face="Comic Sans MS" color="black"><u>Review:</u></font>
				<textarea rows="3" cols="30" name='comment' id='comment'></textarea>
	
											<input type="submit" name="submit" value="Submit" style="font-size:12pt;color:black;background-color:silver;border:1px black; paddding:10px; border-radius:4px 4px 4px 4px;"/>
<input </html>                                     
											<?php
$com="";
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('company',$con)or die(mysql_error());
if(isset($_POST['submit'])){
$com =$_POST['comment'];
$query="insert into comment(id,comment) value('acc2','$com')";
if(mysql_query($query))
{
echo "";

}
}
?>
<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('company',$conn)or die(mysql_error());
$result=mysql_query("SELECT comment FROM comment where id ='acc2'");
while($row = mysql_fetch_array($result))
{
	echo $row['comment'];
	echo "<br>";
}
mysql_close($conn);
?>	
