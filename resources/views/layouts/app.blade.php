<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('permission-editor/css/app.css') }}" rel="stylesheet" />
    <title>Laravel Permission Editor</title>
</head>
<body>

<nav>
    <div>
        Laravel Permission Editor
    </div>
    <div>
        <a href="{{ route('permission-editor.roles.index') }}">Roles</a>
        <a href="{{ route('permission-editor.permissions.index') }}">Permissions</a>
    </div>
</nav>

<main>
    @yield('content')
</main>
</div>

</body>
</html>
