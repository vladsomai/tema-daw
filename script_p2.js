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

function formSubmit() {
  const formElement = document.getElementById("insertionForm");
  const temp = new FormData(formElement);

  for (let val of temp.values()) {
    if (val == "") getData();
    else getData(new FormData(formElement));
  }
}
