<?php
include 'config.php';

$is_upload = false;
$msg = null;
if (isset($_POST['submit'])) {
    if (file_exists(UPLOAD_PATH)) {
        $deny_ext = array("php","php5","php4","php3","php2","html","htm","phtml","pht","jsp","jspa","jspx","jsw","jsv","jspf","jtml","asp","aspx","asa","asax","ascx","ashx","asmx","cer","swf","htaccess","ini");

        $file_name = trim($_FILES['upload_file']['name']);
        $file_name = str_ireplace($deny_ext,"", $file_name);
        $temp_file = $_FILES['upload_file']['tmp_name'];
        $img_path = UPLOAD_PATH.'/'.$file_name;
        if (move_uploaded_file($temp_file, $img_path)) {
            $is_upload = true;
        } else {
            $msg = '上传出错！';
        }
    } else {
        $msg = UPLOAD_PATH . '文件夹不存在,请手工创建！';
    }
}
?>

<div id="upload_panel">
    <ol>
        <li>
            <h3>任务 11</h3>
            <p>上传一个<code>webshell</code>到服务器。</p>
        </li>
        <li>
            <h3>上传区</h3>
            <form enctype="multipart/form-data" method="post">
                <p>请选择要上传的图片：<p>
                    <input class="input_file" type="file" name="upload_file"/>
                    <input class="button" type="submit" name="submit" value="上传"/>
            </form>
            <div id="msg">
                <?php
                if($msg != null){
                    echo "提示：".$msg;
                }
                ?>
            </div>
            <div id="img">
                <?php
                if($is_upload){
                    echo '<img src="'.$img_path.'" width="250px" />';
                }
                ?>
            </div>
        </li>
        <?php
        if($_GET['action'] == "show_code"){
            include 'show_code.php';
        }
        ?>
    </ol>
</div>
