<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="material-symbols-rounded">
                        team_dashboard
                    </span>
                    <span class="ms-3 text-sm">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="user" data-collapse-toggle="user">
                    <span class="material-symbols-rounded">
                        account_circle
                    </span>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Tài khoản</span>
                    <span class="material-symbols-rounded">
                        arrow_drop_down
                    </span>
                </button>
                <ul id="user" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('user.admin') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">Quản
                            trị viên</a>
                    </li>
                    <li>
                        <a href="{{ route('user.client') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">Người
                            dùng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('order.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <span class="ms-3 text-sm">Đơn hàng</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="service" data-collapse-toggle="service">
                    <span class="material-symbols-rounded">
                        local_shipping
                    </span>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Dịch vụ</span>
                    <span class="material-symbols-rounded">
                        arrow_drop_down
                    </span>
                </button>
                <ul id="service" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('service.index') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">Danh
                            sách dịch vụ</a>
                    </li>
                    <li>
                        <a href="{{ route('service.cities') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">Danh
                            sách thành phố</a>
                    </li>
                    <li>
                        <a href="{{ route('service.fee') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">Tính
                            phí đơn hàng</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>


<script>
    const toggleTheme = document.getElementById('toggleTheme');
    const body = document.body;

    toggleTheme.addEventListener('click', () => {
        if (body.classList.contains('dark')) {
            body.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            body.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

    if (currentTheme) {
        body.classList.add(currentTheme);
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarItems = document.querySelectorAll('#logo-sidebar a');
        const collapseToggles = document.querySelectorAll('[data-collapse-toggle]');

        sidebarItems.forEach(item => {
            if (item.href === window.location.href) {
                item.classList.add('active');

                // Mở tất cả các collapse chứa mục active
                let parent = item.closest('ul');
                while (parent && parent.id !== 'logo-sidebar') {
                    parent.classList.remove('hidden');
                    let toggleButton = document.querySelector(`[data-collapse-toggle="${parent.id}"]`);
                    if (toggleButton) {
                        toggleButton.classList.add('active');
                    }
                    parent = parent.parentElement.closest('ul');
                }
            }
        });

        // Thêm CSS để áp dụng màu nền cam cho mục active
        const style = document.createElement('style');
        style.innerHTML = `
        #logo-sidebar a.active {
            background-color: red;
            color: white;
            font-weight: 600;
        }
    `;
        document.head.appendChild(style);
    });
</script>
