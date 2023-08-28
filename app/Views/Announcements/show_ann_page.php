<?php include("./asset/template/header.php"); ?>

  <div class="col-8 p-3 h-100 marpad-color">
    <?php echo 
      '<table>
        <thead class="subtitle_cell">
          <tr>
            <th>'.$announcements['subtitle'].'</th>
          </tr>
        </thead>
        <tbody>
          <tr><td class="space_height"></td></tr>
          <tr>
            <td class="content_cell">
              '.$announcements['content'].'
            </td>
          </tr>
          <tr><td class="space_height"></td></tr>
          <tr>
            <td>
            ';
              if ($announcements['pdf_path'] != "") 
              {
                echo "附檔：<br>";
                $file_name = explode('/', $announcements['pdf_path']);
                $name = end($file_name);
                echo '
                <img src="/asset/IMG/pdf_icon.jpg" align="absmiddle" alt="" class="icon">
                <a href="/AnnouncementController/download/'.$announcements['id'].'" title="'.$name.'" target="_blank">' . $name . '</a>';
              };
              echo'
            </td>
          </tr>
        </tbody>
      </table>'
    ?>
  </div>

<?php include("./asset/template/footer.php"); ?>







