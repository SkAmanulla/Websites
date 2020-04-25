function login_validation()
{
	//alert("hii");
	if($('#username').val()=="")	
	{
		valid_error("username","Enter UserName","error1");
		return false;
	}
	else if($('#password').val()=="")
	{
		$('#error1').hide();
		valid_error("password","Enter Password","error2");	
		return false;
	}
	else if($('#captcha').val()=="")
	{
		$('#error1').hide();
		$('#error2').hide();
		valid_error("captcha","Enter Captcha","error3");
		return false;
	}
	else
	{
		return true;	
	}
}

function validate_changepassword()
{
	if($('#old_password').val()=="")	
	{
		valid_error('old_password',"Enter Old Password","error1");
		return false;
	}
	else if($('#new_password').val()=="")
	{
		$('#error1').hide();
		valid_error("new_password","Enter New Password","error2");	
		return false;
	}
	else if($('#confirm_password').val()=="")
	{
		$('#error1').hide();
		$('#error2').hide();
		valid_error("confirm_password","Enter Confirm Password","error3");	
		return false;
	}
	var password=$('#new_password').val();
	var confirm_password=$('#confirm_password').val();
	if(password!=confirm_password)
	{
		$('#error1').hide();
		$('#error2').hide();
		$('#confirm_password').val('');
		valid_error("confirm_password","Confirm Password And New Password Should Be Same","error3");	
		return false;
	}
	else
	{
		return true;	
	}
}
function validate_masterdata()
{
	//alert("hiii");
	if($('#masters').val()==4 || $('#masters').val()==2 || $('#masters').val()==5)
	{
		if($('#state').val()=="")
		{
			valid_error("state","Select State Value","error1");
			return false;
		}
	}
	if($('#masters').val()==4 || $('#masters').val()==5)
	{
		if($('#zones').val()=="")
		{
			valid_error("zones","Select Zone Value","error1");
			return false;
		}
	}
	if($('#masters').val()==5)
	{
		if($('#district').val()=="")
		{
			valid_error("district","Select District Value","error1");
			return false;
		}
	}
	if($('#masters').val()!=6)
	{
		if(($('#master_name1').val()=="")&&($('#master_name2').val()=="")&&($('#master_name3').val()=="")&&($('#master_name4').val()=="")&&($('#master_name5').val()==""))
		{
			valid_error('master_name1',"Enter One Master Value","error1")	;
			return false;
		}
	}
	else if($('#masters').val()==5)
	{
		if($('#payment_per_km').val()=="")
		{
			valid_error("payment_per_km","Enter Payment Value","error1");	
			return false;
		}
	}
	else
	{
		return true;	
	}
	
}
function validate_faculty()
{
	if($('#faculty_name').val()=="")
	{
		valid_error("faculty_name","Enter Faculty Name","error1");	
		return false;
	}
	else if($('#faculty_id').val()=="")
	{
		valid_error("faculty_id","Enter Faculty Id","error1");
		return false;
	}
	else if($('#zones').val()=="")
	{
		valid_error("zones","Select Zones","error1");
		return false;
	}
	else if($('#email_id_off').val()=="")
	{
		valid_error("email_id_off","Enter Official Mail Id","error1");
		return false;
	}
	if(echeck($('#email_id_off').val())==false)
	{
		valid_error("email_id_off","Enter Valid Email Id","error1");
		$('#email_id_off').val('');
		return false;
	}
	else if($('#mobile_no_off').val()=="")
	{
		valid_error("mobile_no_off","Enter Official Mobile Number","error1");
		return false;
	}
	else if(isNaN($('#mobile_no_off').val())==true)
	{
		valid_error("mobile_no_off","Enter Valid Mobile Number","error1");
		$('#mobile_no_off').val('');
		return false;
	}
	else if(valid_char($('#mobile_no_off').val(),10,12)==false)
	{
		valid_error("mobile_no_off","Enter Numbers in the range 10 to 12","error1");
		$('#mobile_no_off').val('');
		return false;
	}
	/*else if($('#qualification').val()=="")
	{
		valid_error("qualification","Select Qualification","error1");
		return false;
	}*/
	else if($('#designation').val()=="")
	{
		valid_error("designation","Select Designation","error1");
		return false;
	}
	else if($('#password').val()=="")
	{
		valid_error("password","Enter Password","error1");
		return false;
	}
	else
	{
		return true;	
	}
}

function validate_programs()
{	
	if($('#category').val()=="")
	{
		valid_error("category","Select Category","error1");	
		return false;
	}
	else if($('#prgrm_title').val()=="")
	{
		valid_error("prgrm_title","Enter Programme Title","error1");	
		return false;
	}
	else if($('#details').val()=="")
	{
		valid_error("details","Enter Details","error1");	
		return false;
	}
	else
	{
		return true;	
	}
}


function validate_inst()
{
	if($('#inst_name').val()=="")
	{
		valid_error("inst_name","Enter Institute Name","error1");	
		return false;
	}
	else if($('#address').val()=="")
	{
		valid_error("address","Enter Address","error1");	
		return false;
	}
	else if($('#state').val()=="")
	{
		valid_error("state","Select State","error1");	
		return false;
	}
	else if($('#zones').val()=="")
	{
		valid_error("zones","Select Zone","error1");	
		return false;
	}
	else if($('#district').val()=="")
	{
		valid_error("district","Select District","error1");	
		return false;
	}
	else if($('#city').val()=="")
	{
		valid_error("city","Select City","error1");	
		return false;
	}
	else if($('#email_id').val()=="")
	{
		valid_error("email_id","Enter Email Id","error1");
		return false;
	}
	else if(echeck($('#email_id').val())==false)
	{
		valid_error("email_id","Enter Valid Email Id","error1");
		$('#email_id').val('');
		return false;
	}
	else if($('#cname').val()=="")
	{
		valid_error("cname","Enter Contact Person Name","error1");
		return false;
	}
	else if($('#mobile_no').val()=="")
	{
		valid_error("mobile_no","Enter Mobile Number","error1");
		return false;
	}
	else if(isNaN($('#mobile_no').val())==true)
	{
		valid_error("mobile_no","Enter Valid Mobile Number","error1");
		$('#mobile_no').val('');
		return false;
	}
	else if(valid_char($('#mobile_no').val(),10,12)==false)
	{
		valid_error("mobile_no","Enter Numbers in the range 10 to 12","error1");
		$('#mobile_no').val('');
		return false;
	}
	else if($('#details').val()=="")
	{
		valid_error("details","Enter Details","error1");
		return false;
	}
	
	else
	{
		return true;	
	}	
}


function validate_ppt()
{
	if($('#prgrm_title').val()=="")	
	{
		valid_error("prgrm_title","Enter Programme Title","error1");	
		return false;
	}
	else if($('#topic').val()=="")
	{
		valid_error("topic","Enter Topic","error1");	
		return false;
	}
	else if($('#details').val()=="")
	{
		valid_error("details","Enter Details","error1");	
		return false;
	}
	else if($('#ppt').val()=="")
	{
		valid_error("ppt","Upload PPT","error1");	
		return false;
	}
	else
	{
		return true;	
	}
}

function validate_schedule()
{
	var hval=$('#hval').val();
	for(var i=1;i<=hval;i++)
	{
		if(($('#institute'+hval).val()!="")||($('#programme'+hval).val()!="")||($('#time'+hval).val()!=""))	
		{
			if($('#institute'+hval).val()=="")
			{
				valid_error("institute"+hval,"Select Institution Name","error1");	
				return  false;
			}
			else if($('#programme'+hval).val()=="")
			{
				valid_error("programme"+hval,"Select Programme","error1");
				return false;
			}
			else if($('#time'+hval).val()=="")
			{
				valid_error("time"+hval,"Select Time","error1");
				return false;
			}
			else
			{
				return true;	
			}
		}
	}
}

function validate_resource()
{
	//alert("hiiii");
	if($('#title').val()=="")	
	{
		valid_error("title","Enter Title","error1");	
		return false;
	}
	else if($('#filename').val()=="")
	{
		valid_error("filename","Select File","error1");	
		return false;	
	}
	var fup = $('#filename').val();
	var ext = fup.substring(fup.lastIndexOf('.') + 1);
	//alert(ext);
	if(ext =="pdf" || ext=="exe")
	{
		return true;
	}
	else
	{
		//alert("Only PDF Is Allowed To Upload File");
		valid_error("filename","Only PDF and exe Are Allowed To Upload File","error1");	
		$('#fup').val('');
		return false;
	}
	/*else
	{
		return true;	
	}*/
}

function validate_support()
{
	//alert("hiiii");
	if($('#title').val()=="")	
	{
		valid_error("title","Enter Title","error1");	
		return false;
	}
	else if($('#filetype').val()=="")
	{
		valid_error("filetype","Select FileType","error1");	
		return false;	
	}
	else if($('#filename').val()=="")
	{
		valid_error("filename","Select File","error1");	
		return false;	
	}
	
	else
	{
		return true;	
	}
}

function forgot_validation()
{
	//alert("hiiii");
	if($('#username').val()=="")
	{
		valid_error("username","Enter UserName","error1");	
		return false;
	}
	else
	{
		return true;	
	}
}

function code_validation()
{
	//alert("hiiii");
	if($('#code').val()=="")
	{
		valid_error("username","Enter Code","error1");	
		return false;
	}
	else
	{
		return true;	
	}
}

function validate_resetpswd()
{
	if($('#new_password').val()=="")
	{
		valid_error("new_password","Enter New Password","error2");	
		return false;
	}
	else if($('#confirm_password').val()=="")
	{
		$('#error2').hide();
		valid_error("confirm_password","Enter Confirm Password","error3");	
		return false;
	}
	var password=$('#new_password').val();
	var confirm_password=$('#confirm_password').val();
	if(password!=confirm_password)
	{
		$('#error2').hide();
		$('#confirm_password').val('');
		valid_error("confirm_password","Confirm Password And New Password Should Be Same","error3");	
		return false;
	}
	else
	{
		return true;	
	}
}

/*function schedule_validate()
{
	alert("hiiii");
	if($("#nkms").val()=="")
	{
		valid_error("nkms","enter no.of kms","error1");
		return false;
	}

	if(($('#nkms').val()!="") && (isNaN($('#nkms').val())==true))
		{
			$('#nkms').val('');	
			valid_error("nkms","Enter Numbers Only","error1");
			return false;
		}

	if(($('#nkms').val()!="") && ($('#nkms').val()>90))
		{
			$('#nkms').val('');	
			valid_error("nkms","Accept Upto 90 Kms","error1");
			return false;
		}	

	if($("#lt").val()=="")
	{
		valid_error("lt","enter valid amount","error1");
		return false;
	}

	if(($('#lt').val()!="") && (isNaN($('#lt').val())==true))
		{
			$('#lt').val('');	
			valid_error("lt","Enter Numbers Only","error1");
			return false;
		}

	if($("#ic").val()=="")
	{
		valid_error("ic","enter valid amount","error1");
		return false;
	}

	if(($('#ic').val()!="") && (isNaN($('#ic').val())==true))
		{
			$('#ic').val('');	
			valid_error("ic","Enter Numbers Only","error1");
			return false;
		}

	if($("#food").val()=="")
	{
		valid_error("food","enter valid amount","error1");
		return false;
	}

	if(($('#food').val()!="") && (isNaN($('#food').val())==true))
		{
			$('#food').val('');	
			valid_error("food","Enter Numbers Only","error1");
			return false;
		}

	if(($('#food').val()!="")&&($('#food').val()>300))
	{
		//alert("hiii");
		$('#food').val('');
		valid_error("food","Food Expenses Upto 300 Rs","error1");
		return false;	
	}		

	if($("#room").val()=="")
	{
		valid_error("room","enter valid amount","error1");
		return false;
	}

	if(($('#room').val()!="") && (isNaN($('#room').val())==true))
		{
			$('#room').val('');	
			valid_error("room","Enter Numbers Only","error1");
			return false;
		}

	if(($('#room').val()!="")&&($('#room').val()>1000))
	{
		$('#room').val('');	
		valid_error("room","Room Charges Allow Upto 1000 Rs","error1");
		return false;
	}


	if($("#post").val()=="")
	{
		valid_error("post","enter valid amount","error1");
		return false;
	}

	if(($('#post').val()!="") && (isNaN($('#post').val())==true))
		{
			$('#post').val('');	
			valid_error("post","Enter Numbers Only","error1");
			return false;
		}		


	if($('#filename').val()=="")	
	{
		valid_error("filename","Select File","error1");
		return false;
	}
	var fup = $('#filename').val();
	var ext = fup.substring(fup.lastIndexOf('.') + 1);
	//alert(ext);
	if(ext =="pdf" || ext=="jpg" || ext=="png")
	{
		//return true;
	}
	else
	{
		//alert("Only PDF Is Allowed To Upload File");
		valid_error("filename","Only Img And Pdf Are Allowed To Upload File","error1");	
		$('#filename').val('');
		return false;
	}
	if($('#details').val()=="")
	{
		valid_error("details","Enter Details","error1");	
		return false;
	}
}*/
function valid_error(id,error,err)
{
	$('.errr').html('');
	$('#'+err).show();
	$('.form-group-inner').removeClass('error');
	$('#'+id).closest('.form-group-inner').addClass('error');
	$('#'+err).html(error);
	$('#'+id).focus();
	return false;
}