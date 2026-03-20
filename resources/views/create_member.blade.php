
<!DOCTYPE html>
<html>
<head>
<title>Add Member</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-5">Add New Member</h1>

<form action="/members" method="POST" class="bg-white p-6 rounded shadow w-1/2">
@csrf

<label>Name</label>
<input type="text" name="name" class="w-full p-2 mb-3 border rounded" required>

<label>Age</label>
<input type="number" name="age" class="w-full p-2 mb-3 border rounded" required>

<label>Phone</label>
<input type="text" name="phone" class="w-full p-2 mb-3 border rounded" required>

<label>Membership Type</label>
<input type="text" name="membership_type" class="w-full p-2 mb-3 border rounded" placeholder="Monthly / Yearly" required>

<label>Start Date</label>
<input type="date" name="start_date" class="w-full p-2 mb-3 border rounded" required>

<label>End Date</label>
<input type="date" name="end_date" class="w-full p-2 mb-3 border rounded" required>

<button class="bg-blue-500 text-white px-4 py-2 rounded">
Save Member
</button>

</form>

</body>
</html>