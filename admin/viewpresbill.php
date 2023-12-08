<!DOCTYPE html>
<html>
<head>
  <title></title>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400&display=swap" rel="stylesheet">

  <style type="text/css">
    * {
    margin: 0;
    padding: 0;
}

body {
    font-family: roboto;
    background: skyblue;
}

.material-icons {
    cursor: pointer;
}

.invoice-container {
    margin: auto;
    padding: 0px 20px;
}

.invoice-header {
    display: flex;
    padding: 70px 0%;
    width: 100%;
}

.title {
    font-size: 18px;
    letter-spacing: 3px;
    color: rgb(66, 66, 66);
}

.date {
    padding: 5px 0px;
    font-size: 14px;
    letter-spacing: 3px;
    color: rgb(156, 156, 156);
}

.invoice-number {
    font-size: 17px;
    letter-spacing: 2px;
    color: rgb(156, 156, 156);
}


.space {
    width: 50%;
}

table {
    table-layout: auto;
    width: 100%;
}
table, th, td {
    border-collapse: collapse;
  }

th {
    padding: 10px 0px;
    border-bottom: 1px solid rgb(187, 187, 187);
    border-bottom-style: dashed;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 2px;
    color: black;
    text-align: left;
    
}


td {
    padding: 10px 0px;
    border-bottom: 0.5px solid rgb(226, 226, 226);
    text-align: left;
    

    
}

.dashed {
    border-bottom: 1px solid rgb(187, 187, 187);
    border-bottom-style: dashed;
}

.total {
    font-weight: 800;
    font-size: 20px !important;
    color: black;
}


input[type=number] {
    text-align: center ;
    max-width: 50px;
    font-size: 15px;
    padding: 10px;
    border: none;
    outline: none;
}

input[type=text] {
    max-width: 170px;
    text-align: left;
    font-size: 15px;
    padding: 10px;
    border: none;
    outline: none;
}

input[type=text]:focus {
    border-radius: 5px;
    background: #ffffff;
    box-shadow:  11px 11px 22px #d9d9d9, 
             -11px -11px 22px #ffffff;
}

input[type=number]:focus {
    border-radius: 5px;
    background: #ffffff;
    box-shadow:  11px 11px 22px #d9d9d9, 
             -11px -11px 22px #ffffff;
}
/*Hide Arrows From Input Number*/
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


.float{
    
    width:40px;
    height:40px;
    background-color:blue;
    color:#FFF;
    border-radius:100%;
    text-align:center;
    box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.048),
  0 6.7px 5.3px rgba(0, 0, 0, 0.069),
  0 12.5px 10px rgba(0, 0, 0, 0.085),
  0 22.3px 17.9px rgba(0, 0, 0, 0.101),
  0 41.8px 33.4px rgba(0, 0, 0, 0.122),
  0 100px 80px rgba(0, 0, 0, 0.17);
}

.float:hover {
    background-color:#ff057e;
}

.plus{
    margin-top:10px;
}

#sum {
    text-align: right;
    width: 100%;
}

#sum input[type=text] {
    width: 100%;
    font-size: 33px !important;
    color: black;
    text-align: right !important;
   
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    body {
        background:po;
    }
    .invoice-container {
        border: solid 1px gray;
        width: 60%;
        margin: 50px auto;
        padding: 40px;
        padding-bottom: 100px;
        border-radius: 5px;
        background: white;
        box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.02),
  0 6.7px 5.3px rgba(0, 0, 0, 0.028),
  0 12.5px 10px rgba(0, 0, 0, 0.035),
  0 22.3px 17.9px rgba(0, 0, 0, 0.042),
  0 41.8px 33.4px rgba(0, 0, 0, 0.05),
  0 100px 80px rgba(0, 0, 0, 0.07);
    }

    .title-date {
        width: 20%;
    }
    .invoice-number {
        width: 20%;
    }
    .space {
        width: 80%;
    }

}


  </style>


</head>
<body>





    <div class="invoice-container">
        <div class="invoice-header">
            <div class="title-date">
                <h2 class="title">KRAFTEC</h2>
              <!--   <p class="date">01/12/20</p> -->
            </div>
            <!-- <div class="space"></div>
            <p class="invoice-number">#08 279</p>
        </div> -->
        <div class="invoice-body">
            <table>
                <thead>
                    <th style="padding-left:12px;">PRODUCT</th>
                    <th>UNIT</th>
                    <th>PRICE</th>
                    <th>AMOUNT</th>
                    <th style="text-align: right;">ACTION</th>
                </thead>

                <tbody id="table-body">
                <tr class="single-row">
                    <td><input type="text" placeholder="Product name" class="product left"></td>
                    <td><input type="number" placeholder="0" name="unit" class="unit" id="unit" onkeyup="getInput()"></td>
                    <td><input type="number" placeholder="0" name="price" class="price" id="price" onkeyup="getInput()"></td>
                    <td><input type="number" placeholder="0" name="amount" class="amount" id="amount" disabled></td>
                    <td style="text-align: right;"><span class="material-icons"  >delete_outline</span></td>
                </tr>
                
                <tr style="padding-left: 20px">
                    <td class="dashed "><div class="float">
                        <a href="#" class="float" id="add-row">
                            <span class="material-icons plus">add</span>
                        </a>
                    </div>
                </td>
                    <td class="dashed"></td>
                    <td class="dashed"></td>
                    <td class="dashed"></td>
                    <td class="dashed"></td>
                </tr>
            </tbody>
            </table>
            <div id="sum"><input type="text" placeholder="0.00" name="total" class="total" id="total" disabled></div>

        </div>
    </div>


<button onclick="window.print()">Print</button>

  <script type="text/javascript">
    
//Add new row
const tBody = document.getElementById("table-body");

addNewRow =()=> {
    const row = document.createElement("tr");
    row.className = "single-row";
    row.innerHTML = `<td><input type="text" placeholder="Product name" class="product" id="product"></td>
                    <td><input type="number" placeholder="0" name="unit" class="unit" id="unit" onkeyup="getInput()"></td>
                    <td><input type="number" placeholder="0" name="price" class="price" id="price" onkeyup="getInput()"></td>
                    <td><input type="number" placeholder="0" name="amount" class="amount" id="amount" disabled></td>
                    <td style="text-align: right;"><span class="material-icons" action="delete">delete_outline</span></td>`
    
    tBody.insertBefore(row, tBody.lastElementChild.previousSibling);
}


document.getElementById("add-row").addEventListener("click", (e)=> {
    e.preventDefault();
    addNewRow();
});


//GET INPUTS, MULTIPLY AND GET THE ITEM PRICE
getInput =()=> {
    var rows = document.querySelectorAll("tr.single-row");
    rows.forEach((currentRow) => {
        var unit = currentRow.querySelector("#unit").value;
        var price = currentRow.querySelector("#price").value;

        amount = unit * price;
        currentRow.querySelector("#amount").value = amount;
        overallSum();
        
    })
};


//Get the overall sum/Total
overallSum =()=> {
    var arr = document.getElementsByName("amount");
    var total = 0;
    for(var i = 0; i < arr.length; i++) {
        if(arr[i].value) {
            total += +arr[i].value;
        }
        document.getElementById("total").value = total;
    }
}



//Delete row from the table
tBody.addEventListener("click", (e)=>{
    let el = e.target;
    const deleteROW = e.target.attributes.action.value;
    if(deleteROW == "delete") {
        delRow(el);
        overallSum();
    }
})

//Target row and remove from DOM;
delRow =(el)=> {
    el.parentNode.parentNode.parentNode.removeChild(el.parentNode.parentNode);
}

  </script>

    <script src="app.js" async defer></script>


</body>
</html>