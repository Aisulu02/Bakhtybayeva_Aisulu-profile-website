<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send email</title>
</head>
<body>
<form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Surname</label>
     <input type="text" name="surname" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Photo</label>
     <input type="image" src="" alt="your img" class="form-control" >
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
</body>
</html>