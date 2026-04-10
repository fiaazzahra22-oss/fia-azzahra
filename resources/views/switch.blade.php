<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    @switch($role)
        @case('admin')
        <p>you are administrator.</p>
        @break

        @case('penulis')
        <p>you are writer.</p>

        @break
        @default
        <p>you are a regular user.</p>

        @endswitch
</body>