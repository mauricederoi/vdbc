<?php
// get theme color
    $setting = App\Models\Utility::colorset();
    $layout_setting = App\Models\Utility::settings(); 
    $color = (!empty($setting['color'])) ? $setting['color'] : 'theme-4';
     $set_cookie = App\Models\Utility::cookie_settings();
?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e($setting['SITE_RTL'] == 'on' ? 'rtl' : ''); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php echo $__env->make('partials.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="<?php echo e($color); ?>">
    <div class="loader-bg">
        <div class="loader-track">
          <div class="loader-fill"></div>
        </div>
      </div>
    <input type="hidden" id="path_admin" value="<?php echo e(url('/')); ?>">
    <div class="container-application">
        <?php echo $__env->make('partials.admin.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-content position-relative">
            <?php echo $__env->make('partials.admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-content">
                <div class="dash-container">
                    <div class="dash-content">
                         <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                 <div class="row align-items-center">
                                     <div class="col-md-12">
                                         <div class="row justify-content-between align-items-center">
                                             <div class="col-auto">
                                                 <h4 class="m-b-10"> <?php echo $__env->yieldContent('title'); ?></h4>
                                                 <?php if(Request::route()->getName() != 'home'): ?>
                                                    <ul class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"></a></li>
                                                        <?php echo $__env->yieldContent('breadcrumb'); ?>
                                                    </ul>
                                                <?php endif; ?>    
                                             </div>
                                             <div class="col">
                                                 <?php echo $__env->yieldContent('action-btn'); ?>
                                             </div>
                                         </div>
                                     </div> 
                                 </div>
                            </div>
                        </div> 
                         <!-- [ breadcrumb ] end -->
                         <!-- [ Main Content ] start -->
                        
                              <?php echo $__env->yieldContent('content'); ?>
                        
                         <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<div class="position-fixed top-0 end-0 p-3" style="z-index: 99999">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-header">
            <img src="<?php echo e(asset('assets/images/favicon.svg')); ?>" class="img-fluid m-r-5" alt="images"
                style="width:17px;">
            <strong class="me-auto">Dashboard</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>
</div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title"  id="modelCommanModelLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" >
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="commonModalOver" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title"  id="modelCommanModelLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" >
            </div>
        </div>
    </div>
</div>
<?php if( isset($setting['cust_darklayout']) && $setting['cust_darklayout'] == 'on'): ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dark.css')); ?>" >
<?php else: ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" id="main-style-link">
<?php endif; ?>

<?php echo $__env->make('partials.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<footer class="dash-footer">
    <div class="footer-wrapper" style="justify-content: center">
        <div class="py-1">
            <p class="">
                <?php echo e(__('Copyright © ')); ?><?php echo e((Utility::getValByName('footer_text')) ? Utility::getValByName('footer_text') : env('APP_NAME')); ?>&nbsp;<?php echo e(date("Y")); ?> </p>
        </div>
    </div>
</footer>


<?php if(Session::has('success')): ?>
    <script>
        toastrs('<?php echo e(__('Success')); ?>', '<?php echo session('success'); ?>', 'success');
    </script>
    <?php echo e(Session::forget('success')); ?>

<?php endif; ?>
<?php if(Session::has('error')): ?>
    <script>
        toastrs('<?php echo e(__('Error')); ?>', '<?php echo session('error'); ?>', 'error');
    </script>
    <?php echo e(Session::forget('error')); ?>

<?php endif; ?>

<script>
    var exampleModal = document.getElementById('exampleModal')
  
    exampleModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
            // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        var url = button.getAttribute('data-url')
  
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')
                modalTitle.textContent = recipient
        var size = button.getAttribute('data-size');
        $("#exampleModal .modal-dialog").addClass('modal-' + size);     
        $.ajax({
            url: url,
            success: function (data) {
                $('#exampleModal .modal-body').html(data);
                $("#exampleModal").modal('show');
            },
            error: function (data) {
                data = data.responseJSON;
                toastrs('Error', data.error, 'error')
            }
        });
    })

    function arrayToJson(form) {
    var data = $(form).serializeArray();
    var indexed_array = {};

    $.map(data, function(n, i) {
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

  
//   $(document).on("submit", "#exampleModal form", function (e) {
//     e.preventDefault();
//     var data = arrayToJson($(this));
//     data.ajax = true;
  
//     var url = $(this).attr('action');
//     $.ajax({
//         url: url,
//         data: data,
//         type: 'POST',
//         success: function (data) {
//             console.log(data);
//             toastrs('Success', data.success, 'success');
//             $(data.target).append('<option value="' + data.record.id + '">' + data.record.name + '</option>');
//             $(data.target).val(data.record.id);
//             $(data.target).trigger('change');
//             $("#exampleModal").modal('hide');
//         },
//         error: function (data) {
//             data = data.responseJSON;
//             toastrs('Error', data.error, 'error')
//         }
//     });
//   });
  
  </script>



</body>
<?php if($set_cookie['enable_cookie'] == 'on'): ?>
<?php echo $__env->make('layouts.cookie_consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
</html>

<?php /**PATH C:\wamp64\www\versedbc\resources\views/layouts/admin.blade.php ENDPATH**/ ?>