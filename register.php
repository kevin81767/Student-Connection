
<div class='register'>
<form action='index.php?p=verify' method='post'>
	<label id='F_name' >First name</label>:<input type='text' name='F_name'  class='form-control'  required />
	<label id='L_name'>Last name</label>:<input type='text' name='L_name'  class='form-control'  required />
	<label id='id_n'>Id number</label>:<input type='text' name='Id_number'  class='form-control'  required />
	<label id='fac'>Faculty</label>:<select name='Faculty' class='form-control'>
															<option value='Information technology'>Information technology</option>
															<option value='Business'>Business administration</option>
															<option value='Accounting'>Accounting</option>
															<option value='Finance'>Finance</option>
															<option value='Theology'>Theology</option>
															<option value='Education'>Education</option>
														</select><p>
	<label id='sem'>Semester</label>:<select name='Semester' class='form-control'>
										<option value='1st semester'>1st Semester</option>
										<option value='2nd semester'>2nd Semester</option>
										<option value='3rd semester'>3rd Semester</option>
										<option value='4th semester'>4th Semester</option>
										<option value='5th semester'>5th Semester</option>
										<option value='6th semester'>6th Semester</option>
										<option value='7th semester'>7th Semester</option>
										<option value='8th semester'>8th Semester</option>
									</select></p>
	
	<label id='pass'>Password</label>:<input type='password' name='Password'  class='form-control'  required /></p>
	<label id='v_pass'>Confirm password</label>:<input type='password' name='c_Password'  class='form-control'  required />
	
	<input type='submit' value=' Submit' class='btn btn-primary' />
	<input type='hidden' />

</form>

</div>
