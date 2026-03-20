<!DOCTYPE html>
<html>
<head>
<title>Members</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-5">Gym Members</h1>

<a href="/members/create"
class="bg-green-500 text-white px-4 py-2 rounded">
Add Member
</a>

<table class="w-full mt-5 bg-white shadow rounded">

<tr class="bg-gray-200">
<th class="p-2">Name</th>
<th class="p-2">Age</th>
<th class="p-2">Phone</th>
<th class="p-2">Membership</th>
<th class="p-2">Actions</th>
</tr>

@foreach($members as $member)
<tr class="text-center border-t">

<td class="p-2">{{ $member->name }}</td>
<td class="p-2">{{ $member->age }}</td>
<td class="p-2">{{ $member->phone }}</td>
<td class="p-2">{{ $member->membership_type }}</td>

<td class="p-2">

<a href="/members/{{ $member->id }}/edit"
class="bg-yellow-400 px-3 py-1 rounded text-white">
Edit
</a>

<form action="/members/{{ $member->id }}" method="POST" class="inline">
@csrf
@method('DELETE')

<button class="bg-red-500 px-3 py-1 rounded text-white">
Delete
</button>

</form>

</td>

</tr>
@endforeach

</table>

</body>
</html>