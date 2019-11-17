$(document).ready(function () {
    var i = 1;
    $('#add-course').click(function () {
        i++;
        $('#input-courses').append('<tr id="row' + i + '" ><td><select class="form-control" name="course_id[]"><option>----ROOT----</option></select></td><td><button class="btn btn-danger btn-remove"id="' + i + '" type="button" name="add"><i class="far fa-trash-alt"></i></button></td></tr>')
        $('.btn-remove').click(function () {
            var button_id =($this).attr("id");
            $("#row"+button_id+"").remove();
        });
    });
    
});
