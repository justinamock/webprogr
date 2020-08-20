// $("main").hide();
// $("main").show();

let busena = true;

function slepti() {
if (busena) {
    $("main").hide();
    document.getElementsByTagName('main').style.display = 'block';
} else {
     $("main").show();
}

busena = !busena;    //busena NELYGU busenai

}

$('header').click(
    function(){
        $('main').toggle()
    }
);
