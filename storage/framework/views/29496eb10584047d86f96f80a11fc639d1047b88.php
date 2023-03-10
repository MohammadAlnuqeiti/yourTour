<?php $__env->startSection('title'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('Dashboard'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title_page'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title_page2'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php if($number_of_trips): ?>
              <h3>

                <?php echo e($number_of_trips); ?>

              </h3>
              <?php endif; ?>

              <p>Numbet of trips</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-plane-departure"></i>
            </div>
            <a href="<?php echo e(route('admin.trips.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo e($number_of_reservation); ?></h3>

              <p>Numer of reservation</p>
            </div>
            <div class="icon">
              <i class="ion fas fa-th"></i>
            </div>
            <a href="<?php echo e(route('admin.reservation.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo e($number_of_users); ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-users"></i>
            </div>
            <a href="<?php echo e(route('admin.users.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo e($number_of_message); ?></h3>

              <p>Number of message</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-message"></i>
            </div>
            <a href="<?php echo e(route('user.contact.show')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

          <!-- /.card -->
    </div>


<!-- Content Wrapper. Contains page content -->




      
      <!-- /.row (main row) -->
    
    <!-- /.container-fluid -->
  
  <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourTour\resources\views/admin/index.blade.php ENDPATH**/ ?>