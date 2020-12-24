<?php
require_once '../lib/modaloptions.php';
for($x = 0; $x < 3;$x++){
    $subscription = modaloptions($x);
    CreateCards($subscription);
}

function CreateCards($subscription){
?>
    <div class="col-2 col-md-3 col-sm-4">
    <div id="btn<?=$subscription['title']?>" class="card card-white no-padding">
        <section class="card-subscription">
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
<?php
}
?>

