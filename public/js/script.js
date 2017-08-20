$(document).ready(function(){

});

$('#perPage').change(function(){
    console.log('change');
    $(this).closest('form').submit();
});