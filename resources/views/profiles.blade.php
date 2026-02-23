<!-- resources/views/profiles.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    @if($profile)
        <p>Name: {{ $profile->name }}</p>
        <p>Section: {{ $profile->section }}</p>
    @else
        <p>No profile data found.</p>
    @endif
</body>
</html>
