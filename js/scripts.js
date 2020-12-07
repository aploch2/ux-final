$(document).ready(function(){


    // close modal
    $('#close').click(function(){
        $('#calendar-modal').toggle();
    });

    // open modal
    $('#next-event').click(function(){
        $('#calendar-modal').toggle();
    });

    /////////////////////////////

    // continue button 1
    $('#next1').click(function(){
        if($('#sponsor').prop("checked", true)){
            $('#step-sponsor').css("display", "block");
        }
    });

    $('#add-event-button').click(function(){
        $('#select-event-2').toggle();
        $('#add-event').toggle();
        $('#remove-event-button').toggle();
    });

    $('#remove-event-button').click(function(){
        $('#select-event-2').toggle();
        $('#add-event').toggle();
        $('#remove-event-button').toggle();
        $("#select-event-2").prop('selectedIndex', 0);
    })
    
    var Exhibitor = $('#Exhibitor');

    Exhibitor.click(function(){
        
    })
    if (Exhibitor.checked === true){
        $('#to-booth-selection').html("Continue to Booth Selection");
        // $("#to-booth-selection").attr('disabled', false);
        console.log('selected exhibitor');
    } else {
        $('#to-booth-selection').html("Finish Registration");

    }
    Exhibitor.click(function(){
        if(Exhibitor.prop('checked', true)){
            $("#registration-form").attr('action', 'booth-selection.php');
            console.log('booth');
        } else {
            $("#registration-form").attr('action', 'confirmation.php');
            console.log('confirm');
        }
    });

    /////////////////////////////////////

    $("#add-to-calendar").click(function(){
        alert('Event(s) added to Calendar');
    });

    
    
    $("#map-icon-2").click(function(){
        $("#booth-a2").toggle();
    });
    $("#map-icon-3").click(function(){
        $("#booth-a3").toggle();
    });
    $("#map-icon-4").click(function(){
        $("#booth-a4").toggle();
    });
    $("#map-icon-7").click(function(){
        $("#booth-b2").toggle();
    });
    $("#map-icon-8").click(function(){
        $("#booth-b3").toggle();
    });
    $("#map-icon-9").click(function(){
        $("#booth-b4").toggle();
    });
    
    
    // $('#map-icon-1').prop('checked', false);
    // if ($('#map-icon-1').checked === true){
    //     $('#content-right-body').html('<p>A1</p>');
    // } else {
    //     $('#content-right-body').html('<p></p>');
    // }


});

function chooseNextEvent() {
    alert('Please choose the next upcoming event');
}

function next1() {
    var Sponsor = document.getElementById("Sponsor");
    var Exhibitor = document.getElementById("Exhibitor");
    

    if (Exhibitor.checked == true && Sponsor.checked == true) {
        console.log('Both');
        $('#next-1').prop("disabled", false);
        $('#next-1').html("Continue to Sponsor Information");
    } else if(Exhibitor.checked == true) {
        console.log('Exhibitor');
        $('#next-1').prop("disabled", false);
        $('#next-1').html("Continue to Exhibitor Information");
    } else if(Sponsor.checked == true) {
        console.log('Sponsor');
        $('#next-1').prop("disabled", false);
        $('#next-1').html("Continue to Sponsor Information");
    } else {
        console.log('unchecked');
        $('#next-1').html("Continue to Next Step");
        $('#next-1').prop("disabled", true);
    }

    /////////////////////////////////////////

    if (Exhibitor.checked === true){
        $('#to-booth-selection').val("Continue to Booth Selection");
        console.log('selected exhibitor');
    } else {
        $('#to-booth-selection').val("Finish Registration");

    }

    ///////////////////////////////////////////

   

}

// function boothSelected(){
//     if ($('#map-icon-1').prop("checked", true)){
//         $('#content-right-body').html('<p>A1</p>');
//     } else if ($('#map-icon-1').prop("checked", false)){
//         $('#content-right-body').html('<p></p>');
//     }
// }
// function next2() {
//     var rep = $('#rep-name');
//     var prodSpon = $('#product-description-sponsor');
//     var exhibitor = $('#exhibitor-name');
//     var website = $('#website');
//     var prod = $('#product-desription');
//     var length = $('#length');
//     var width = $('#width');
//     var height = $('#height');
//     var autoTag = $('#auto-tag');
//     var autoState = $('#auto-state');
//     var vehicleType = $('#vehicle-type');
//     var vehicleColor = $('#vehicle-color');

//     if(rep.length === 0 ){
//         $('#next2').prop('disabled', false);
//     }
// }

// function next3() {
//     var Exhibitor = $('#Exhibitor');

//     if (Exhibitor.check === true){
//         $('#to-booth-selection').html("Continue to Booth Selection");
//     } else {
//         $('#to-booth-selection').html("Finish Registration");

//     }
// }