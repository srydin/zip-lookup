<?php
include_once ('../zip_lookup.php');

// Define zip
$zip = ($_GET['zip'] ? $_GET['zip'] : '');

// Lookup city/state values
$response = zip_lookup($zip);
$city = $response['city'];
$state = $response['state'];

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1>Lookup by Zip</h1>
    <hr>
    <form method="get">
        <div class="form-group">
            <label for="zip">Zip City/State</label>
            <input id="zip" class="form-control" name="zip" type="number" minlength="3" value="<?php echo $zip; ?>">
            <small id="zipHelp" class="form-text text-muted">Enter your zip code.</small>
        </div>
        <button type="submit" class="btn btn-primary">Get City and State</button>
    </form>
    <hr>
    <h2>Response</h2>
    <form method="get">
        <div class="form-group">
            <label for="zip">Zip Code</label>
            <input id="zip" class="form-control" name="zip" value="<?php echo $zip; ?>" type="number" minlength="5" readonly>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input id="cityHelp" class="form-control" name="city" value="<?php echo $city; ?>" type="text" readonly>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input id="stateHelp" class="form-control" name="state" value="<?php echo $state; ?>" type="text" readonly>
        </div>
    </form>

</div>
</body>
</html>

