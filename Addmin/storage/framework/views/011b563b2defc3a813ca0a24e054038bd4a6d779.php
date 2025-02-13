
<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">User Data Table</h2>
        <button><a >Create</a></button>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Create_at</th>
                        <th class="py-3 px-6 text-left">Updated_at</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">


                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PWAD62\htdocs\twofour\resources\views/pages/aurth/manage_user.blade.php ENDPATH**/ ?>