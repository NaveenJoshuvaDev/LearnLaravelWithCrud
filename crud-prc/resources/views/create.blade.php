<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="background:black;height:100%">

        <form action="" class="s" style="  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: black;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-bg-light p-3">ProductName</label>
                <input type="email" name="producname" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-bg-light p-3">ProductImages</label>
                <textarea class="form-control" name="pimages" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!-- imported item origin -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="imported[]" type="checkbox" id="inlineCheckbox1" value="India">
                <label class="form-check-label text-bg-light p-3" for="inlineCheckbox1">India</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="imported[]"  id="inlineCheckbox2" value="USA">
                <label class="form-check-label text-bg-light p-3" for="inlineCheckbox2">USA</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="imported[]"  id="inlineCheckbox3" value="Canada" >
                <label class="form-check-label text-bg-light p-3" for="inlineCheckbox3">Canada </label>
            </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>