
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<form action="result.php" method="POST" class="rounded">

<div class="row g-3 mt-2 align-items-center">
  <div class="col-6">
    <input type="text" id="name" class="form-control" aria-describedby="passwordHelpInline" placeholder="Your name ..." name="name" required>
  </div>
  <div class="col-6">
      <select class="form-select" aria-label="Default select example" name="club">
          <option selected>Choose club you want to apply</option>
          <option value="Design club">Design club</option>
          <option value="Music club">Music club</option> 
          <option value="Robotic club">Robotic club</option>
        </select>
  </div>
</div>

  <div class="row g-3 mt-2">
    <h5>Be time for you :</h5>
  </div>  
  <div class="row g-3 align-items-center">

  
    <div class="col-auto">
    <div class="form-check">
          <input class="form-check-input" type="radio" name="time" id="flexRadioDefault3" value="saturday morning" >
          <label class="form-check-label" for="flexRadioDefault2">
          Saturday afternoon
          </label>
        </div>
    </div>
    <div class="col-auto">
    <div class="form-check">
          <input class="form-check-input" type="radio" name="time" id="flexRadioDefault3" value="saturday afternoon" >
          <label class="form-check-label" for="flexRadioDefault2">
          Saturday afternoon
          </label>
        </div>
    </div>
    <div class="col-auto">
    <div class="form-check">
          <input class="form-check-input" type="radio" name="time" id="flexRadioDefault3"  value="saturday everning">
          <label class="form-check-label" for="flexRadioDefault2">
          Saturday everning
          </label>
        </div>
    </div>
    
</div>
<div class="row g-3 mt-2">
    <h5>Your skil :</h5>
</div>
<div class="row g-6 align-items-center justify-content-end">
    <div class="col-6">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="the best coder" id="flexCheckDefault" name="skill[]">
        <label class="form-check-label" for="flexCheckDefault">
        The best coder
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="a super star" id="flexCheckChecked"  name="skill[]">
        <label class="form-check-label" for="flexCheckChecked">
        a super star
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="a singer" id="flexCheckDefault" name="skill[]">
        <label class="form-check-label" for="flexCheckDefault">
        Singer
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="the best eater" id="flexCheckChecked"  name="skill[]">
        <label class="form-check-label" for="flexCheckChecked">
        The best eater
        </label>
        </div>

    </div>

        <div class="col-6">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="the best eater" id="flexCheckDefault" name="skill[]">
            <label class="form-check-label" for="flexCheckDefault">
            The best eater
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="a crazy dancer" id="flexCheckChecked"  name="skill[]">
            <label class="form-check-label" for="flexCheckChecked">
            a crazy dancer
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="a good in design" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            good in design
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="a good in speeches" id="flexCheckChecked" bname="skill[]">
            <label class="form-check-label" for="flexCheckChecked">
            good in speeches
            </label>
            </div>

    </div>
</div>
<div class="row g-6 align-items-center">
  <button type="submit" class="btn btn-primary mt-3">submit</button>
</div>


</form>




</body>
</html>