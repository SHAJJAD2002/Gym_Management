<!DOCTYPE html>
<html>
<head>
<title>Trainers</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white p-10">

<h1 class="text-3xl text-green-400 mb-5"> Trainers</h1>

<a href="/trainers/create"
class="bg-green-500 px-4 py-2 rounded text-black">
Add Trainer
</a>

<table class="w-full mt-5 border border-green-500">

<tr class="bg-gray-900">
<th class="p-2">Name</th>
<th class="p-2">Specialization</th>
<th class="p-2">Phone</th>
<th class="p-2">Experience</th>
<th class="p-2">Actions</th>
</tr>

@foreach($trainers as $trainer)
<tr class="text-center border-t border-green-500">

<td>{{ $trainer->name }}</td>
<td>{{ $trainer->specialization }}</td>
<td>{{ $trainer->phone }}</td>
<td>{{ $trainer->experience }} yrs</td>

<td>

<a href="/trainers/{{ $trainer->id }}/edit"
class="bg-yellow-400 px-2 py-1 rounded text-black">
Edit
</a>

<form action="/trainers/{{ $trainer->id }}" method="POST" class="inline">
@csrf
@method('DELETE')

<button class="bg-red-500 px-2 py-1 rounded">
Delete
</button>

</form>

</td>

</tr>
@endforeach

</table>

</body>
</html>