
 function step_1_form(){
	var total_words = $('#total_words').val();
	var words_length = $('#word_length').val();
	$('.part_1').css("display", "none");
	 if (total_words.length > 0){
		for(var $i = 0; $i < total_words; $i++ ) {
			var count = $i+1;
			$('.part_2').append('Enter Word ' + count + '<input type="text" name="words_' + $i + '" maxlength="' + words_length + '" required><br>');
		}
		$('.part_2').append('<button type="button" onclick="step_2_form();">Submit</button>');
	}
}
function step_2_form() {
	$('.part_2').css("display", "none");
	$('.part_3').append('Enter limit of queries <input type="number" name="number_limit" id="number_limit" required><br>');
	$('.part_3').append('<button type="button" onclick="step_3_form();">Submit</button>');
}
function step_3_form() {
	$('.part_3').css("display", "none");
	var number_limit = $('#number_limit').val();
	if (number_limit > 0 ) {
		for(var $i = 0; $i < number_limit; $i++ ) {
			var count = $i+1;
			$('.part_4').append('Enter search query ' + count + '<input type="text" name="query_' + $i + '" required><br>');
		}
		$('#submit').css("display", "block");
	}
}

function iteration_num_form(){
	var iteration_num = $('#iteration_num').val();	
	$('.iterate_part_1').css("display", "none");
	 if (iteration_num.length > 0){
		for(var $i = 0; $i < iteration_num; $i++ ) {
			var count = $i+1;
			$('.iterate_part_2').append('<h3>Enter details for step ' + count + '</h3><div class="col-sm-8"><label>Enter Sentence: </label><textarea rows="2" cols="50" name="sentence_' + $i + '" required></textarea><br>');
			$('.iterate_part_2').append('<label>Enter Word: </label><input type="text" name="words_' + $i + '" required><br>');
			$('.iterate_part_2').append('<label>Select option: </label><select name="option_' + $i + '"><option value="yes">Y</option><option value="no">N</option></select><br>');
			$('.iterate_part_2').append('<label>Select search start position: </label><input type="number" name="num_' + $i + '" required><br></div>');
		}
    $('#submit').css("display", "block");
	}
}
