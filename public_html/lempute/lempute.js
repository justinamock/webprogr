let lemposBusena = false;
let lempa = document.getElementById('lempute');

function toggleLamp() {
    if (lemposBusena) {
        lempa.src = 'https://previews.123rf.com/images/ericmilos/ericmilos0912/ericmilos091200136/6109526-3d-render-of-light-bulb-on-white.jpg';
    } else {
        lempa.src = 'https://previews.123rf.com/images/murika/murika1511/murika151100069/48123160-bright-glowing-incandescent-light-bulb-on-a-white-background.jpg';
    }
    lemposBusena = !lemposBusena;
}
