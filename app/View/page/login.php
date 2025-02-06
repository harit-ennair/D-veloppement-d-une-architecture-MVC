<?php include_once __DIR__.'/../layout/header.php'?>

    <form action="/MVC/login" method="POST" class="bg-white p-6 rounded-lg shadow-lg w-96 m-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Connexion</h2>
        
        <label class="block mb-2 text-gray-700">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        
        <label class="block mt-4 mb-2 text-gray-700">Mot de passe</label>
        <input type="password" name="password" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        
        <button type="submit" class="mt-6 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Se connecter</button>
    </form>

    <?php include_once __DIR__.'/../layout/footer.php'?>