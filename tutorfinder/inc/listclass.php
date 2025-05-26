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
			<div class="divp35"><input type="radio" name="class_list[]" value="First"><span>First</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Second"><span>Second</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Third"><span>Third</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Fourth"><span>Fourth</span></div>
			
			';
	}

	public function classlistcombo()
	{
		echo '
			<select style="width: 180px;" name="classlistcombo">
					
			  <option value="None">None</option>
			  <option value="First">First</option>
			  <option value="Second">Second</option>
			  <option value="Third">Third</option>
			  <option value="Fourth">Fourth</option>
			 
			</select>
		';
	}

	public function mediumlist()
	{
		echo '
			<div class="divp35"><input  type="radio" name="medium_list[]" value="Tagalog"><span>Tagalog</span></div>
			<div class="divp35"><input  type="radio" name="medium_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input  type="radio" name="medium_list[]" value="Ilocano"><span>Ilocano</span></div>
		';
	}

	public function mediumlistcombo()
	{
		echo '
			<select name="mediumlistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="Tagalog">Tagalog</option>
			  <option value="English">English</option>
			  <option value="Ilocano">Ilocano</option>
			</select>
		';
	}
}

?>