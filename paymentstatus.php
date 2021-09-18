<!-- start including header  -->
<?php
include('./header.php');
?>
<!-- end including header  -->
<!-- Code page banner stars  -->
<div class="container-fluid bg-dark">
    <div class="row"><img src="./img/coffee-5132832_1920.jpg" alt="courses" style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px;" /></div>
</div>
<!-- Code page banner ends -->

<!-- start main content  -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group-row"><label class="offset-sm-3 col-form-label">Order ID:</label>
    <div>
        <input type="text" class="form-control mx-3" name="orderid" id="">

    </div>
    <div>
        <input type="submit" class="btn btn-success mx-4" value="View">
    </div>

</div>
        
</form>
</div>
<!-- end main content  -->
 <!-- including contact starts  -->
 <?php
    include('./contact.php')
    ?>
    <!-- including contact ends  -->

    <!-- including footer starts  -->
    <?php
    include('./footer.php')
    ?>
    <!-- including footer ends  -->