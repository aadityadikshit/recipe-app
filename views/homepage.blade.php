<html>
<head>

</head>
<body>
    <form id="recipe-import">
        <div>
            <input type="text" placeholder="Enter recipe URL" id="recipe-url">
            <button id="submit-recipe">Submit</button>
        </div>
    </form>
</body>
</html>
<script  src="<?php echo config('epicconfig.ASSET.ASSET_URL').'/js/jquery-1.11.1.min.js';?>"></script>
<script>
$(document).ready(function(){
    $('#submit-recipe').on('click',function(){
        var recipeurl = $('#recipe-url').val();
        alert("recipe url"+recipeurl);
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'http://local.epicon-revamp.com/parse-recipe-two',
            method: 'GET',
            contentType: 'application/x-www-form-urlencoded',
            data:recipeurl,
            success: function( response, textStatus, jQxhr ){
                if (response) {
                    alert("success");
                }
            },
            complete: function () {
                // $(".smartsearch-response ul").mCustomScrollbar({
                //     theme:"minimal"
                // });
            },
            error: function( jqXhr, textStatus, errorThrown ){
                alert( errorThrown );
            }
        });
    });
});
</script>