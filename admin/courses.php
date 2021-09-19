<?php
include('../admin/header.php');
?>

<div class="col-sm-9 mt-5">


    <!-- Table  -->
    <p class="bg-dark text-white p-2"> List Of Course Ordered</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Course ID</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- dynamic data  -->
        </tbody>
    </table>
</div>
</div>
<div>
    <a href="../admin/addcourse.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php
include('../admin/footer.php');
?>