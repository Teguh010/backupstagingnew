<div class="section">

	<div class="container">

		<div class="col-md-8 col-md-offset-2">

			<ol class="smartgen-progress">

				<li class="is-complete" data-step="1">

					<a href="<?php echo base_url(); ?>administrator/designWorksheet">Design</a>

				</li>

				<li class="is-complete" data-step="2">

					<a href="<?php echo base_url().'profile/customizeWorksheet/'.$worksheet_id; ?>">Customize</a>

				</li>

				<li class="is-active" data-step="3" class="smartgen-progress__last">Assign</li>

			</ol>

		</div>

	</div>

</div>


<div class="section">

	<div class="container">

	<?php
		if (count($my_tutors) == 0) {
			echo '<div class="alert alert-danger">You have no tutors yet. Please add your tutor in <a href="'.base_url().'administrator/tutor_list">tutor list</a> page first. Don\'t worry, you can visit this page again later!</div>';
		} 
	?>

		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-6">

				<div class="panel panel-success panel-success-custom-dark">

					<div class="panel-heading clearfix">My tutor list

						<a href="#" class="assign_all_tutors btn btn-custom btn-no-margin pull-right">Assign all</a>

					</div>

					<ul class="list-group" id="deassign_tutor_list">

						<!-- <?php

							if (count($not_assigned_tutors) == 0) {

								echo '<li class="list-group-item question_text helper_text">No tutor</li>';

							} else {
								foreach ($not_assigned_tutors as $tutors) {

									echo '<li class="list-group-item question_text student_li">';

									echo '<span>'.$tutors->fullname.'</span>';

									echo '<a href="#" id="'.$tutors->id.'" class="btn btn-custom btn-no-margin pull-right assign_student">Assign</a>';

									echo '</li>';

								}

							}

						?> -->

					</ul>

				</div>

			<div align="right" id="pagination"></div>

			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">

				<div class="panel panel-success">

					<div class="panel-heading clearfix">Assigned tutor list

						<a href="#" class="deassign_all_tutors btn btn-danger btn-no-margin pull-right">Remove all</a>

					</div>

					<ul class="list-group" id="assigned_tutor_list">

						<?php

							if (count($assigned_tutors) == 0) {

								echo '<li class="list-group-item question_text helper_text">No assigned tutor yet</li>';

							} else {

								echo '';

								foreach ($assigned_tutors as $tutors) {

									echo '<li class="list-group-item question_text student_li">';

									echo '<span>'.$tutors->username.' ()</span>';

									echo '<a href="#" id="'.$tutors->id.'" class="btn btn-danger btn-no-margin pull-right deassign_student">Remove</a>';

									echo '</li>';

								}

							}

						?>

					</ul>

				</div>

				<div align="right" id="paginations"></div>

			</div>

		</div>

	</div>

</div>


<div class="section">

	<div class="container">

		<div class="row">

			<div class="container">

				<div class="col-sm-offset-4 col-sm-4">

					<div class="text-center">

						<form action="<?php echo base_url().'administrator/assignWorksheet/'.$worksheet_id; ?>" id="assign_worksheet_form" method="post">

							<?php

								foreach ($assigned_tutors as $tutors) {

									echo '<input type="hidden" class="assigned_student" name="assigned_tutors[]" value="' . $tutors->id . '">';

								}

							?>

							<input type="hidden" name="worksheet_id" value="<?php echo $worksheet_id; ?>">

							<input type="submit" class="btn btn-custom btn-no-margin btn-block" value="Finalize" id="assign_student_submit_button">

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>


<script type='text/javascript'>
	$(document).ready(function(){

		var assigned_tutor_list = $('#assigned_tutor_list');

		var deassigned_tutor_list = $('#deassign_tutor_list');

		var one;

		var pageno;

		loadPagination(1);

		// Load pagination
		function loadPagination(pageno, exclude){

			var exclude = [];

			$('#assigned_tutor_list li a').each(function(){

				exclude.push($(this).attr('id'));

			});

			$.ajax({

				url: '<?php echo base_url()?>administrator/pagination/'+pageno,

				data:{exclude:exclude},

				type: 'post',

				dataType: 'json',

				success: function(data){

					$('#pagination').html(data.pagination);

					createTable(data.result,data.row);

				}

			});

		}

		function loadPaginations(pageno, exclude){

			$.ajax({

				url: '<?php echo base_url()?>administrator/paginations/'+pageno,

				data:{exclude:exclude},

				type: 'post',

				dataType: 'json',

				success: function(data){

					$('#paginations').html(data.paginations);

					createTables(data.result,data.row);

					var all_result = data.all_result;

					for(index in all_result) {
						var id = all_result[index].id;

						var name = all_result[index].username;

						// var level = all_result[index].level_name;

						if($('#pagination').length) {

							$('#assign_worksheet_form').append('<input type="hidden" class="hidden_assigned_student" name="assigned_tutors[]" value="' + id + '">');

						}
					}

				}

			});

		}

		$(document).on('click', '.assign_student', function(e) {
			e.preventDefault();

			var new_button = $(this).removeClass('assign_student btn-custom').addClass('deassign_student btn-danger').html('De-assign')[0];

			var new_row = '<li class="list-group-item question_text student_li"><span>' + $(this).prev().text() + '</span>'+

			'<a href="#" id="' + $(this).attr('id') + '" class="btn btn-danger btn-no-margin pull-right deassign_student">Remove</a>' + '</li>';

			$(this).parent().remove();

			if (assigned_tutor_list.children('.helper_text').length > 0) {

				assigned_tutor_list.children('.helper_text')[0].remove();

			}

			assigned_tutor_list.append(new_row);

			if (deassigned_tutor_list.children().length == 0) {

				deassigned_tutor_list.append('<li class="list-group-item question_text helper_text">No tutor</li>');

			}

			if($('ul.pagination').text()){

				var pageno = $('ul.pagination li.page-item-active').text();

			} else {

				var pageno = 1;

			}

			var exclude = [];

			$('#assigned_tutor_list li a').each(function(){

				exclude.push($(this).attr('id'));

			});

			$('#assign_worksheet_form').append('<input type="hidden" class="hidden_assigned_student" name="assigned_tutors[]" value="' + $(this).attr('id') + '">');

			loadPagination(pageno, exclude);

		});

		$(document).on('click', '.assign_all_tutors', function(e) {

			e.preventDefault();

			var pageno = 1;

			var exclude = 'NULL';

			$('#pagination').empty();

			$('#deassign_tutor_list').empty();

			loadPaginations(pageno, exclude);

		});

		$(document).on('click', '.deassign_all_tutors', function(e) {

			e.preventDefault();

			var pageno = 1;

			var exclude = '';

			$('#paginations').empty();

			$('#assigned_tutor_list').empty();

			loadPagination(pageno, exclude);

		});

		// Detect pagination click
		$('#pagination').on('click','a',function(e){

			e.preventDefault(); 

			pageno = $(this).attr('data-ci-pagination-page');

			loadPagination(pageno);

		});

		// Detect pagination click
		$('#paginations').on('click','a',function(e){

			e.preventDefault(); 

			pageno = $(this).attr('data-ci-pagination-page');

			loadPaginations(pageno);

		});

		// Create table list
		function createTable(result,sno){

			sno = Number(sno);

			$('#deassign_tutor_list').empty();

			for(index in result){

				var id = result[index].id;

				var name = result[index].username;

				// var level = result[index].level_name;

				sno+=1;

				var tr = "<li class='list-group-item question_text student_li'>";

				tr += "<span>"+ name +"</span>";

				tr += "<a href='#' id='"+ id +"'  class='btn btn-custom btn-no-margin pull-right assign_student'>Assign</a>";

				tr += "</li>";

				$('#deassign_tutor_list').append(tr);

			}

		}

		// Create table list
		function createTables(result,sno){

			sno = Number(sno);

			$('#deassign_tutor_list').empty();

			$('#assigned_tutor_list').empty();

			for(index in result){

				var id = result[index].student_id;

				var name = result[index].username;

				var level = result[index].level_name;

				sno+=1;

				var tr = "<li class='list-group-item question_text student_li'>";

				tr += "<span>"+ name +" ("+ level +")</span>";

				tr += "<a href='#' id='"+ id +"'  class='btn btn-danger btn-no-margin pull-right deassign_student'>Remove</a>";

				tr += "</li>";

				$('#assigned_tutor_list').children('.helper_text').remove();

				$('#assigned_tutor_list').append(tr);

			}

		}

		 

	});

</script>