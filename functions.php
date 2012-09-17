<?php

function db_connect(){
	$user_name = "paycheck";
	$password = "GrS4KUqajG7Ztz7q";
	$database = "paycheck";
	$server = "localhost";
	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = (mysql_select_db($database, $db_handle)) ? true : false;
	return $db_found;
}


class Teacher
{
    // property declaration
    var $id;
	var $class;
	var $first_name;
	var $last_name;
	var $pref_name;
	var $email;
	var $password;
	var $admin;
	var $comments = array();
	var $all_comments = array();
	
	// CONSTRUCTION
	function __construct() { 
		
	}

    // SET METHODS
	function set_id($new_id) {
		$this->id = $new_id;
	}
	function set_class($new_class) {
		$this->class = $new_class;
	}
	function set_first_name($new_first_name) {
		$this->first_name = $new_first_name;
	}
	function set_last_name($new_last_name) {
		$this->last_name = $new_last_name;
	}
	function set_pref_name($new_pref_name) {
		$this->pref_name = $new_pref_name;
	}
	function set_email($new_email) {
		$this->email = $new_email;
	}
	
	
	// GET METHODS
	function get_id() {
		return $this->id;
	}
	function get_class() {
		return $this->class;
	}
	function get_first_name() {
		return $this->first_name;
	}
	function get_last_name() {
		return $this->last_name;
	}
	function get_pref_name() {
		return $this->pref_name;
	}
	function get_email() {
		return $this->email;
	}
	
	
	// UPDATE METHODS
	function update_class() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE teachers WHERE id=$this->id class = $this->class")) ? true : false; // FIX
		return $status;
	}
	function update_first_name() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE teachers WHERE id=$this->id first_name = $this->first_name")) ? true : false; // FIX
		return $status;
	}
	function update_last_name() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE teachers WHERE id=$this->id last_name = $this->last_name")) ? true : false; // FIX
		return $status;
	}
	function update_pref_name() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE teachers WHERE id=$this->id pref_name = $this->pref_name")) ? true : false; // FIX
		return $status;
	}
	function update_email() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE teachers WHERE id=$this->id email = $this->email")) ? true : false; // FIX
		return $status;
	}
	function update() {
		$this->update_class();
		$this->update_first_name();
		$this->update_last_name();
		$this->update_pref_name();
		$this->update_email();
	}
	function comment_average() {
		
		$counter = 0;
		$sum = 0;
		foreach($this->comments as $comment):
			$sum += $comment->amount;
			$counter++;
		endforeach;
		
		if($counter>0):
		echo '$'.round($sum/$counter, 2);
		else:
		return false;
		endif;
	}
	
	function comment_sum() {
		
		$counter = 0;
		$sum = 0;
		foreach($this->comments as $comment):
			$sum += $comment->amount;
			$counter++;
		endforeach;
		
		if($counter>0):
		echo '$'.round($sum, 2);
		else:
		return false;
		endif;
	}
	
	function comment_number() {
		
		$counter = 0;
		foreach($this->comments as $comment):
			$counter++;
		endforeach;
		echo $counter;
		
	}
	
	function comment_common_comment() {
		
		$comments = array();
		foreach($this->comments as $comment):
			$comments["$comment->comment"]++;
		endforeach;
		max($comments);
		$common_comment = array_keys($comments, max($comments));
		echo $common_comment[0];
		
	}
	
	function comment_category_breakdown() {
		
		$character = 0;
		$academic = 0;
		$social = 0;
		$attend = 0;
		$character_sum = 0;
		$academic_sum = 0;
		$social_sum = 0;
		$attend_sum = 0;
		$character_count = 0;
		$academic_count = 0;
		$social_count = 0;
		$attend_count = 0;
		
		foreach($this->comments as $comment):
			if($comment->category==1){ $character++; $character_sum += $comment->amount; $character_count++; }
			if($comment->category==2){ $academic++; $academic_sum += $comment->amount; $academic_count++; }
			if($comment->category==3){ $social++; $social_sum += $comment->amount; $social_count++; }
			if($comment->category==4){ $attend++; $attend_sum += $comment->amount; $attend_count++; }
		endforeach;
		echo 'Character Habits: '.$character.' comments | $'.$character_sum.' Total Sum | $'.round($character_sum/$character,2).' Average Comment Value<br/>';
		echo 'Academic Habits: '.$academic.' comments | $'.$academic_sum.' Total Sum | $'.round($academic_sum/$academic,2).' Average Comment Value<br/>';
		echo 'Social Habits: '.$social.' comments | $'.$social_sum.' Total Sum | $'.round($social_sum/$social,2).' Average Comment Value<br/>';
		echo 'Attendance: '.$attend.' comments | $'.$attend_sum.' Total Sum | $'.round($attend_sum/$attend,2).' Average Comment Value';
	}
	
}


class Student
{
    // property declaration
    var $id;
	var $class;
	var $first_name;
	var $last_name;
	var $created;
	var $grade_level;
	var $current_paycheck_amount;
	var $average;
	var $comments = array();
	var $all_comments = array();
	
	// CONSTRUCTION
	function __construct() { 
		
	}

    // SET METHODS
	function set_id($new_id) {
		$this->id = $new_id;
	}
	function set_class($new_class) {
		$this->class = $new_class;
	}
	function set_first_name($new_first_name) {
		$this->first_name = $new_first_name;
	}
	function set_last_name($new_last_name) {
		$this->last_name = $new_last_name;
	}
	function set_grade_level($new_grade_level) {
		$this->grade_level = $grade_level;
	}
	
	// GET METHODS
	function get_id() {
		return $this->id;
	}
	function get_class() {
		return $this->class;
	}
	function get_first_name() {
		return $this->first_name;
	}
	function get_last_name() {
		return $this->last_name;
	}
	function get_grade_level() {
		return $this->grade_level;
	}
	
	
	// UPDATE METHODS
	function update_class() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE students WHERE id=$this->id class = $this->class")) ? true : false; // FIX
		return $status;
	}
	function update_first_name() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE students WHERE id=$this->id first_name = $this->first_name")) ? true : false; // FIX
		return $status;
	}
	function update_last_name() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE students WHERE id=$this->id last_name = $this->last_name")) ? true : false; // FIX
		return $status;
	}
	function update_grade_level() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE students WHERE id=$this->id grade_level = $this->grade_level")) ? true : false; // FIX
		return $status;
	}
	function update() {
		$this->update_class();
		$this->update_first_name();
		$this->update_last_name();
		$this->update_grade_level();
	}
	
	
	// PAYCHECK METHODS
	function get_average(){
		//$db = db_connect();
		//$status = (mysql_query($db, "SELECT * FROMT comments WHERE id=$this->id")) ? true : false; // FIX
		//if ($status):
		// sum up most amount entries for the period of the current paycheck
		//endif;
		
		/*
		$sum = 0;
		foreach ($this->comments as $comment):
		$sum += $comment->amount;	
		endforeach;
		*/
		
		// $db = db_connect();
		// 		$sql = "SELECT * from comments WHERE student='$this->id'";
		// 		$result = mysql_query($sql,$db);
		// 		if($result){
		// 		while ($row = mysql_fetch_object($result, 'Comment')):
		// 			$this->all_comments[]=$row; 
		// 		endwhile;
		// 		}
		
		$sum = 0;

		foreach ($this->all_comments as $comment):
			$sum += $comment->amount;
		endforeach;
		
		

			
		

			$start_ts = strtotime("2011-09-12 00:00:00");	
			$end_ts = time();
			$diff = $end_ts - $start_ts;
			$days_since = round($diff / 86400);
		
		$weeks_since = floor($days_since/7); // + 1;
		//$weeks_since++;
		//$weeks_since --;
		//$weeks_since = 4;
		
		$sum += ($weeks_since*40);
		
		
		if($weeks_since>0){
			$this->average = (($sum/$weeks_since));
		} else {
			$this->average = "Undefined";
		}
		
		//$this->current_paycheck_amount = rand(-150,150);
		
		//return $sum;
		return $this->average;
		
		

	}
	function current_paycheck_amount(){
		//$db = db_connect();
		//$status = (mysql_query($db, "SELECT * FROMT comments WHERE id=$this->id")) ? true : false; // FIX
		//if ($status):
		// sum up most amount entries for the period of the current paycheck
		//endif;

		$start_ts = $_SESSION['t1'];	
		$end_ts = $_SESSION['t2'];
		$diff = strtotime($end_ts) - strtotime($start_ts);
		$days_since = round($diff / 86400);
		$weeks_since = floor($days_since/7);

		$sum = 40 * $weeks_since; 
		foreach ($this->comments as $comment):
		if (strtotime($comment->created) > strtotime($_SESSION['t1']) && strtotime($comment->created) < strtotime($_SESSION['t2'])):
		$sum += $comment->amount;
		endif;
		endforeach;
		$this->current_paycheck_amount = $sum;
		//$this->current_paycheck_amount = rand(-150,150);
		return $this->current_paycheck_amount;
	}

	function current_period_average( $amount ){
		$start_ts = $_SESSION['t1'];	
		$end_ts = $_SESSION['t2'];
		$diff = strtotime($end_ts) - strtotime($start_ts);
		$days_since = round($diff / 86400);
		$weeks_since = floor($days_since/7);
		
		return $amount / $weeks_since;
	}
	
	function get_comments($array){
		
		$my_comments = array();
		
		foreach ($array as $comment):
			if ($comment->student==$this->id):
				$my_comments[]=$comment;
			endif;
		endforeach;
		
		$this->comments = $my_comments;
	}
	
}

class Comment
{
    // property declaration
    var $id;
	var $subject;
	var $category;
	var $amount;
	var $comment;
	var $teacher;
	var $teacher_name;
	var $student;
	var $date;
	var $created;
	
	// CONSTRUCTION
	function __construct() { 
		
	}

    // SET METHODS
	function set_id($new_id) {
		$this->id = $new_id;
	}
	function set_subject($new_subject) {
		$this->subject = $new_subject;
	}
	function set_category($new_category) {
		$this->category = $new_category;
	}
	function set_amount($new_amount) {
		$this->amount = $new_amount;
	}
	function set_comment($new_comment) {
		$this->comment = $new_comment;
	}
	function set_teacher($new_teacher) {
		$this->teacher = $new_teacher;
	}
	function set_student($new_student) {
		$this->student = $new_student;
	}
	function set_date($new_date) {
		$this->date = $new_date;
	}
	
	
	// GET METHODS
	function get_id() {
		return $this->id;
	}
	function get_subject() {
		return $this->subject;
	}
	function get_category() {
		return $this->category;
	}
	function get_amount() {
		return $this->amount;
	}
	function get_comment() {
		return $this->comment;
	}
	function get_teacher() {
		return $this->teacher;
	}
	function get_student() {
		return $this->student;
	}
	function get_date() {
		return $this->date;
	}
	
	
	// UPDATE METHODS
	function update_subject() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id subject = $this->subject")) ? true : false; // FIX
		return $status;
	}
	function update_category() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id category = $this->category")) ? true : false; // FIX
		return $status;
	}
	function update_amount() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id amount = $this->amount")) ? true : false; // FIX
		return $status;
	}
	function update_comment() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id comment = $this->comment")) ? true : false; // FIX
		return $status;
	}
	function update_teacher() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id teacher = $this->teacher")) ? true : false; // FIX
		return $status;
	}
	function update_student() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id email = $this->student")) ? true : false; // FIX
		return $status;
	}
	function update_date() {
		$db = db_connect();
		$status = (mysql_query($db, "UPDATE comments WHERE id=$this->id date = $this->date")) ? true : false; // FIX
		return $status;
	}
	function update() {
		$this->update_subject();
		$this->update_category();
		$this->update_amount();
		$this->update_comment();
		$this->update_teacher();
		$this->update_student();
		$this->update_date();
	}
	
	
}

// ARRAY SORTING FUNCTION
function cmp_last_name($a, $b){
	return strcmp($a->last_name, $b->last_name);
}
function cmp_current_pc_amount($a, $b){
	return strcmp($a->current_paycheck_amount, $b->current_paycheck_amount);
}

// PAYCHECK POPULATION
function pc_field_old($array, $student, $subject, $category){
	$sum = 0; 
	foreach (($array[$student]->comments) as $comment):
	if (strtotime($comment->created) > strtotime($_SESSION['t1']) && strtotime($comment->created) < strtotime($_SESSION['t2'])):
	$sum += ($comment->subject==$subject && $comment->category==$category) ? $comment->amount : 0 ;
	endif;
	endforeach;
	if ($sum != 0) { return $sum; }
}
function print_pc_field_old($array, $student, $subject, $category){
	$sum = pc_field($array, $student, $subject, $category);
	if ($sum > 0) { echo "$".$sum; } elseif ($sum < 0) { echo "<span class='red'>$".$sum."</span>"; }
}

// PAYCHECK POPULATION
function pc_field($array, $student, $subject, $category){
	$sum = 0; 
	foreach (($array[$student]->comments) as $comment):
	if (strtotime($comment->created) > strtotime($_SESSION['t1']) && strtotime($comment->created) < strtotime($_SESSION['t2'])):
	$sum += ($comment->category==$category) ? $comment->amount : 0 ;
	endif;
	endforeach;
	if ($sum != 0) { return $sum; }
}
function print_pc_field($array, $student, $subject, $category){
	$sum = pc_field($array, $student, $subject, $category);
	if ($sum > 0) { echo "$".$sum; } elseif ($sum < 0) { echo "<span class='red'>$".$sum."</span>"; }
}
?>