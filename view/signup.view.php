<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Veille Pédagogique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Créer un compte</h2>
        <form action="/signup" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">S'inscrire</button>
        </form>
        <p class="text-center text-sm mt-4 <?= (strpos($message, 'registered successfully') !== false) ? 'text-green-600' : 'text-red-600' ?>"><?= (!empty($message)) ? $message : "" ?></p>
        <p class="text-center text-sm text-gray-600 mt-4">
            Déjà inscrit ? <a href="/login" class="text-blue-500 hover:underline">Se connecter</a>
        </p>
    </div>
</body>

</html>