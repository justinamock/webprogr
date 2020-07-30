let metai =1988;
let men = 10;
let diena =23;
sum = metai %10 + men %10 +diena%10;
// console.log("suma = " + sum);


/////////
let a = 3;
let b = 6;

let c =4;
let d =8;

if ( c < b) {
    console.log(c + " ir " + b);
} else {
    console.log("ne");
}

if (c < a && a < d && d < b) {
    console.log(a + " ir " + d);
} else {
    console.log("ne");
}

if (a < c && c < d && d < b) {
console.log(c + " ir " + d);
} else {
    console.log("ne");
}

if (c < a && a < b && b < d) {
    console.log(a + " ir " + b);
} else {
    console.log("ne");
}
