<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Étudiant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (max-width: 768px) {
            .sidebar-open {
                transform: translateX(0);
            }

            .sidebar-closed {
                transform: translateX(-100%);
            }

            .main-content-shifted {
                margin-left: 0;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    <div class="lg:hidden fixed top-4 left-4 z-20">
        <button id="menuButton" class="p-2 bg-white rounded-lg shadow-md hover:bg-gray-50 focus:outline-none">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 hidden lg:hidden"></div>

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r border-gray-200 fixed h-full z-30 transition-transform duration-300 ease-in-out transform -translate-x-full lg:translate-x-0">
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-xl font-bold text-blue-600">SGVP</h2>
                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full">Étudiant</span>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" data-content="dashboard-content" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 group transition-colors">
                            <svg class="w-5 h-5 mr-3 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="#" data-content="presentations-content" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 group transition-colors">
                            <svg class="w-5 h-5 mr-3 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.5-4.5A2 2 0 0015.5 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2z" />
                            </svg>
                            Présentations
                        </a>
                    </li>
                    <li>
                        <a href="#" data-content="subjects-content" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 group transition-colors">
                            <svg class="w-5 h-5 mr-3 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Sujets
                        </a>
                    </li>
                    <li>
                        <a href="#" data-content="rankings-content" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 group transition-colors">
                            <svg class="w-5 h-5 mr-3 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            Classement
                        </a>
                    </li>
                </ul>

                <hr class="my-6 border-gray-200">

                <a href="#" class="flex items-center p-3 text-red-600 rounded-lg hover:bg-red-50 group transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Déconnexion
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main id="mainContent" class="lg:ml-64 flex-1 p-8 transition-all duration-300 ease-in-out">
            <div class="max-w-5xl mx-auto">
                <!-- Dashboard Content -->
                <div id="dashboard-content" class="content-section hidden">
                    <header class="mb-8">
                        <h1 class="text-2xl font-bold text-gray-900">Tableau de Bord</h1>
                        <p class="text-gray-600 mt-1">Aperçu de vos activités</p>
                    </header>
                    <!-- Add dashboard content here -->
                </div>

                <!-- Presentations Content -->
                <div id="presentations-content" class="content-section">
                    <header class="mb-8">
                        <h1 class="text-2xl font-bold text-gray-900">Mes Présentations</h1>
                        <p class="text-gray-600 mt-1">Gérez vos présentations à venir et passées</p>
                    </header>

                    <!-- Stats Overview -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                            <div class="flex items-center">
                                <div class="p-2 bg-blue-50 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-gray-500">Présentations à venir</h3>
                                    <p class="text-2xl font-semibold text-gray-900">2</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                            <div class="flex items-center">
                                <div class="p-2 bg-green-50 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-gray-500">Présentations complétées</h3>
                                    <p class="text-2xl font-semibold text-gray-900">2</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-50 rounded-lg">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-gray-500">Note moyenne</h3>
                                    <p class="text-2xl font-semibold text-gray-900">16.5</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Presentations -->
                    <section class="bg-white rounded-xl border border-gray-100 shadow-sm mb-8">
                        <div class="border-b border-gray-100 p-6">
                            <h2 class="text-lg font-semibold text-gray-900">Présentations à venir</h2>
                        </div>
                        <div class="p-6">
                            <ul class="divide-y divide-gray-100">
                                <li class="py-4 first:pt-0 last:pb-0">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-900">Intelligence Artificielle</h3>
                                            <p class="text-sm text-gray-500 mt-1">Présentation sur les avancées en IA</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full">12 Février 2025</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-900">Blockchain et Cybersécurité</h3>
                                            <p class="text-sm text-gray-500 mt-1">Sécurité des systèmes blockchain</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full">20 Février 2025</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- Past Presentations -->
                    <section class="bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="border-b border-gray-100 p-6">
                            <h2 class="text-lg font-semibold text-gray-900">Présentations passées</h2>
                        </div>
                        <div class="p-6">
                            <ul class="divide-y divide-gray-100">
                                <li class="py-4 first:pt-0 last:pb-0">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-900">Développement Web Moderne</h3>
                                            <p class="text-sm text-gray-500 mt-1">Frameworks et outils modernes</p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-sm font-medium text-gray-600">Note:</span>
                                                <span class="ml-2 text-sm text-green-600 font-medium">17/20</span>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">05 Janvier 2025</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-900">Big Data et Analyse</h3>
                                            <p class="text-sm text-gray-500 mt-1">Analyse des données massives</p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-sm font-medium text-gray-600">Note:</span>
                                                <span class="ml-2 text-sm text-green-600 font-medium">16/20</span>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full">22 Décembre 2024</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!-- Subjects Content -->
                <div id="subjects-content" class="content-section hidden">
                    <header class="mb-8">
                        <h1 class="text-2xl font-bold text-gray-900">Sujets</h1>
                        <p class="text-gray-600 mt-1">Explorez et suggérez des sujets de présentation</p>
                    </header>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Suggested Topics -->
                        <div class="bg-white rounded-xl border border-gray-100 shadow-sm">
                            <div class="border-b border-gray-100 p-6">
                                <h2 class="text-lg font-semibold text-gray-900">Sujets Suggérés</h2>
                            </div>
                            <div class="p-6">
                                <ul class="divide-y divide-gray-100">
                                    <li class="py-4 first:pt-0 last:pb-0">
                                        <h3 class="text-base font-medium text-gray-900">Cloud Computing</h3>
                                        <p class="text-sm text-gray-500 mt-1">Architecture et services cloud modernes</p>
                                    </li>
                                    <li class="py-4">
                                        <h3 class="text-base font-medium text-gray-900">DevOps</h3>
                                        <p class="text-sm text-gray-500 mt-1">Pratiques et outils DevOps</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Suggest New Topic -->
                        <div class="bg-white rounded-xl border border-gray-100 shadow-sm">
                            <div class="border-b border-gray-100 p-6">
                                <h2 class="text-lg font-semibold text-gray-900">Suggérer un Sujet</h2>
                            </div>
                            <div class="p-6">
                                <form action="/dashboard" class="space-y-4" method="post">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                        <input name="subject" type="text" class="w-full rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                        Soumettre
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rankings Content -->
                <div id="rankings-content" class="content-section hidden">
                    <header class="mb-8">
                        <h1 class="text-2xl font-bold text-gray-900">Classement</h1>
                        <p class="text-gray-600 mt-1">Découvrez le classement des présentations</p>
                    </header>

                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="border-b border-gray-100 p-6">
                            <h2 class="text-lg font-semibold text-gray-900">Classement Global</h2>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rang</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Étudiant</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Moyenne</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Présentations</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jean Dupont</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18.5</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menuButton');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const overlay = document.getElementById('overlay');
            let isSidebarOpen = false;

            // Function to toggle sidebar
            function toggleSidebar() {
                isSidebarOpen = !isSidebarOpen;

                if (isSidebarOpen) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when sidebar is open
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                }
            }

            // Toggle sidebar when menu button is clicked
            menuButton.addEventListener('click', toggleSidebar);

            // Close sidebar when clicking overlay
            overlay.addEventListener('click', toggleSidebar);

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) { // lg breakpoint
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.style.overflow = '';
                    isSidebarOpen = false;
                } else if (!isSidebarOpen) {
                    sidebar.classList.add('-translate-x-full');
                }
            });

            // Add active state to current page link
            const sidebarLinks = document.querySelectorAll('nav a');
            const currentPath = window.location.pathname;

            sidebarLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('text-blue-600', 'bg-blue-50');
                    link.classList.remove('text-gray-700', 'hover:bg-blue-50');
                }

                // Add hover animation
                link.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('text-blue-600')) {
                        this.classList.add('transform', 'translate-x-2');
                    }
                });

                link.addEventListener('mouseleave', function() {
                    this.classList.remove('transform', 'translate-x-2');
                });
            });

            // Add smooth transition for sidebar links
            const sidebarLinkIcons = document.querySelectorAll('nav a svg');
            sidebarLinkIcons.forEach(icon => {
                icon.classList.add('transition-transform', 'duration-200');
            });

            // Optional: Add keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isSidebarOpen) {
                    toggleSidebar();
                }
            });

            // Add dropdown functionality
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    // Toggle the dropdown
                    const dropdownContent = this.nextElementSibling;
                    const arrow = this.querySelector('svg:last-child');

                    // Close all other dropdowns
                    dropdownToggles.forEach(otherToggle => {
                        if (otherToggle !== toggle) {
                            const otherContent = otherToggle.nextElementSibling;
                            const otherArrow = otherToggle.querySelector('svg:last-child');
                            otherContent.classList.add('hidden');
                            otherArrow.style.transform = 'rotate(0deg)';
                        }
                    });

                    // Toggle current dropdown
                    dropdownContent.classList.toggle('hidden');

                    // Rotate arrow
                    if (dropdownContent.classList.contains('hidden')) {
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        arrow.style.transform = 'rotate(180deg)';
                    }
                });
            });

            // Optional: Close dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.dropdown-toggle')) {
                    dropdownToggles.forEach(toggle => {
                        const dropdownContent = toggle.nextElementSibling;
                        const arrow = toggle.querySelector('svg:last-child');
                        dropdownContent.classList.add('hidden');
                        arrow.style.transform = 'rotate(0deg)';
                    });
                }
            });

            // Content switching functionality
            const contentSections = document.querySelectorAll('.content-section');

            function showContent(contentId) {
                // Hide all content sections
                contentSections.forEach(section => {
                    section.classList.add('hidden');
                });

                // Show the selected content section
                const selectedContent = document.getElementById(contentId);
                if (selectedContent) {
                    selectedContent.classList.remove('hidden');
                }
            }

            // Add click handlers to sidebar links
            const sidebarLinksContent = document.querySelectorAll('nav a, .dropdown-toggle');
            sidebarLinksContent.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    sidebarLinksContent.forEach(l => {
                        l.classList.remove('text-blue-600', 'bg-blue-50');
                        l.classList.add('text-gray-700');
                    });

                    // Add active class to clicked link
                    this.classList.add('text-blue-600', 'bg-blue-50');
                    this.classList.remove('text-gray-700');

                    // Show corresponding content
                    const contentId = this.getAttribute('data-content');
                    if (contentId) {
                        showContent(contentId);
                    }
                });
            });
        });
    </script>
</body>

</html>