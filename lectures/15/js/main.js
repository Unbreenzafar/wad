var currentbalance=20000;
var balance=document.getElementById("balance");
 function initialize()
 {
     var T=document.getElementById("title");
     T.innerHTML="Unbreen zafar";
     balance.innerHTML=currentbalance;
     var c=document.getElementById("currency");
     c.innerHTML="PKR";
     var i=document.getElementById("IBAN");
     i.innerHTML="0302-4799126";
 }
initialize();
 function  input(){

         var A = document.getElementById("deposit").value;
         if (!isNaN(A)) {
             currentbalance = currentbalance + parseInt(A);
             balance.innerHTML = currentbalance;
             var Transaction = document.getElementById("transaction-table");
             Transaction.innerHTML += '<tr>'
                 + '<th align="left" valign="middle" scope="col">' + new Date() + '</th>'
                 + '<th align="left" valign="middle" scope="col">' + "credit" + '</th>'
                 + '<th align="left" valign="middle" scope="col">' + A + '</th>'
                 + '</tr>';
         }
         else {
             document.getElementById("deposit-msg").innerText = "Enter Invalid Amount";
         }



 }
function  input1() {

        var A =  document.getElementById("withdraw").value;
        if(!isNaN(A) && A<=currentbalance)
        {
            currentbalance = currentbalance - parseInt(A);
            balance.innerHTML=currentbalance;
            var Transaction = document.getElementById("transaction-table");
            Transaction.innerHTML+= '<tr>'
                + '<th align="left" valign="middle" scope="col">'+new Date()+'</th>'
                + '<th align="left" valign="middle" scope="col">'+"debit"+'</th>'
                + '<th align="left" valign="middle" scope="col">'+A+'</th>'
                +'</tr>';
        }
        else
        {
            document.getElementById("withdraw-msg").innerText="Don't have sufficient amount in account";
        }

}
