<?php include("./asset/template/header.php"); ?>

    <div class="col-8 p-3 h-100 marpad-color">
      <form action="/JoinController/insertData" enctype="multipart/form-data" method="POST">
        <div class="row">
          <div class="col">
              <h5>現讀學校</h5>
              <input type="text" name="school">
              <h5>科系</h5>
              <input type="text" name="department">
          </div>
          <div class="col">
            <div class="col">
              <h5>志願一: </h5>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="firstschool">
                <option>請選擇學校</option>
                <option>中正大學</option>
                <option>東海大學</option>
                <option>逢甲大學</option>
              </select>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="firstdepartment">
                <option>請選擇科系</option>
                <option>電機系</option>
                <option>資工系</option>
                <option>工工系</option>
              </select>
            </div>
            <br>
            <div class="col">
              <h5>志願二: </h5>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="secondschool">
                <option>請選擇學校</option>
                <option>中正大學</option>
                <option>東海大學</option>
                <option>逢甲大學</option>
              </select>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="seconddepartment">
                <option>請選擇科系</option>
                <option>電機系</option>
                <option>資工系</option>
                <option>工工系</option>
              </select>
            </div>
            <br>
            <div class="col">
              <h5>志願三: </h5>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="thirdschool">
                <option>請選擇學校</option>
                <option>中正大學</option>
                <option>東海大學</option>
                <option>逢甲大學</option>
              </select>
              <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="thirddepartment">
                <option>請選擇科系</option>
                <option>電機系</option>
                <option>資工系</option>
                <option>工工系</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="col justify-content-center fs-1 d-flex align-items-center"><button class="btn btn-primary" type="submit">Send</button></div>
      </form>
    </div>

<?php include("./asset/template/footer.php"); ?>