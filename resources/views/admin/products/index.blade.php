<x-admin-layout>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold dark:text-white">
            Products {{ print request()->routeIs('admin.products') }}
        </h2>
    </div>
    <ul>
        <li>
            <i class="bi bi-speedometer"></i> Dashboard
        </li>
        <li>
            <i class="bi bi-box-fill"></i> Products
        </li>
        <li>
            <i class="bi bi-clipboard-fill"></i> Posts
        </li>
        <li>
            <i class="bi bi-file-earmark-post"></i> Posts
        </li>
        <li>
            <i class="bi bi-file-earmark-text-fill"></i> Pages
        </li>
        <li>
            <i class="bi bi-collection-fill"></i> Categories
        </li>
        <li>
            <i class="bi bi-grid-fill"></i> Categories
        </li>
        <li>
            <i class="bi bi-inboxes-fill"></i> Categories
        </li>
        <li>
            <i class="bi bi-tags-fill"></i> Tags
        </li>
        <li>
            <i class="bi bi-people-fill"></i> Users
        </li>
        <li>
            <i class="bi bi-person-fill-gear"></i> Rules
        </li>
        <li>
            <i class="bi bi-key-fill"></i> Permissions
        </li>
        <li>
            <i class="bi bi-unlock-fill"></i> Permissions
        </li>
        <li>
            <i class="bi bi-gear-fill"></i> Settings
        </li>
    </ul>
</x-admin-layout>
