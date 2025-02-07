<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Veille Pédagogique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Se connecter</h2>
        <form action="/login" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>
            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2"> Se souvenir de moi
                </label>
                <a href="reset-password.html" class="text-blue-500 hover:underline">Mot de passe oublié?</a>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Se connecter</button>
        </form>
        <p class="text-center mt-3 text-red-600"><?= (!empty($signIn)) ? $signIn : "" ?></p>
        <p class="text-center text-sm text-gray-600 mt-4">
            Pas encore inscrit ? <a href="/signup" class="text-blue-500 hover:underline">Créer un compte</a>
        </p>
    </div>
</body>

</html>