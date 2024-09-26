<button
    {{ $attributes->merge(
        [
            'type' => 'submit', 
            'class' => 'inline-flex gap-4 items-center px-4 py-2 bg-orange-500 dark:bg-orange-400 rounded-lg dark:rounded-none font-semibold text-sm text-white dark:text-orange-500 tracking-widest hover:bg-orange-200 dark:hover:bg-white focus:bg-orange-200 dark:focus:bg-white active:bg-orange-900 dark:active:bg-orange-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-orange-500 transition ease-in-out duration-150'
        ]) 
    }}>
    {{ $slot }}
</button>
