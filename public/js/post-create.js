$(document).ready(function(){
    var $input = $('#file');

    $input.change(function(input){
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#uploaded-img').attr('src', e.target.result).css({
                    display: 'inline-block'
                });
            }

            reader.readAsDataURL(this.files[0]);
        }
    });

    $('#remove-img').click(function(e){
        e.preventDefault();
        $input.get(0).files[0] = {};
        $('#uploaded-img').css({
            display: 'none'
        });
    });




});

