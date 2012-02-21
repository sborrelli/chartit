<? 
/*
* Copyright (c) 2012 Dario Alvarez Miranda, Steve Borrelli
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this
* software and associated documentation files (the "Software"), to deal in the Software
* without restriction, including without limitation the rights to use, copy, modify, 
* merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
* permit persons to whom the Software is furnished to do so, subject to the following conditions:
* 
* 
* The above copyright notice and this permission notice shall be included in all copies or 
* substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
* BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
* DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

require_once ("_common.php"); ?>
<?
$floor = $_REQUEST['floor'];
if(!$floor){
	$floor = "-1";
}
//echo "floor: ".$floor;
$q_str = "SELECT id, number, begins_with, ends_with
		FROM Stacks
		WHERE floor_id = $floor
		ORDER BY number"; 

if(!isset($db)){
	if(!($db=sqlite_open(DB_PATH))){
		echo "<h2> Database Error </h2>";
		die();
	}
}
?>
<form action="stacks_delete.php" id="delForm" method="POST">
	<input type="hidden" id="stackId" name="stackId" />
	<table>
	
		<tr>
			<th>Stack #</th>
			<th>From Number</th>
			<th>To Number</th>
			<th colspan="2">Modify</th>		
			<?
				$query = sqlite_query($db, $q_str);
				while ($row = sqlite_fetch_array($query)){
					print "<tr>";
					print "<td>".$row['number']."</td><td>".$row['begins_with']."</td><td>".$row['ends_with']."</td>";
					$stackId = $row['id'];
					print "<td><a href='stacks_edit.php?id=$stackId'>View/Edit</a></td>";
					print "<td><a href='#' onclick='deleteStack($stackId)'>Delete</a></td>";
					print "</tr>";
				}
			?>		
		</tr>	
	</table>
</form>	
<br>
<div class="info" style="height: 60; padding: 10px;">
<a href="stacks_edit.php?id=0&floor_id=<?=$floor?>">Create new stack on this floor</a>
</div>
