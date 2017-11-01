$(document).ready(function() { 
    var idClick;
    var idCat;
    
    idCat = $("#divZoneVS").data("cat");
    
    $("#divGauche").on("click", function() {
        idClick = $(this).data("id");
        
        $.ajax({
           type: "POST",
           data: "idCat=" + idCat + "&idPers=" + idClick,
           url: "../services/clickService.php",
           success: function() {
               
           }
        });
    });
    
    $("#divDroite").click(function() {
        idClick = $(this).data("id");
    });
});

