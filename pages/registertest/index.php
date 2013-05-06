<?php
// We need these.
require_once("config.php");
require_once("SOAPRegistration.php");

// Initialize session and variables.
$messages = Array();
$showForm = true;

// If form was submitted, carry out the registration.
if(!empty($_POST["submit"]))
{
    $reg = new SOAPRegistration();
    $messages = $reg -> getMessages();
    $showForm = $reg -> showForm();
}

$messagesDisplay = '';
foreach($messages as $msg)
{
    $messagesDisplay .= '<div class="errors">'.$msg.'</div>';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
        <link rel="stylesheet" type="text/css" href="site.css" />
        <meta name="description" content="<?php echo META_DESCRIPTION; ?>" />
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>" />
        <meta name="robots" content="<?php echo META_ROBOTS; ?>" />
        <meta name="author" content="Joeri Thissen (Chocochaos) - me@chocochaos.com" />
        <title><?php echo SITE_TITLE; ?></title>
    </head>
    <body>
        <table class="reg">
            <tr>
                <td>
                    <a href="<?php echo $_SERVER["PHP_SELF"]; ?>"><img src="img/logo.png" alt="<?php echo SITE_TITLE; ?>" /></a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $messagesDisplay;
                    
                    if ($showForm)
                    { ?>
                    <form action="" method="post" name="reg">
                        <table class="form">
                            <tr>
                                <td align="right">
                                    Account name:
                                </td>
                                <td align="left">
                                    <input name="accountname" type="text" maxlength="32" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Password:
                                </td>
                                <td align="left">
                                    <input name="password" type="password" maxlength="16" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Confirm password:
                                </td>
                                <td align="left">
                                    <input name="password2" type="password" maxlength="16" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    E-mail address:
                                </td>
                                <td align="left">
                                    <input name="email" type="text" maxlength="254" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Expansion:
                                </td>
                                <td align="left">
                                    <select name="expansion">
                                        <option value="0">Vanilla</option>
                                        <option value="1">The Burning Crusade</option>
                                        <option selected value="2">Wrath Of The Lich King</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" class="sbm" value="Register" name='submit' />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    }
                    ?>
					<br />
                    <div class="copy">
                        set realmlist <?php echo REALMLIST; ?><br />
                        Coded by Chocochaos and designed by Pradox<br />
						Released by Jeutie - <a href="http://emulation.jeutie.info" target="_blank">jeutie.info</a>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>