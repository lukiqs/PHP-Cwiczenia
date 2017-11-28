<?php

if(isset($_POST['init'])){
    $a[msg] = "wiadomosc ze skryptu";
    echo json_encode($a);
    exit();
}
?>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<script>
$(document).ready(function(){
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               init : true
            },
            success : function(json) {
                alert(json[msg])
            }
            ,error: function(err) {
                 alert(JSON.stringify(err));
            }
        }); 
}
</script>
