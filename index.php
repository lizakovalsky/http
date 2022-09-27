<p>Main page</p>
<button type="submit" id="reg" action=" ">Registration</button>
<button type="submit" id="auth" action=" ">Authorize</button>
<script type="text/javascript">
    document.getElementById("reg").onclick = function() {
        location.href = "/domain1.com/application/views/account/register.php";
    };
    document.getElementById("auth").onclick = function() {
        location.href = "/domain1.com/application/views/account/login.php";
    };
</script>