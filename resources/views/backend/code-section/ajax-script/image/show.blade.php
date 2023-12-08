$(document).ready(function () {
    
    $('#image').change(function(e){

        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }

        reader.readAsDataURL(e.target.files['0']);

    });
    
});

$(document).ready(function () {
    
    $('#photo').change(function(e){

        var reader = new FileReader();
        reader.onload = function(e){
            $('#showPhoto').attr('src',e.target.result);
        }

        reader.readAsDataURL(e.target.files['0']);

    });
    
});

$(document).ready(function () {
    
    $('#ico').change(function(e){

        var reader = new FileReader();
        reader.onload = function(e){
            $('#showIco').attr('src',e.target.result);
        }

        reader.readAsDataURL(e.target.files['0']);

    });
    
});