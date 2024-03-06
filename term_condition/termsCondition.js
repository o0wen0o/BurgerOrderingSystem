var termDelivery = document.getElementById("termDelivery");
var termSelfCollect = document.getElementById('termSelfCollect');
var termVoucher = document.getElementById('termVoucher');
var termBirthday = document.getElementById('termBirthday');

function changeTerm(num) {

    termDelivery.style.display = "block";
    termSelfCollect.style.display = "none";
    termVoucher.style.display = "none";
    termBirthday.style.display = "none";

    switch (num) {
        case 1:
            termDelivery.style.display = "block";
            termSelfCollect.style.display = "none";
            termVoucher.style.display = "none";
            termBirthday.style.display = "none";
            break;
        case 2:
            termSelfCollect.style.display = "block";
            termDelivery.style.display = "none";
            termVoucher.style.display = "none";
            termBirthday.style.display = "none";
            break;
        case 3:
            termVoucher.style.display = "block";
            termSelfCollect.style.display = "none";
            termDelivery.style.display = "none";
            termBirthday.style.display = "none";
            break;
        case 4:
            termBirthday.style.display = "block";
            termSelfCollect.style.display = "none";
            termDelivery.style.display = "none";
            termVoucher.style.display = "none";
            break;
    }
}