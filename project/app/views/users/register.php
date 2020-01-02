<?php require APPROOT.'/views/inc/header.php'; ?>
<style>
    /*welcome text manipulation*/
    h1 {
        font-weight: 200;
        text-align: center;
        color: #888888;
        font-size: 30pt;
        padding-left: 33px;
        margin: 7px 5px 8px 8px;
    }

    /*form size and background manipulation*/
    form {
        width: 40%;
        margin: 20px auto 0px auto;
        height: 500px;
        background: #f7f7f7;
        box-shadow: 1px 10px 10px 10px #c6c1c1;
        border-radius: 20px;
    }

    /*padding of the reg. box*/
    .register {
        padding-top: 20px;
    }

    /*input box thickness*/
    .register input {
        border: none;
        border-bottom: 1px solid gray;
        width: 200px;
        color: #505050;
        margin-right: 1px;
        background-color: #f7f7f7;
    }

    /*remove the underline of 'have an account' */
    .register a {
        text-decoration: none;
    }

    /*margin for 'have an account' */
    h2 {
        margin-left: 10%;
    }

    /*p tag management*/
    form p {
        clear: both;
        margin: 0;
        color: gray;
        padding: 4px;
        font-size: 18px
    }

    /*account detail feild*/
    form.register fieldset.row1 {

        float: left;
        border: none;
        margin-top: 3%;
        margin-bottom: 3%;
        margin-left: 15%;
    }

    /*align the input boxes of account detail*/
    form.register fieldset.row1 label {
        width: 140px;
        float: left;
        text-align: right;
        margin-right: 6px;
        margin-top: 2px;
        padding-bottom: 20px;
    }

    /*register button*/
    .button {
        background: #abda0f;
        color: #fff;
        text-decoration: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 18px;
        margin-top: 1%;
        margin-left: 30%;
        height: 60px;
        width: 200px;
        font-size: 35px;
        margin-bottom: 4%;
    }
</style>

<h1> <?php echo "create an account"; ?> </h1>


<div>
    <?=$data['display_error']?>
</div>

<div>
    <form class="register" action="<?php echo URLROOT; ?>users/register" method="POST">
        <h1>Welcome To Ride Share</h1><br>
        <fieldset class="row1">
            <p>
                <label for="name"> Full Name</label>
                <input type="text" name="name" value="<?php echo $data['post']['name']; ?>">
            </p>
            <p>
                <label for="name"> Email</label>
                <input type="email" name="email" value="<?php echo $data['post']['email']; ?>">
            </p>
            <p>
                <label for="password"> Password</label>
                <input type="password" name="password" value="<?php echo $data['post']['password']; ?>">
            </p>
            <p>
                <label for="confirm_pasword"> Confirm Password</label>
                <input type="password" name="confirm_password" value="<?php echo $data['post']['confirm_password']; ?>">
            </p>
        </fieldset>

        <input class="button" type="submit" value="Register"> <br>
        <a href="<?php echo URLROOT; ?>users/login">
            <h2>Have an account?</h2>
        </a>
    </form>
</div>

<?php require APPROOT.'/views/inc/footer.php'; ?>