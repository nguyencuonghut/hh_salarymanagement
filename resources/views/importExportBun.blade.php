<html lang="en">
<head>
    <title>Salary sending</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>

<body>
<br/>
<br/>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="padding:12px 0px;font-size:25px;"><strong>Website gửi thông tin lương công ty cổ phần Buntaphan</strong></h3>
        </div>
        <div class="panel-body">

            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <h3>Import bảng lương</h3>
            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importExcelBun') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                <input type="file" name="import_file" />
                {{ csrf_field() }}
                <br/>

                <button class="btn btn-primary">Import CSV hoặc Excel File</button>

            </form>
            <br/>


            <h3>Gửi email tới nhân viên</h3>
            <div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">
                <a href="{{ url('sendbunmail/xls') }}"><button class="btn btn-success btn-lg">Gửi mail</button></a>
            </div>

        </div>
    </div>
</div>
</table>

</body>

</html>