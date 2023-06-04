<div class="mt-2 p-2">

    <?php 
    $SuccessMessage=session("Message:Success",null);
    ?>

    @if($SuccessMessage)
    <div class="alert alert-success">
        😒 {{$SuccessMessage}}
    </div>
    @endif
    
</div>