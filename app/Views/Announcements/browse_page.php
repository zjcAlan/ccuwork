<?php include("./asset/template/header.php"); ?>

    <div class="col-8 p-3 h-100 marpad-color">
        <head>
            <?php
                // 假设 $announcements 是从数据库中获取的公告数据数组
                // 对 $announcements 按照 start_date 进行升序排序
                usort($announcements, function($a, $b) {
                return strtotime($a['start_date']) - strtotime($b['start_date']);
                });
            ?>
        </head>
        <table>
            <thead >
                <tr><div class="ann-news">訊息公告 News</div></tr>
            </thead>
            <tbody>
                <tr>
                    <td class="news-cell"><img src="/asset/IMG/news.jpg"></td>
                    <td >
                        <div class="marquee-container">
                            <div class="marquee-content">請留意!甄選委員會發送之簡訊，不會要求考生回撥及告知個人資料。聯絡專線:05-2721799。</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <table id="announcementTable">
                    <!-- ... 公告的其他部分 ... -->
                    <?php
                        if (!empty($announcements)) {
                            foreach ($announcements as $index => $announcement) {
                                //拆分日期
                                $startD = explode('-', $announcement['start_date']);
                                $Syear = (int)$startD[0];
                                $Smonth = (int)$startD[1];
                                $Sday = (int)$startD[2];
                            
                                $endD = explode('-', $announcement['end_date']);
                                $Eyear = (int)$endD[0];
                                $Emonth = (int)$endD[1];
                                $Eday = (int)$endD[2];
                            
                                $newD = explode('-', date('Y-m-d'));
                                $Nyear = (int)$newD[0];
                                $Nmonth = (int)$newD[1];
                                $Nday = (int)$newD[2];
                            
                                if($Syear<=$Nyear && $Eyear>=$Nyear){
                                    if($Smonth<=$Nmonth && $Emonth>=$Nmonth){
                                        if($Sday<=$Nday && $Eday>=$Nday){
                                            echo'
                                                <tr class="announcement-row" id="announcementTablee">
                                                <td class="data-cell"> 
                                                    '.$announcement['start_date'].'
                                                </td>
                                        
                                                <td class="theme-cell">
                                                    ['.$announcement['theme'].']
                                                </td>
                                        
                                                <td class="headtitle-cell">
                                                    <a class="announcement-link" href="/AnnouncementController/show_ann/'.$announcement['id'].'">'.$announcement['headtitle'].
                                                    '</a><br>
                                                </td>
                                                </tr>';
                                        }
                                    }
                                }
                        }}
                    ?>

                    </table>
                </tr>
                    
                <tr>
                    <table id="buttonContainer"  class="page-button-table">
                        <td>瀏覽頁數：
                            <?php 
                                $totalAnnouncements = count($announcements);
                                $buttonsPerPage = 7;
                                $totalButtons = ceil($totalAnnouncements / $buttonsPerPage);
                    
                                for ($i = 0; $i < $totalButtons; $i++) {
                                    $start = $i * $buttonsPerPage;
                                    $end = min(($i + 1) * $buttonsPerPage, $totalAnnouncements);
                                    echo '<button class="announcement-button" data-start="' . $start . '" data-end="' . $end . '">' . ($i + 1) . '</button>';
                                }
                                echo'<button class="announcement-button" data-start="0" data-end="'.$totalAnnouncements.'">[全部]</button>'
                            ?>
                        </td>
                    </table>
                </tr>
                            
            </tbody>
        </table>
             
        <div class="announcement-header">
          訊息公告
          <div class="announcement-options">
            <a class="menu-select" theme="簡章訊息">簡章訊息</a><br>
            <a class="menu-select" theme="招生事務">招生事務</a><br>
            <a class="menu-select" theme="徵選資訊">徵選資訊</a><br>
            <a class="menu-select" theme="會議簡報">會議簡報</a><br>
            <a class="menu-select" theme="其他事項">其他事項</a><br>
            <!-- 在此添加更多選項 -->
          </div>
        </div>
                                                
        <br>
        <br>
        <form action="/AnnouncementController/goto_modify_page" enctype="mutipart/form-data" method="POST">
            <button type="submit">進入修改頁面</button>
        </form>
    </div>

<?php include("./asset/template/footer.php"); ?>