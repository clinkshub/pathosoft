<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-heading-btn">

		</div>
		<h4 class="panel-title">
			<?= $page?>
		</h4>
	</div>
	<div class="panel-body">
		<form method="post" id="doctorForm" action="<?= site_url('masters/doctors/new-save')?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="form-group ">
						<label class="control-label requiredField" for="fullname">
							Full Name
							<span class="asteriskField">*</span>
						</label>
						<input class="form-control" id="fullname" name="fullname" placeholder="Full Name" type="text" />
					</div>
					<div class="form-group" id="div_gender">
						<label class="control-label requiredField" for="gender">
							Gender
							<span class="asteriskField">
								*
							</span>
						</label>
						<div class="">
							<label class="radio-inline">
								<input name="gender" type="radio" checked="" value="Female" /> Female
							</label>
							<label class="radio-inline">
								<input name="gender" type="radio" value="Male" /> Male
							</label>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label " for="dob">
							Date Of Birth
						</label>
						<input type="text" class="form-control datepicker" name="dob" id="dob" placeholder="Select Date" value="04/1/2014">
					</div>
					<div class="form-group ">
						<label class="control-label " for="contactno">
							Contact No
						</label>
						<input class="form-control" id="contactno" name="contactno" placeholder="Mobile no or Phone no" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="emailid">
							Email ID
						</label>
						<input class="form-control" id="emailid" name="emailid" placeholder="Email ID" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="emailid">
							Photo(Max Size: 256KB, Dimension: Height-768 Width-1024)
						</label>
						<input class="form-control" id="photo" name="photo" placeholder="Photo" type="file" />
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="form-group ">
						<label class="control-label " for="addressline1">
							Address Line 1
						</label>
						<input class="form-control" id="addressline1" name="address1" placeholder="address line 1" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="addressline2">
							Address Line 2
						</label>
						<input class="form-control" id="addressline2" name="address2" placeholder="Address Line 2" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="country">
							Country
						</label>
						<input class="form-control" id="country" name="country" placeholder="Country" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="state">
							State
						</label>
						<input class="form-control" id="state" name="state" placeholder="State" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="city">
							City
						</label>
						<input class="form-control" id="city" name="city" placeholder="City or District" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="area">
							Area
						</label>
						<input class="form-control" id="area" name="area" placeholder="Area or Locality" type="text" />
					</div>
					<div class="form-group ">
						<label class="control-label " for="zipcode">
							PIN
						</label>
						<input class="form-control" id="zipcode" name="zipcode" placeholder="Postal Index Number" type="text" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<div>
							<button class="btn btn-primary actionBtns" name="submit" type="submit">
								<i class="fa fa-save"></i> Save
							</button>
							<button class="btn btn-default actionBtns " name="" type="reset">
								Reset
							</button>
							<span id="loader" class='text-center text-info'></span>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
