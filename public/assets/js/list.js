function createlist(){
    $("#list").css('display',"block");
}

function create(){
    var title = $("#title").val();
    $("#titleforcreatelist").html(title);
    $("#list").css('display',"none");
    $("#cards1").css('display',"block");
    $("#cards2").css('display',"block");
}

function cardlabelinp(){
    var cardinp = $("#cardlabelinp1").val();
    $("#cardlabel1").html(cardinp);
    $("#cardlabelinp1").css('display',"none");
    if($("#cardlabel1").css('display',"block") && $("#cardlabelinp1").val() != ''){
        $("#cardlabelinp1").css('display',"none");
    }

}

function cardlabel(){
    $("#cardlabelinp1").css('display',"block");
    $("#cardlabel1").css('display',"none");
    var cardinp = $("#cardlabelinp1").val();
    $("#cardlabel1").html(cardinp);

}

function cardlabelinp2(){
    var cardinp2 = $("#cardlabelinp2").val();
    $("#cardlabel2").html(cardinp2);
    $("#cardlabelinp2").css('display',"none");
    if($("#cardlabel2").css('display',"block") && $("#cardlabelinp2").val() != ''){
        $("#cardlabelinp2").css('display',"none");
    }
}

function cardlabel2(){
    var cardinp = $("#cardlabelinp2").val();
    $("#cardlabel2").html(cardinp);
    $("#cardlabelinp2").css('display',"block");
    $("#cardlabel2").css('display',"none");
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
