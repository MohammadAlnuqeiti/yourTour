<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YourTour - Travel  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="users/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="users/lib/animate/animate.min.css" rel="stylesheet">
    <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="users/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="users/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="users/css/style.css" rel="stylesheet">
    <style>
        .navbar  {
            background-color: #14141F;

        }
    </style>
</head>
<body>
    <?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--  Hero Start -->

    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-xxl py-5 " >
        <div class="container" style="margin-top: 100px">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinations</h6>
                <h1 class="mb-5">Our Destinations</h1>
            </div>
            <div class="row g-4 justify-content-around">
                 <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <a class="col-lg-3 col-sm-4 wow fadeInUp" data-wow-delay="0.1s" href="<?php echo e(route('user.package.details',$value->id)); ?>">
                        <div class="card" style="width: 20rem;height: 25rem;">
                            <img class="card-img-top"  style="height: 15rem; padding: 0.5rem;" src=" <?php echo e(asset("storage/image/".$value->image)); ?>" alt="Card image cap">
                            <div class="card-body">

                            <h3><?php echo e($value->name); ?></h3>
                            <p class="card-text"><?php echo e($value->description); ?></p>
                            </div>

                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>



<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/search.blade.php ENDPATH**/ ?>