<?php require APPROOT.'/views/inc/header.php'; ?>
<style>
    /*Login section animation style*/

    /*To center the login section */
    .bg-ls {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /*login box design*/
    .ls-contain {
        width: 20%;
        height: 55%;
        padding-top: 40px;
        background: #f7f7f7;
        box-shadow: 1px 10px 10px 10px #c6c1c1;
        font-family: 'Open Sans', sans-serif;
        text-align: center;
        padding-top: 30px;
        padding-left: 10px;
        position: relative;
        border-radius: 10px;
    }

    /*Login box inner contain design*/

    /*form style manipulation*/
    .ls-contain form {
        font-size: 20px;
        letter-spacing: 2px;
        text-align: left;
        margin: 2px;
        color: rgb(0, 120, 156);
    }

    /*Login button style*/
    .ls-contain form input[type="submit"] {
        font-size: 20px;
        border: none;
        outline: none;
        border-radius: 20px;
        cursor: pointer;
        letter-spacing: 2px;
        text-align: center;
        width: 50%;
        height: 40px;
        margin-left: 25%;
        margin-top: 15px;
        justify-content: center;
        align-content: center;
        color: white;
        background: rgb(0, 120, 156);
    }

    /*form typying area design*/
    .ls-contain form input {
        width: 100%;
        margin-bottom: 10px;
        height: 30px;
        color: black;
        border-radius: 12px;
    }
</style>
<h1> <?php echo "login "; ?> </h1>


<div>
    <?=$data['display_error']?>
</div>

<div class="bg-ls">
    <div class="ls-contain">
        <img src="<?php echo URLROOT; ?>images/Asset login.png" width="99" height="99" style="margin-bottom: 20px ;">
        <form action="<?php echo URLROOT; ?>users/login" method="POST">


            <label for="name"> Email :</label>
            <input type="email" name="email" value="<?php echo $data['post']['email']; ?>"
                style="width:270px; height:42px; border: solid 1px #c2c4c6; font-size:16px; padding-left:8px;">
            <br>

            <label for="password"> Password :</label>
            <input type="password" name="password" value="<?php echo $data['post']['password']; ?>"
                style="width:270px; height:42px; border: solid 1px #c2c4c6; font-size:16px; padding-left:8px;">
            <br>

            <input type="submit" value="Login"> <br>

            <a href="<?php echo URLROOT; ?>users/register"> Don't have an account? </a>
        </form>
    </div>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>