<nav>
    <button x-on:click="open = ! open" class="block md:hidden fixed top-6 right-6">
        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!open" fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>

    <div
        class="fixed left-0 top-0 z-10 h-full w-64 md:block px-3 py-6 overflow-y-auto bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 shadow-lg md:shadow-none custom-scrollbar-rounded-thin hidden">

        <x-admin.nav.profile-block />

        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

            <li>
                <x-admin.nav.dropdown-button name="Overview" :active="request()->routeIs('admin.dashboard')" dropdown="false">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
            </li>

            <li x-data="{ @if (request()->routeIs('admin.products.*')) open: true @else open: false @endif }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Products" :active="request()->routeIs('admin.products.*')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.products.index')" name="All Products" />
                    <x-admin.nav.dropdown-link :href="route('admin.products.create')" name="Add Product" />
                </x-admin.nav.dropdown>
            </li>

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Posts" :active="request()->routeIs('admin.posts')">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.posts.index')" name="All Posts" />
                    <x-admin.nav.dropdown-link :href="route('admin.posts.create')" name="Add Post" />
                </x-admin.nav.dropdown>
            </li>

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Pages" :active="request()->routeIs('admin.pages')">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.pages.index')" name="All Pages" />
                    <x-admin.nav.dropdown-link :href="route('admin.pages.create')" name="Add Page" />
                </x-admin.nav.dropdown>
            </li>

        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Categories" :active="request()->routeIs('admin.categories')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.categories.index')" name="All Categories" />
                    <x-admin.nav.dropdown-link :href="route('admin.categories.create')" name="Add Category" />
                </x-admin.nav.dropdown>
            </li>

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Tags" :active="request()->routeIs('admin.tags')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.tags.index')" name="All Tags" />
                    <x-admin.nav.dropdown-link :href="route('admin.tags.create')" name="Add Tag" />
                </x-admin.nav.dropdown>
            </li>

        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Users" :active="request()->routeIs('admin.users')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.users.index')" name="All Users" />
                    <x-admin.nav.dropdown-link :href="route('admin.users.create')" name="Add User" />
                </x-admin.nav.dropdown>
            </li>

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Roles" :active="request()->routeIs('admin.roles')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.roles.index')" name="All Roles" />
                    <x-admin.nav.dropdown-link :href="route('admin.roles.create')" name="Add Role" />
                </x-admin.nav.dropdown>
            </li>

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Permissions" :active="request()->routeIs('admin.permissions')">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z">
                        </path>
                    </svg>
                </x-admin.nav.dropdown-button>
                <x-admin.nav.dropdown>
                    <x-admin.nav.dropdown-link :href="route('admin.permissions.index')" name="All Permissions" />
                    <x-admin.nav.dropdown-link :href="route('admin.permissions.create')" name="Add Permission" />
                </x-admin.nav.dropdown>
            </li>

        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

            <li x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <x-admin.nav.dropdown-button name="Settings" dropdown=false :active="request()->routeIs('admin.settings')">
                    <svg class="lex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-admin.nav.dropdown-button>
            </li>

        </ul>
    </div>
</nav>
