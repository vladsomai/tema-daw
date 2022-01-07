<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link href="bitnami.css" rel="stylesheet" />
    <title>Tema DAW!</title>
  </head>
  <body>
    <div class="container main">
      <div class="">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="bg-primary">
                <th class="fs-4 fw-bold">Nume</th>
                <th class="fs-4 fw-bold">Varsta</th>
              </tr>
            </thead>
          <tbody id="dataTable">

          </tbody>
          </table>

        </div>

        <div class="mt-5">
          <p class="display-6">Introduceti date</p>
          <form
          method="post"
          onsubmit="event.preventDefault(); formSubmit1();"
          class="d-flex align-items-center"
          id="insertionForm1"
          >
          <input
          class="form-control me-3 w-25"
          type="text"
          placeholder="Nume"
          name="nume"
          required
          />
          <input
          class="form-control me-3 w-25"
          type="number"
          placeholder="Varsta"
          name="varsta"
          required
          />
          <button type="submit" class="btn btn-primary">Trimite</button>
        </form>
        <form
          method="post"
          onsubmit="event.preventDefault(); formSubmit2();"
          class="d-flex align-items-center mt-3"
          id="insertionForm2"
          >
          <input
          class="form-control me-3 w-25"
          type="text"
          placeholder="Nume"
          name="nume"
           required
          />
          <input
          class="form-control me-3 w-25"
          type="number"
          placeholder="Varsta"
          name="varsta"
          required
          />
          <button type="submit" class="btn btn-primary">Trimite</button>
        </form>
      </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="script_p3.js"></script>
  </body>
</html>