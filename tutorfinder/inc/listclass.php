<?php
//subject list

class checkboxlist{
	public function sublist()
	{
		echo'
	<div class="divp35"><input type="checkbox" name="sub_list[]" value="Operations Research"><span>Operations Research</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Automata Theory & Languages"><span>Automata Theory & Languages</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Software Engineering"><span>Software Engineering</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Distributed Systems"><span>Distributed Systems</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Information Assurance & Security"><span>Information Assurance & Security</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Operating Systems"><span>Operating Systems</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Computer Networks"><span>Computer Networks</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Artificial Intelligence"><span>Artificial Intelligence</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Systems Analysis & Design"><span>Systems Analysis & Design</span></div>
		';

	}
	//sub list unchecked box
	public function sublistcombo()
	{
		echo'
			<select name="sublistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="Operations Research">Operations Research</option>
			  <option value="Automata Theory & Languages">Automata Theory & Languages</option>
			  <option value="Software Engineering">Software Engineering</option>
			  <option value="Distributed Systems">Distributed Systems</option>
			  <option value="Information Assurance & Security">Information Assurance & Security</option>
			  <option value="Operating Systems">Operating Systems</option>
			  <option value="Computer Networks">Computer Networks</option>
			  <option value="Artificial Intelligence">Artificial Intelligence</option>
			  <option value="Systems Analysis & Design">Systems Analysis & Design</option>
			</select>


		';
	}

	public function classlist()
	{
		echo ' 
			<div class="divp35"><input type="radio" name="class_list[]" value="One-Three"><span>One-Three</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Four-Five"><span>Four-Five</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Six-Seven"><span>Six-Seven</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Eight"><span>Eight</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Nine-Ten"><span>Nine-Ten</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Eleven-Twelve"><span>Eleven-Twelve</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="College Level"><span>College Level</span></div>
		    <div class="divp35"><input type="radio" name="class_list[]" value="University Level"><span>University Level</span></div>
			';
	}

	public function classlistcombo()
	{
		echo '
			<select style="width: 180px;" name="classlistcombo">
					
			  <option value="None">None</option>
			  <option value="One-Three">One-Three</option>
			  <option value="Four-Five">Four-Five</option>
			  <option value="Six-Seven">Six-Seven</option>
			  <option value="Eight">Eight</option>
			  <option value="Nine-Ten">Nine-Ten</option>
			  <option value="Eleven-Twelve">Eleven-Twelve</option>
			  <option value="College Level">College Level</option> 
			  <option value="University Level">University Level</option>
			</select>
		';
	}

	public function mediumlist()
	{
		echo '
			<div class="divp35"><input  type="radio" name="medium_list[]" value="Urdu"><span>Urdu</span></div>
			<div class="divp35"><input  type="radio" name="medium_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input  type="radio" name="medium_list[]" value="Any"><span>Any</span></div>
		';
	}

	public function mediumlistcombo()
	{
		echo '
			<select name="mediumlistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="Urdu">Urdu</option>
			  <option value="English">English</option>
			  <option value="Any">Any</option>
			</select>
		';
	}
}

?>