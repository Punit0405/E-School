<?php 
  include('header.php');
?>
            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="car-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    5
                                </h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="car-header">Students</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    25
                                </h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="car-header">Sold</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    3
                                </h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <!-- Table  -->
                    <p class="bg-dark text-white p-2">Course Ordered</p>
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
            </div>

    </div>
    <!-- sidebar ends  -->
<?php 
include("../admin/footer.php")
?>