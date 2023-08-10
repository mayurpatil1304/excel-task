<html>
    <title></title>
    <head>
    </head>
    <body>
        <form action="excel-action" method="post" name="form" enctype="multipart/form-data">
            @csrf
            <input type="file" name="excel_file" id="excel_file"> 
            <input type="submit" name="submit" value="Upload"> 
        </form>
    </body>