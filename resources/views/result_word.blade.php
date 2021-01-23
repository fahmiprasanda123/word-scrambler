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
    <h1>Your Score! {{ $score }}</h1>
    <div class="col-md-6">
    <form>
        <input type="text" hidden name="score" type="text" value="{{ $score }}">
        <div class="form-group">
          <label for="exampleInputEmail1">True Answer : ant</label><br>
          Your Answer : <input type="text" class="form-control" disabled  value="{{ $input }}" id="word1" name="word1" placeholder="Enter Answer">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">True Answer : alpaca</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input2 }}" id="word2" name="word2" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : beagle</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input3 }}" id="word3" name="word3" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : bee</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input4 }}" id="word4" name="word4" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : bat</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input5 }}" id="word5" name="word5" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : beaver</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input6 }}" id="word6" name="word6" placeholder="Enter Answer">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : bear</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input7 }}" id="word7" name="word7" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : beetle</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input8 }}" id="word8" name="word8" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : bird</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input9 }}" id="word9" name="word9" placeholder="Enter Answer">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">True Answer : buffalo</label><br>
            Your Answer : <input type="text" class="form-control" disabled value="{{ $input10 }}" id="word10" name="word10" placeholder="Enter Answer">
          </div>
          Did You Want Submit Your Score? <br>
          <label for="">Your Name : </label>
          <input type="text" placeholder="Enter Your Name" class="form-control" name="name" id="name"><br>
        <button class="btn btn-primary btn-submit">Submit</button>
        <div>
            <a href="{{ route('welcome') }}">No I Want Back To Welcome Page</a>
        </div>

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

    var name = $("input[name=name]").val();
    var score = $("input[name=score]").val();


    $.ajax({
       type:'POST',
       url:"{{ route('score.post') }}",
       data:{name:name,score:score,
       },
       success:function(data){
              alert(data.success);
            //   window.location.replace(data.url);
       }
    });

});
</script>
  </body>
</html>
