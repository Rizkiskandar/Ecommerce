<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-white">
        <!-- Hero Section -->
        <div class="relative bg-gray-900">
            <div class="absolute inset-0">
                <img src="<?php echo e(asset('storage/hero-furniture.jpg')); ?>" alt="Furniture Banner" class="w-full h-full object-cover opacity-50">
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Welcome to Our Furniture Store</h1>
                <p class="mt-6 text-xl text-gray-300 max-w-3xl">Discover our collection of premium furniture for your home. Quality craftsmanship meets modern design.</p>
                <div class="mt-10">
                    <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        View Collection
                    </a>
                </div>
            </div>
        </div>

        <!-- Categories Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-8">Shop by Category</h2>
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-4">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative">
                    <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3">
                        <img src="<?php echo e(asset('storage/categories/' . strtolower($category->name) . '.jpg')); ?>" alt="<?php echo e($category->name); ?>" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">
                        <a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>">
                            <?php echo e($category->name); ?>

                        </a>
                    </h3>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Featured Products Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-8">Featured Products</h2>
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative">
                    <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75">
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="<?php echo e(route('products.show', $product)); ?>">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    <?php echo e($product->name); ?>

                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500"><?php echo e($product->category->name); ?></p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">Why Choose Us</h2>
                </div>
                <div class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                    <div class="relative">
                        <div class="text-lg leading-6 font-medium text-gray-900">Quality Materials</div>
                        <div class="mt-2 text-base text-gray-500">We use only the finest materials to ensure durability and comfort.</div>
                    </div>
                    <div class="relative">
                        <div class="text-lg leading-6 font-medium text-gray-900">Fast Delivery</div>
                        <div class="mt-2 text-base text-gray-500">Quick and reliable delivery service to your doorstep.</div>
                    </div>
                    <div class="relative">
                        <div class="text-lg leading-6 font-medium text-gray-900">Expert Craftsmanship</div>
                        <div class="mt-2 text-base text-gray-500">Each piece is crafted by skilled artisans with attention to detail.</div>
                    </div>
                    <div class="relative">
                        <div class="text-lg leading-6 font-medium text-gray-900">Customer Service</div>
                        <div class="mt-2 text-base text-gray-500">Dedicated support team to assist you with any queries.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="px-6 py-6 bg-indigo-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                    <div class="xl:w-0 xl:flex-1">
                        <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Want product news and updates?</h2>
                        <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">Sign up for our newsletter to stay up to date.</p>
                    </div>
                    <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                        <form class="sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email-address" type="email" autocomplete="email" required class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md" placeholder="Enter your email">
                            <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                                Subscribe
                            </button>
                        </form>
                        <p class="mt-3 text-sm text-indigo-200">
                            We care about your privacy. Read our
                            <a href="#" class="text-white font-medium underline">
                                privacy policy
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\furniture1\resources\views/home.blade.php ENDPATH**/ ?>