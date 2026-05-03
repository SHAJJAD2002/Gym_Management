<!DOCTYPE html>
<html>
<head>
<title>Add Trainer</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white flex items-center justify-center min-h-screen">

<div class="bg-gray-900 p-8 rounded-xl w-1/2 border border-green-500">

<h1 class="text-2xl text-green-400 mb-5"> Add Trainer</h1>

<form action="/trainers" method="POST">
@csrf

<input type="text" name="name" placeholder="Name"
class="w-full p-2 mb-3 bg-black border border-green-500 rounded" required>

<input type="text" name="specialization" placeholder="Specialization"
class="w-full p-2 mb-3 bg-black border border-green-500 rounded" required>

<input type="text" name="phone" placeholder="Phone"
class="w-full p-2 mb-3 bg-black border border-green-500 rounded" required>

<input type="number" name="experience" placeholder="Experience (years)"
class="w-full p-2 mb-3 bg-black border border-green-500 rounded" required>

<button class="bg-green-500 px-4 py-2 rounded text-black w-full">
Save Trainer
</button>

</form>

</div>

</body>
</html>