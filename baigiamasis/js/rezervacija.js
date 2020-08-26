//laukeliu validacija

function validuotiForma(){
    if (isEmpty(document.getElementById('vardas').value.trim())) {
    alert('dddddd');
    return false;
    }
    if (isEmpty(document.getElementById('pavarde').value.trim())) {
    alert('privalomas laukelis');
    return false;
    }
    if (isEmpty(document.getElementById('telNr').value.trim())) {
    alert('privalomas laukelis');
    return false;
    }
    if (isEmpty(document.getElementById('email').value.trim())) {
    alert('privalomas laukelis');
    return false;
    }

    if (isEmpty(document.getElementById('atvykimas').value.trim())) {
    alert('privalomas laukelis');
    return false;
    }
    if (isEmpty(document.getElementById('isvykimas').value.trim())) {
    alert('privalomas laukelis');
    return false;
    }
    if (isEmpty(document.getElementById('zmoniuSkaicius').value.trim())) {
    alert("privalomas laukelis");
    return false;
    }
    return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
