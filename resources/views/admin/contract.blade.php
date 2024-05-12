@extends('admin.home')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        form {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        input[type="date"], input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

<body>
<br>

<form>
    <table>
        <tr>
            <th>Ngày đặt:</th>
            <td><input type="date" name="ngaydat" required></td>
        </tr>
        <tr>
            <th>Loại xe:</th>
            <td><input type="text" name="loaixe" required></td>
        </tr>
        <tr>
            <th>Biển số xe:</th>
            <td><input type="text" name="bienso" required></td>
        </tr>
{{--        <tr>--}}
{{--            <th>Trạng thái thuê:</th>--}}
{{--            <td><select>--}}
{{--                    <option></option>--}}
{{--                </select></td>--}}
{{--        </tr>--}}
        <tr>
            <th>Ngày trả:</th>
            <td><input type="date" name="ngaytra" required></td>
        </tr>
        <tr>
            <th>Tên khách hàng:</th>
            <td><input type="text" name="tenkhachhang" value="Nguyễn Văn A" required></td>
        </tr>
        <tr>
            <th>SĐT:</th>
            <td><input type="tel" name="sdt" value="0254789613" required></td>
        </tr>
        <tr>
            <th>Ghi chú:</th>
            <td><input type="text" name="ghichu" value="11" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Xác nhận"></td>
        </tr>
    </table>
</form>
</body>
</html>

@endsection
