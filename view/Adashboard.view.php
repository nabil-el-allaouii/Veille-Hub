<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Enseignant - Gestion des Veilles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center space-x-8">
                        <h1 class="text-xl font-bold text-gray-900">Dashboard Enseignant</h1>
                        <div class="hidden md:flex space-x-4">
                            <button onclick="showSection('overview')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link active">Vue d'ensemble</button>
                            <button onclick="showSection('suggestions')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link">Suggestions</button>
                            <button onclick="showSection('assignments')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link">Attributions</button>
                            <button onclick="showSection('calendar')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link">Calendrier</button>
                            <button onclick="showSection('users')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link">Utilisateurs</button>
                            <button onclick="showSection('statistics')" class="text-gray-600 hover:text-gray-900 px-3 py-2 nav-link">Statistiques</button>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="/logout" class="text-gray-600 hover:text-gray-900">Déconnexion</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Overview Section -->
            <section id="overview" class="section-content">
                <!-- Stats Overview -->
                <div class="mb-8 grid grid-cols-1 gap-5 sm:grid-cols-4">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Suggestions en attente</dt>
                            <dd class="mt-1 text-3xl font-semibold text-orange-600">5</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Présentations à venir</dt>
                            <dd class="mt-1 text-3xl font-semibold text-blue-600">8</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Inscriptions en attente</dt>
                            <dd class="mt-1 text-3xl font-semibold text-purple-600">3</dd>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Étudiants Actifs</dt>
                            <dd class="mt-1 text-3xl font-semibold text-green-600">42</dd>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Suggestions Section -->
            <section id="suggestions" class="section-content hidden">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-lg font-medium text-gray-900">Suggestions de Veilles</h2>
                    </div>
                    <div class="border-t border-gray-200">
                        <!-- Example Suggestion Items -->
                        <div class="px-4 py-6 sm:px-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Intelligence Artificielle dans le Web</h3>
                                    <div class="mt-1 flex items-center space-x-4">
                                        <span class="bg-orange-100 text-orange-700 text-xs px-2.5 py-0.5 rounded-full font-medium">
                                            En attente
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Proposé le: 01/01/2024
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Par: John Doe
                                        </span>
                                    </div>
                                </div>
                                <div class="ml-4 flex items-center space-x-4">
                                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                        Approuver
                                    </button>
                                    <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                        Rejeter
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Example Approved Suggestion -->
                        <div class="px-4 py-6 sm:px-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Sécurité des API REST</h3>
                                    <div class="mt-1 flex items-center space-x-4">
                                        <span class="bg-green-100 text-green-700 text-xs px-2.5 py-0.5 rounded-full font-medium">
                                            Approuvé
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Proposé le: 28/12/2023
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Par: Jane Smith
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Assignments Section -->
            <section id="assignments" class="section-content hidden">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                        <h2 class="text-lg font-medium text-gray-900">Attribution des Sujets de Veille</h2>
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Nouvelle Attribution
                        </button>
                    </div>
                    <div class="border-t border-gray-200">
                        <!-- Assignment items -->
                    </div>
                </div>
            </section>

            <!-- Calendar Section -->
            <section id="calendar" class="section-content hidden">
                <!-- Add your calendar content here -->
            </section>

            <!-- Users Section -->
            <section id="users" class="section-content hidden">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-lg font-medium text-gray-900">Gestion des Utilisateurs</h2>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="px-4 py-6 sm:px-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Jane Smith</h3>
                                    <div class="mt-1 flex items-center space-x-4">
                                        <span class="bg-purple-100 text-purple-700 text-xs px-2.5 py-0.5 rounded-full font-medium">
                                            Nouvelle Inscription
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Email: jane.smith@example.com
                                        </span>
                                    </div>
                                </div>
                                <div class="ml-4 flex items-center space-x-4">
                                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                        Valider
                                    </button>
                                    <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                        Refuser
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section -->
            <section id="statistics" class="section-content hidden">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-lg font-medium text-gray-900">Statistiques Globales</h2>
                    </div>
                    <div class="border-t border-gray-200 p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-500">Taux de Participation</h4>
                                <p class="mt-2 text-3xl font-semibold text-gray-900">85%</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-500">Présentations Effectuées</h4>
                                <p class="mt-2 text-3xl font-semibold text-gray-900">127</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-500">Moyenne Participants/Veille</h4>
                                <p class="mt-2 text-3xl font-semibold text-gray-900">12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Function to show selected section and hide others
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section-content').forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected section
            document.getElementById(sectionId).classList.remove('hidden');

            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('text-indigo-600', 'font-medium');
                link.classList.add('text-gray-600');
            });

            // Add active class to clicked nav link
            event.target.classList.remove('text-gray-600');
            event.target.classList.add('text-indigo-600', 'font-medium');
        }

        // Initialize the dashboard with the overview section visible
        document.addEventListener('DOMContentLoaded', function() {
            showSection('overview');
        });
    </script>
</body>

</html>