<?php include("./asset/template/header.php"); ?>

    <div class="col-8 p-3 h-100 marpad-color">
        <div style="text-align: center">
            <h1>新增公告</h1>
            <form action="/AnnouncementController/store" enctype="multipart/form-data" method="POST">
                <h2>大標題: <input name="headtitle" id="headtitle" type="text" style="width: 300px;"></h2>
                <h2>小標題: <input name="subtitle"  id="subtitle"  type="text"></h2>
                <h2>主題: 
                    <select aria-label="Default select example" name='select_box' id='select_box'>
                        <option selected>選擇以下內容</option>
                        <option value="1">簡章訊息事項</option>
                        <option value="2">招生事務</option>
                        <option value="3">徵選資訊</option>
                        <option value="4">會議簡報</option>
                        <option value="5">其他事項</option>
                    </select>
                </h2>

                <h2>內文: </h2>
                <textarea name="content" id="content" rows="4" cols="30"></textarea>
                
                <br>
                <br>

                <h2>起始時間:<input type="date" id="start_date" name="start_date" value=<?php echo date('Y-m-d');?> min=<?php echo date('Y-m-d');?> max="<?php echo date('Y')+3;?>-12-31" /></h2>

                <h2>結束時間:<input type="date" id="end_date" name="end_date" value=<?php echo date('Y-m-d');?> min=<?php echo date('Y-m-d');?> max="<?php echo date('Y')+3;?>-12-31" /></h2>
                <div>
                    <label for="formFile">
                        附檔：
                    </label>
                    <input type="file" name="file" id="file">
                </div>
                <div style="height:20px"></div>
                <button type="submit" onclick="validateForm(event)" id="submit" name="submit">提交</button>
            </form>
        </div>
    </div>


<?php include("./asset/template/footer.php"); ?>