<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold">Members</h2>
            <p class="text-2xl mt-2">{{ $members_count }}</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold">Trainers</h2>
            <p class="text-2xl mt-2">{{ $trainers_count }}</p>
        </div>
    </div>
</body>
</html>