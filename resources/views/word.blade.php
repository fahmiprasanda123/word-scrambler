<!doctype html>
<html lang="en">
  <head>
    <title>Scrambler Word!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
    <h1>Scrambler Word! animal Name</h1>
    <div class="col-md-6">
    <form>

        <div class="form-group">
          <label for="exampleInputEmail1">{{ str_shuffle('ant') }}</label>
          <input type="text" class="form-control" required id="word1" name="word1" placeholder="Enter Answer">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('alpaca') }}</label>
            <input type="text" class="form-control" required id="word2" name="word2" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('beagle') }}</label>
            <input type="text" class="form-control" required id="word3" name="word3" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('bee') }}</label>
            <input type="text" class="form-control" required id="word4" name="word4" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('bat') }}</label>
            <input type="text" class="form-control" required id="word5" name="word5" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('beaver') }}</label>
            <input type="text" class="form-control" required id="word6" name="word6" placeholder="Enter Answer">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('bear') }}</label>
            <input type="text" class="form-control" required id="word7" name="word7" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('beetle') }}</label>
            <input type="text" class="form-control" required id="word8" name="word8" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('bird') }}</label>
            <input type="text" class="form-control" required id="word9" name="word9" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">{{ str_shuffle('buffalo') }}</label>
            <input type="text" class="form-control" required id="word10" name="word10" placeholder="Enter Answer">
          </div>

        <button class="btn btn-primary btn-submit">Submit</button>
      </form>
    </div>
    <script>
            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var word1 = $("input[name=word1]").val();
        var word2 = $("input[name=word2]").val();
        var word3 = $("input[name=word3]").val();
        var word4 = $("input[name=word4]").val();
        var word5 = $("input[name=word5]").val();
        var word6 = $("input[name=word6]").val();
        var word7 = $("input[name=word7]").val();
        var word8 = $("input[name=word8]").val();
        var word9 = $("input[name=word9]").val();
        var word10 = $("input[name=word10]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('word.post') }}",
           data:{word1:word1,word2:word2,
           word3:word3,
           word4:word4,
           word5,word5,
           word6,word6,
           word7,word7,
           word8,word8,
           word9,word9,
           word10,word10,
           },
           success:function(data){
                //  alert(data.success);
                 window.location.replace(data.url);
           }
        });

    });
    </script>
  </body>
</html>
