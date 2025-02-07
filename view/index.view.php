<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Veille Pédagogique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-white border-b">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center h-16">
                <h1 class="text-xl font-bold text-blue-600">SGVP</h1>
                <div class="space-x-6">
                    <a href="/" class="text-gray-600 hover:text-blue-600 transition-colors">Accueil</a>
                    <a href="/calendar" class="text-gray-600 hover:text-blue-600 transition-colors">Calendrier</a>
                    <a href="/login" class="text-gray-600 hover:text-blue-600 transition-colors">Connexion</a>
                    <a href="/signup" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">Inscription</a>
                </div>
            </nav>
        </div>
    </header>


    <section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Optimisez vos présentations pédagogiques</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Suivez, planifiez et organisez vos sessions de veille technique efficacement avec notre plateforme intuitive.</p>
            <a href="#" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                Commencer maintenant
            </a>
        </div>
    </section>


    <section class="container mx-auto px-4 py-16">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800">Calendrier des présentations</h3>
            <a href="#" class="text-blue-600 hover:text-blue-700">Voir tout →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-lg text-gray-800">IA et Éducation</h4>
                        <p class="text-gray-500">Présentation 1</p>
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-sm px-3 py-1 rounded-full">À venir</span>
                </div>
                <p class="text-gray-600 mb-4">Une exploration des applications de l'IA dans l'éducation moderne.</p>
                <div class="flex items-center text-gray-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>10 Février 2025</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-lg text-gray-800">Cybersécurité</h4>
                        <p class="text-gray-500">Présentation 2</p>
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-sm px-3 py-1 rounded-full">À venir</span>
                </div>
                <p class="text-gray-600 mb-4">Les fondamentaux de la sécurité informatique moderne.</p>
                <div class="flex items-center text-gray-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>12 Février 2025</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-lg text-gray-800">Développement Web</h4>
                        <p class="text-gray-500">Présentation 3</p>
                    </div>
                    <span class="bg-blue-100 text-blue-700 text-sm px-3 py-1 rounded-full">À venir</span>
                </div>
                <p class="text-gray-600 mb-4">Les dernières tendances en développement web.</p>
                <div class="flex items-center text-gray-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>15 Février 2025</span>
                </div>
            </div>
        </div>
    </section>


    <footer class="mt-auto bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Le Système de Gestion de Veille Pédagogique. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>