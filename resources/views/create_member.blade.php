<!DOCTYPE html>
<html>
<head>
<title>Gym | Add Member</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    background: linear-gradient(135deg, #0f172a, #020617);
}
</style>

</head>

<body class="text-white flex items-center justify-center min-h-screen">

<div class="w-full max-w-2xl bg-black/60 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-green-500">

<h1 class="text-3xl font-bold mb-6 text-green-400 text-center">
 ADD NEW MEMBER
</h1>

<form action="/members" method="POST">
@csrf

<div class="grid grid-cols-2 gap-4">

<input type="text" name="name" placeholder="Name"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

<input type="number" name="age" placeholder="Age"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

<input type="text" name="phone" placeholder="Phone"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

<input type="text" name="membership_type" placeholder="Membership (Monthly/Yearly)"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

<input type="date" name="start_date"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

<input type="date" name="end_date"
class="p-3 rounded bg-gray-900 border border-green-500 focus:outline-none focus:ring-2 focus:ring-green-400" required>

</div>

<button class="mt-6 w-full bg-green-500 hover:bg-green-600 transition duration-300 py-3 rounded font-bold text-black">
 SAVE MEMBER
</button>

</form>

</div>

</body>
</html>