<!DOCTYPE html>
<meta charset="utf-8" />
<form method='post' action='/m/controllers/login_ok.php'>
    <table>
        <tr>
            <td>아이디</td>
            <td><input type='text' name='user_id' tabindex='1'/></td>
            <td rowspan='2'><input type='submit' tabindex='3' value='로그인' style='height:50px'/></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type='password' name='user_pw' tabindex='2'/></td>
            <input type="hidden" name="nonce" value="<?getNonce() ?>">
        </tr>
    </table>
</form>

<?php


?>