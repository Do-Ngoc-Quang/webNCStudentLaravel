<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>List students</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="assets/dist/css/jquery-ui.css">
  <link href="form-validation.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Datetimepicker -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    rel="stylesheet">

</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/hce_logo_03.png" alt="">
        <h2 style="color: pink;">List Students</h2>
        <p class="lead"></p>
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudent">
        Add Student
      </button>

      <div class="row g-5">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Code Student</th>
              <th scope="col">Name</th>
              <th scope="col">Class</th>
              <th scope="col">Gender</th>
              <th scope="col">Birthday</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="tbodySV">



          </tbody>

          <!-- Modul edit Student -->
          <div id="modalEdit" class="modal">
            <div class="modal-content bg-light">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <input class="bg-light" type="text" id="currentID" value="0" style="border: none;" disabled>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="add-student-form">
                  <div class="form-group row mb-3">
                    <label for="txtCode" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtCodeEdit" readonly>
                    </div>
                  </div>
                  <div class="form-group row mb-3">
                    <label for="txtName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtNameEdit">
                    </div>
                  </div>
                  <div class="form-group row mb-3">
                    <label for="txtClass" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtClassEdit">
                    </div>
                  </div>
                  <div class="form-group row mb-3">
                    <label for="txtClass" class="col-sm-2 col-form-label">Birthday</label>
                    <div class="col-sm-10">
                      <div class="control">
                        <input type="text" class="form-control datetimepicker" name="date" id="dateEdit">
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="txtGender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderEdit" id="male" value="Nam">
                        <label class="form-check-label" for="male">Nam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderEdit" id="female" value="Nữ">
                        <label class="form-check-label" for="female">Nữ</label>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="submit" class="btn btn-primary" onclick="updateStudent()">Save change</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </table>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination" id="ulPagination">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" onclick="goPrev()" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="goToPage(1)">1</a></li>
          <!-- <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="goToPage(2)">2</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="goToPage(3)">3</a></li> -->
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" onclick="goNext()" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2021–2023 Design by <a href="https://github.com/Do-Ngoc-Quang">Quang</a></p>
    </footer>
  </div>
  <!-- Modal add new student-->
  <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="add-student-form">
            <div class="form-group row mb-3">
              <label for="txtCode" class="col-sm-2 col-form-label">Code</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtCodeAdd">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="txtName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtNameAdd">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="txtClass" class="col-sm-2 col-form-label">Class</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtClassAdd">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="txtClass" class="col-sm-2 col-form-label">Birthday</label>
              <div class="col-sm-10">
                <div class="control">
                  <input type="text" class="form-control datetimepicker" name="date" id="dateAdd">
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtGender" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="Nam">
                  <label class="form-check-label" for="male">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="Nữ">
                  <label class="form-check-label" for="female">Nữ</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-info">Reset</button>
              <button type="submit" class="btn btn-primary" onclick="addStudentsMysql()">Add Student</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="assets/dist/js/jquery-3.6.4.min.js"></script>
  <script src="assets/dist/js/jquery-ui.js"></script>
  <script src="assets/dist/js/jquery.tmpl.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script src="form-validation.js"></script>
  <script src="sv.js"></script>

  <script id="svTemplate" type="text/x-jQuery-tmpl">
    <tr>
      <th scope="row">${STT}</th>
      <td>${MaSV}</td>
      <td>${HoTen}</td>
      <td>${Lop}</td>
      <td>${GioiTinh}</td>
      <td>${formatDate(NgaySinh)}</td>
      <td>
        <button class="btn-sm btn-info" onclick="openModal(${MaSV})">Edit</button>
        <button class="btn-sm btn-danger" onclick="deleteStudent(${MaSV})">Delete</button>
      </td>
    </tr>
  </script>
  <script>
    $(document).ready(function () {
      $('.datetimepicker').datepicker({
        format: 'dd-mm-yyyy', // Set the format of the datepicker
        autoclose: true, // Close the datepicker when a date is selected
        todayHighlight: true // Highlight today's date in the datepicker
      });
    });


  </script>
</body>

</html>