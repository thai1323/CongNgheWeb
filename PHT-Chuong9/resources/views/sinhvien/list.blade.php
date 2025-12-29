<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quản lý Sinh Viên</title>
</head>
<body>
<h2>Thêm Sinh Viên</h2>

<form method="POST" action="{{ route('sinhvien.store') }}">
    @csrf
    <input name="ten_sinh_vien" placeholder="Tên sinh viên">
    <input name="email" placeholder="Email">
    <button type="submit">Thêm</button>
</form>

<h2>Danh sách Sinh Viên</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
    </tr>
    @foreach($danhSachSV as $sv)
    <tr>
        <td>{{ $sv->id }}</td>
        <td>{{ $sv->ten_sinh_vien }}</td>
        <td>{{ $sv->email }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
