<?php
require_once('../functions/dbFunctions.php');
require_once('../functions/registerfunctions.php');

$db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
$conn = $db->connect();

$Register = new UserProfile($conn);

require_once '../lib/modaloptions.php';
    for($x = 0; $x < 3;$x++){
        $subscription = modaloptions($x);
        CreateSubModal($subscription, $Register);
    }
function CreateSubModal($subscription, $Register)
{
?>
<div id="modal-<?=$subscription['title']?>" class="modal">
    <div class="modal-inner">
        <div class="modal-header">
            <div class="flex centered">
                <section class="col-4 col-md-4 col-sm-2">
                    <h2>Complete your subscription</h2>
                </section>
                <div class="col-2 col-md-2 col-sm-3">
                    <div class="text-right">
                        <button id="btnCloseModal<?=$subscription['title']?>" class="btn btn-red btn-icon">
                            &times;
                        </button>
                    </div>
                </div>
            </div>
            <hr />
        </div>
        <div class="modal-body">
            <div class="flex">
                <div class="col-3 col-md-3 col-sm-6">
                    <form action="../functions/insert.php" method="post">
                        <label>
                            Name:
                        </label>
                        <span><input type="text" title="fill in your firstname" name="firstname" required/></span>
                        <span><input type="text" title="fill in your lastname" name="lastname" required/></span>
                        <label>
                        Email:
                            <input type="email" title="fill in your email" name="email" required/>
                        </label>
                        <label>
                        Username:
                            <input type="text" title="fill in an username" name="username" required/>
                        </label>
                        <label>
                        Password:
                            <input type="text" title="fill in a password" name="password" required/>
                        </label>
                        <label>
                        Payment:
                        </label>
                        <select name="payment" style="width:45%">
                        <?php foreach ($Register ->GetPayment() as $Payment) { ?>
                            <option><?php echo "$Payment[Paymentname] "?></option>
                        <?php } ?>
                        </select>
                        <span><input type="number" title="fill in your card info" name="card_number" required/></span>
                        
                        <label>
                        Subscription type:
                        </label>
                         <span><input type="text" title="your subscription type" name="subscription_type" value="<?=$subscription['title']?>" readonly/></span>
                         <span><input type="date" title="your subscription start date" name="subscription_start" required/></span>
                        <label>
                        Country:
                        </label>
                        <select name="country">
                        <?php foreach ($Register ->GetCountry() as $Country) { ?>
                            <option><?php echo "$Country[Countryname] "?></option>
                        <?php } ?>
                        </select>
                        <input type="submit" name="save" value="Sign up" />
                    </form>
                    </div>
                    <div class="col-3 col-md-3 col-sm-5">
                        <div class="card card-white no-padding">
                            <section class="card-subscription expended">
                                <h2 class="text-center"><?=$subscription['title']?></h2>
                                <h2 class="text-center"> <?=$subscription['title']?> </h2>
                                    <div class="card-subscription-details text-center">
                                        <p><strong>Price:</strong> <?=$subscription['Price']?></p>
                                        <p><strong>Quality:</strong> <?=$subscription['Quality']?></p>
                                        <p><strong>Resolution:</strong> <?=$subscription['Resolution']?></p>
                                        <p><strong>Users:</strong> <?=$subscription['Users']?></p>
                                        <p>
                                        <strong>Monthly terminable:</strong>
                                        <i class="fa fa-check icon-blue"></i>
                                        </p>
                                    </div>
                            </section>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>