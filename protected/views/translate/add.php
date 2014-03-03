<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<?php
Yii::app()->clientScript->registerCoreScript('jquery.ui');
?>
<style>
    .ui-menu-item{
        font-size: 20px;
        border: 1px solid silver;
        border-radius: 6px;
        height: 5   0px;
        
    }
    .labels{
        font-size: 20px;
        font-weight: bolder;
        color: blue;
    }
    .results{
        font-size: 25px;
        font-weight: bolder;
        color: red;
        font-family: Tahoma;
    }
    
    input[type="button"]{
        width: 250px;
        font-size: 20px;
        border: 1px solid blue;
        background: silver;
        border-radius: 5px;
    }
    
    .ajax-load{
        background-image: url("<?php echo Yii::app()->baseUrl?>/images/ajax-loader.gif")!important;
        background-repeat: no-repeat!important;
        background-position: 212px 8px!important;
    }
</style>
<script>
    function getWords(){
        var words = [];
        $.ajax({
            url:'?r=translate/Autocomplete',
            type:"post",
            dataType:"json",
            async:false,
            data:{
                word:$('#wordfield').val()
            },
            success:function(data){
                words =  data.words ;
            }
        })
    }

    $(function(){
        $(document).on('pageshow', "[data-role=page]", function () { setTimeout(function () { $('#wordfield').trigger('click').focus(); }, 50); });
//        $('#wordfield').trigger('click');

        $('#wordfield').autocomplete(
            {
                source: function(request, response) {
                    $.ajax({
                        url: "?r=translate/Autocomplete",
                        dataType: "json",
                        data: {word:$('#wordfield').val()},
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                delay:50,
                minLength: 2
            }
        );
        $('#wordfield').on('keyup paste change input propertychange',function(){
            $('#save').prop('disabled','disabled');
            $('#russian').html('');
            $('#armenian').html('');
            if(isNaN($(this).val()) &&  $(this).val() != ''){
                $('#get').removeAttr('disabled');
            }else{
                $('#get').prop('disabled','disabled');
            }
        })
        $('#wordfield').keydown(function(e){
            if(e.keyCode == '13'){
                $('#get').click();
            }
        })
        $('#get').click(function(){
            $(this).addClass('ajax-load').prop('disabled','disabled');
            var thisElement = $(this); 
        $.ajax({
            url: "?r=translate/Translate",
                        dataType: "json",
                        data: {word:$('#wordfield').val()},
                        type:"post",
                        dataType:"json",
                        success: function(data) {
                            thisElement.removeClass('ajax-load').removeAttr('disabled');;
                            if(Object.keys(data.ru).length > 0){
                                $('#russian').html('');
                                $('#armenian').html('');
                                $.each(data.ru,function(index,element){
                                    $('#russian').append('<option>'+element+'</option>');
                                });
                                $.each(data.hy,function(index,element){
                                    $('#armenian').append('<option>'+element+'</option>');
                                });
                                
                                $('#save').removeAttr('disabled','disabled');
                            }

                        }
            })
        })

        $('#save').click(function(){
            $(this).addClass('ajax-load');
            var thisElement = $(this); 
            $.ajax({
                url: "?r=translate/AddWord",
                data: {
                    addAjax:1,
                    english:$('#wordfield').val(),
                    russian:$('#russian option:selected').text(),
                    armenian:$('#armenian option:selected').text()
                },
                type:"post",
                success: function(data) {
                    thisElement.removeClass('ajax-load').prop('disabled','disabled');
                    console.log(data);
                }
            })
        })
    })
    
    

</script>

<input type="text" id="wordfield" autofocus="" style="font-size: 23px;" placeholder="Type your word" />
<br />
<input type="button" value="Get translate" id="get" disabled="disabled"/>
<br /><br />
<label for="russian" class="labels">Russian: </label>
<select id="russian" class="results">
</select>
<br />
<label for="armenian" class="labels">Armenian: </label>
<select id="armenian" class="results">
</select>
<br />
<input type="button" id="save" value="Save word" disabled="disabled">
