<?php include_once '../layout/header.php'?>

<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg m-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Ajouter une Tâche</h2>
        <form method="POST" class="mb-4">
            <label class="block mb-2 text-gray-700">Titre</label>
            <input type="text" name="title" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            
            <label class="block mt-4 mb-2 text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            
            <label class="block mt-4 mb-2 text-gray-700">Statut</label>
            <select name="status" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="to-do">To Do</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
            </select>
            
            <button type="submit" class="mt-4 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Ajouter</button>
        </form>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 mt-6 m-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Liste des Tâches</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Titre</th>
                    <th class="border border-gray-300 p-2">Description</th>
                    <th class="border border-gray-300 p-2">Statut</th>
                    <th class="border border-gray-300 p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">Exemple de tâche</td>
                    <td class="border border-gray-300 p-2">Description exemple</td>
                    <td class="border border-gray-300 p-2">To Do</td>
                    <td class="border border-gray-300 p-2 text-center flex gap-2 justify-center">
                        <button class="bg-green-500 text-white p-1 rounded hover:bg-green-600">Modifier</button>
                        <button class="bg-red-500 text-white p-1 rounded hover:bg-red-600">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<?php include_once '../layout/footer.php';?>
