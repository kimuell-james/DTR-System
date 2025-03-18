<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <div class="about">
                        <h3 class="about-title">About</h3>
                        <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas elit ut felis suscipit, sit amet faucibus purus tincidunt. Sed molestie nisi quis egestas mollis. Aenean feugiat, mi at accumsan consectetur, sapien mauris bibendum sapien, vitae aliquam mi neque nec ipsum. Sed malesuada, velit nec lacinia ornare, est mi porta tellus, ac tempus nisi risus vel odio. Vestibulum et arcu non diam faucibus volutpat. Vestibulum volutpat velit eros, in tristique massa vehicula nec. Praesent commodo, erat et dapibus rutrum, justo neque sodales nunc, ac tincidunt erat odio et quam. Sed at enim in ex egestas sodales ut quis metus. Phasellus sapien nulla, dictum vitae commodo non, fermentum ut velit. Pellentesque non ullamcorper elit. Mauris elit tortor, placerat vitae lorem ac, ullamcorper ullamcorper est. Sed nibh ex, lobortis eget neque sit amet, tincidunt dictum leo. Fusce dui felis, sagittis dictum orci quis, rhoncus consectetur lectus. Praesent ac risus eget justo aliquet dictum quis ac lacus. Quisque mauris ipsum, tristique eget consectetur non, posuere et ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>