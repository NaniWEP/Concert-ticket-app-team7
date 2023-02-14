const choicePayment = document.getElementById ("choicePayment");
const overly = document.getElementById ("overly");
// ABA dom
const abaChosen = document.getElementById ("abaChoose");
const abaPayment = document.getElementById ("abaPayment");
const backABABtn = document.getElementById ("abaBack");
let choiceOfPayment = true;

// Credit Card dom
const creditCardChosen = document.getElementById ("creditCardChoose");
const creditCardPayment = document.getElementById ("creditCardPayment");
const backCreditCardBtn = document.getElementById ("creditCardback");

var cardNumber = document.getElementById('cardNumber');
var expireDate = document.getElementById('expireDate');

function showABAPayment(){

    abaPayment.id = "showABAPayment";
    choicePayment.id = "chosenPayment";
    choiceOfPayment = false;
    console.log(choiceOfPayment)

}
function closeABAPayment()
{
    document.getElementById ("showABAPayment").id = "abaPayment";
    document.getElementById ("chosenPayment").id = "choicePayment";
    choiceOfPayment = true;
}
function showCreditCardPayment()
{

    creditCardPayment.id = "showCreditCardPayment";
    choicePayment.id = "chosenPayment";
    choiceOfPayment = false;
    console.log(choiceOfPayment)
}
function closeCreditCardPayment()
{
    document.getElementById ("showCreditCardPayment").id = "creditCardPayment";
    document.getElementById ("chosenPayment").id = "choicePayment";
    choiceOfPayment = true;
}
// // show ABA Payment
if (choiceOfPayment == true)  
{
    abaChosen.addEventListener("click", showABAPayment)
}
backABABtn.addEventListener("click", closeABAPayment);

// show Credit Card Payment
if (choiceOfPayment == true)  
{
    creditCardChosen.addEventListener("click", showCreditCardPayment)
}

backCreditCardBtn.addEventListener("click", closeCreditCardPayment)

console.log(choiceOfPayment)





// expire date
expireDate.onkeyup = function (e) {
    // document.getElementById("ex").innerHTML = expireDate.value;
    var expireNum = this.value;
    console.log(expireNum);
    this.value = expireNum.replace(/^(\d{2})(?:\/?)(\d{1,2})$/, `$1/$2`).replace(/^(\d{2})\/$/, '$1');
}
// 
cardNumber.onkeyup = function(e) {
    // document.getElementById("name").innerHTML = cardNum.value;
    if (this.value == this.lastValue) return;
    var caretPosition = this.selectionStart;
    var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
    var parts = [];
    for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
        parts.push(sanitizedValue.substring(i, i + 4));
    }

    for (var i = caretPosition - 1; i >= 0; i--) {
        var c = this.value[i];
        
        if (c < '0' || c > '9') {
            caretPosition--;
        }
    }
    caretPosition += Math.floor(caretPosition / 4);

    this.value = this.lastValue = parts.join(' ');
    this.selectionStart = this.selectionEnd = caretPosition;
}


// abaChosen.addEventListener("click", () => 
// abaPayment.id = "showABAPayment"
// )
// abaChosen.addEventListener("click", () => 
// choicePayment.id = "chosenPayment"
// )
// overly.addEventListener("click", () => 
// abaPayment.id = "abaClose"
// )
// overly.addEventListener("click", () => 
// choice.id = "choosingPayment"
// )