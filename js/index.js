$(document).ready(function(){
    $("#formLoginV3m").validetta({
        bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(evnt){
            evnt.preventDefault();
            var tipoAlerts = new Array("red","green");
            var iconos = new Array("fas fa-user fa-2x","fas fa-check fa-2x");
            $.ajax({
                method:"POST",
                url:"./pages/index_AX.php",
                data:$("#formLoginV3m").serialize(),
                cache:false,
                success:function(respAX){
                    var AX = JSON.parse(respAX);
                    $.alert({
                        title:"TWeb 2020-1",
                        content: AX.msj,
                        icon:iconos[AX.val],
                        type:tipoAlerts[AX.val],
                        onDestroy:function(){
                            window.location.replace("./pages/alumno.php");
                        }
                    });
                }
            });
        }
    });
});