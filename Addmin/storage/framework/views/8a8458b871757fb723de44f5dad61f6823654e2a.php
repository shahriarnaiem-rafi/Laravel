

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Parcel Received -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">5</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Parcel Received</p>
        </div>

        <!-- Old Parcel -->
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">400</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Old Parcel</p>
        </div>

        <!-- Total Parcel -->
        <div class="bg-gray-800 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">56</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Total Parcel</p>
        </div>

        <!-- Pending Delivered -->
        <div class="bg-gradient-to-r from-red-500 to-red-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">546</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Pending Delivered</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PWAD62\htdocs\twofour\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>