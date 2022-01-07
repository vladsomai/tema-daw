const requestData = new XMLHttpRequest();
let response = {};
const table = document.getElementById("dataTable");

requestData.onload = function () {
  response = JSON.parse(this.responseText);
  response.map((item) => {
    const newRow = document.createElement("tr");
    const newNR_CRT = document.createElement("td");
    const newPRODUS = document.createElement("td");
    const newBUCATI = document.createElement("td");
    const newPRET_BUCATA = document.createElement("td");
    const newPRET_TOTAL = document.createElement("td");

    newNR_CRT.innerHTML = item.NR_CRT;
    newPRODUS.innerHTML = item.PRODUS;
    newBUCATI.innerHTML = item.BUCATI;
    newPRET_BUCATA.innerHTML = item.PRET_BUC;
    newPRET_TOTAL.innerHTML = item.PRET_TOTAL;
    newRow.appendChild(newNR_CRT);
    newRow.appendChild(newPRODUS);
    newRow.appendChild(newBUCATI);
    newRow.appendChild(newPRET_BUCATA);
    newRow.appendChild(newPRET_TOTAL);
    table.appendChild(newRow);
  });
};
requestData.open("get", "selectDateProdus.php", true);
requestData.send();

function formSubmit() {
  const formElement = document.getElementById("insertionForm");
  const formRequest = new XMLHttpRequest();
  formRequest.open("POST", "insertDateProdus.php");
  formRequest.send(new FormData(formElement));
  formRequest.onload = function () 
  {
    console.log(this.responseText);
  }
}