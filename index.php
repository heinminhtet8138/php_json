<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" id="addStudentdiv">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h1 class="display-4"> Add New Student </h1>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="addstudent.php" method="POST" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">
					    	<input type="file"  id="profile" name="profile">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Email </label>
					    <div class="col-sm-10">
					    	<input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
					    </div>
					</div>

					<fieldset class="form-group">
					    <div class="row">
					    	<legend class="col-form-label col-sm-2 pt-0"> Gender </legend>
					      
					      	<div class="col-sm-10">
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
					          		<label class="form-check-label" for="male">
					            		Male
					          		</label>
					        	</div>
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
					          		<label class="form-check-label" for="female">
					            		Female
					          		</label>
					        	</div>
					        
					      </div>
					    </div>
					</fieldset>

					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label"> Address </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" rows="5" name="address"></textarea>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			SAVE
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>

	<div class="container" id="editStudentdiv">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h1 class="display-4"> Edit Existing Student </h1>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="updatestudent.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" id="e_id">
					<input type="hidden" name="oldprofile" id="e_oldprofile">

					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">

					    	<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile </a>
								    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>
								  </div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							  		<img src="" id="showOldphoto" class="img-fluid" style="width: 300px; height:200px">
							  	</div>
							  	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					    			<input type="file"  id="profile" name="newprofile">
							  		
							  	</div>
							</div>

					    </div>
					</div>

					<div class="form-group row">
						<label for="e_name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="e_name" placeholder="Enter Name" name="name">
					    </div>
					</div>

					<div class="form-group row">
						<label for="e_email" class="col-sm-2 col-form-label"> Email </label>
					    <div class="col-sm-10">
					    	<input type="email" class="form-control" id="e_email" placeholder="Enter Email" name="email">
					    </div>
					</div>

					<fieldset class="form-group">
					    <div class="row">
					    	<legend class="col-form-label col-sm-2 pt-0"> Gender </legend>
					      
					      	<div class="col-sm-10">
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="e_male" value="Male">
					          		<label class="form-check-label" for="male">
					            		Male
					          		</label>
					        	</div>
					        
					        	<div class="form-check">
					          		<input class="form-check-input" type="radio" name="gender" id="e_female" value="Female">
					          		<label class="form-check-label" for="female">
					            		Female
					          		</label>
					        	</div>
					        
					      </div>
					    </div>
					</fieldset>

					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label"> Address </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" rows="5" name="address" id="e_address"></textarea>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			SAVE
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th> # </th>
				<th> Name </th>
				<th> Gender </th>
				<th> Email </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>


<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){

	$('#editStudentdiv').hide();

	showData();
	function showData(){

		$.get("student.json",function(data){

			if (data) {

				console.log(typeof(data)); 

				var stu_arr=JSON.parse(data) //optional

				console.log(typeof(stu_arr));

				var html='';
				var j=1;
				$.each(stu_arr,function(i,v){
					
					html+=`<tr>
						<td>${j++}</td>
						<td>${v.name}</td>
						<td>${v.gender}</td>
						<td>${v.email}</td>
						<td>
							<button class="btn btn-primary btn-sm detail" data-id="${i}" data-name="${v.name}" data-email="${v.email}" data-gender="${v.gender}" data-address="${v.address}" data-profile="${v.profile}">Detail</button> 
							<button class="btn btn-warning btn-sm edit" data-id="${i}">Edit</button> 
							<button class="btn btn-danger btn-sm delete" data-id="${i}">Delete</button>
						</td>
					</tr>`
				});
				$('tbody').html(html);




			}

		})

	}


	$("tbody").on('click','.detail',function(){

		var id=$(this).data('id');
		var name=$(this).data('name');
		var email=$(this).data('email');
		var address=$(this).data('address');
		var gender=$(this).data('gender');
		var profile=$(this).data('profile');
		
		// console.log(id+name+email+address+gender+profile);

		$("#stu_name").html("<strong>Name: </strong>"+name);
		$("#stu_email").html("<strong>Email: </strong>"+email);
		$("#stu_gender").html("<strong>Gender: </strong>"+gender);
		$("#stu_address").html("<strong>Address: </strong>"+address);

		$(".stu_img").attr("src",profile);



		$("#detailModal").modal('show');
		
	})	



	$('tbody').on('click','.delete',function(){
		var id=$(this).data('id');
		var ans=confirm("Are You Sure Delete");
		if (ans) {
			$.post("deletestudent.php",{stu_id:id},function(data){
				showData();
			})
		}
	})

	$('tbody').on('click','.edit',function(){
		var id=$(this).data('id');

		$('#addStudentdiv').hide();
		$('#editStudentdiv').show();

		$.get('student.json',function(data){


			if (data) {
				var stu_arr=JSON.parse(data); //optional

				var name = stu_arr[id].name;
				var email = stu_arr[id].email;
				var gender = stu_arr[id].gender;
				var address = stu_arr[id].address;
				var profile = stu_arr[id].profile;

				$('#e_name').val(name);
				$('#e_email').val(email);
				$('#e_address').val(address);

				if (gender == "Male") {
					$('#e_male').attr('checked', 'checked');
				}else{
					$('#e_female').attr('checked', 'checked');

				}

				$('#showOldphoto').attr('src', profile);

				$('#e_id').val(id);
				$('#e_oldprofile').val(profile);

			}

		})

	})

})

	
</script>




<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-5">
        			<img src="" class="img-fluid stu_img">
        		</div>
        		<div class="col-md-7">
        			<p id="stu_name"></p>
        			<p id="stu_email"></p>
        			<p id="stu_gender"></p>
        			<p id="stu_address"></p>

        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>