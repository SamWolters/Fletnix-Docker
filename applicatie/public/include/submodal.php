<?php
require_once '../lib/modaloptions.php';
    for($x = 0; $x < 3;$x++){
        $subscription = modaloptions($x);
        CreateSubModal($subscription);
    }
function CreateSubModal($subscription)
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
                    <form action="#">
                        <label>
                            Name:
                            <input type="text" />
                        </label>
                        <label>
                            Email:
                            <input type="text" />
                        </label>
                        <label>
                            Password:
                            <input type="text" />
                        </label>
                        <label>
                            Address:
                        <input type="text" />
                        </label>
                    <label>
                    Region:
                    <input type="text" />
                    </label>
                    <input type="submit" value="Sign up" />
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




