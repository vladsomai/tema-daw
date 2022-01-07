getData();

function getData(formData) {
  const requestData = new XMLHttpRequest();
  let response = {};
  const table = document.getElementById("dataTable");

  requestData.onload = function () {
    table.innerHTML = "";
    response = JSON.parse(this.responseText);

    if (response.length == 0) {
      const newRow = document.createElement("tr");
      const newNume = document.createElement("td");
      const newVarsta = document.createElement("td");

      newNume.innerHTML = "Nu a fost gasit nici o persoana cu varsta selectata";
      newVarsta.innerHTML = "";

      newRow.appendChild(newNume);
      newRow.appendChild(newVarsta);
      table.appendChild(newRow);
    } else {
      response.map((item) => {
        const newRow = document.createElement("tr");
        const newNume = document.createElement("td");
        const newVarsta = document.createElement("td");

        newNume.innerHTML = item.NUME;
        newVarsta.innerHTML = item.VARSTA;

        newRow.appendChild(newNume);
        newRow.appendChild(newVarsta);
        table.appendChild(newRow);
      });
    }
  };
  requestData.open("POST", "selectDatePersoane.php", true);

  if (formData === undefined) requestData.send();
  else requestData.send(formData);
}

function formSubmit1() {
  const formElement1 = document.getElementById("insertionForm1");

  // send the request based on the button pressed
  const formRequest = new XMLHttpRequest();
  formRequest.open("POST", "insertPersoane.php");
  formRequest.send(new FormData(formElement1));
  formRequest.onload = function () {
    getData();
  };
}

function formSubmit2() {
  const formElement2 = document.getElementById("insertionForm2");

  // send the request based on the button pressed
  const formRequest = new XMLHttpRequest();
  formRequest.open("POST", "insertPersoane.php");
  formRequest.send(new FormData(formElement2));
  formRequest.onload = function () {
    getData();
  };
}
