<!DOCTYPE html>
<html>
<head>
<title>Gym Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    background: linear-gradient(135deg, #020617, #0f172a);
}
</style>

</head>

<body class="text-white flex">

<!-- Sidebar -->
<div class="w-64 min-h-screen bg-black border-r border-green-500 p-5">

<h1 class="text-2xl font-bold text-green-400 mb-10">PRO FITNESS</h1>

<ul class="space-y-4">

<li>
<a href="/" class="block hover:text-green-400">🏠 Dashboard</a>
</li>

<li>
<a href="/members" class="block hover:text-green-400">👥 Members</a>
</li>

<li>
<a href="/members/create" class="block hover:text-green-400">➕ Add Member</a>
</li>

</ul>

</div>

<!-- Main Content -->
<div class="flex-1 p-10">

<h1 class="text-3xl font-bold mb-8 text-green-400">
Dashboard Overview
</h1>

<div class="grid grid-cols-3 gap-6">

<!-- Total Members -->
<div class="bg-black/60 border border-green-500 p-6 rounded-xl shadow-xl">
<h2 class="text-lg mb-2">Total Members</h2>
<p class="text-3xl font-bold text-green-400">
{{ $totalMembers }}
</p>
</div>

<!-- Active Members -->
<div class="bg-black/60 border border-green-500 p-6 rounded-xl shadow-xl">
<h2 class="text-lg mb-2">Active Members</h2>
<p class="text-3xl font-bold text-green-400">
{{ $activeMembers }}
</p>
</div>

<!-- Expired Members -->
<div class="bg-black/60 border border-red-500 p-6 rounded-xl shadow-xl">
<h2 class="text-lg mb-2">Expired Members</h2>
<p class="text-3xl font-bold text-red-400">
{{ $expiredMembers }}
</p>
</div>

</div>

</div>

</body>
</html>