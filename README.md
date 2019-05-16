# Zip Code Lookup

A simple PHP utility for looking up city and/or state based on zip code. Takes a Zip argument request and returns an array with City and State info.

## Getting Started

The primary use case for this utility is form data handling, and removing the need for users to submit city/state info when Zip is sufficient.
So wherever you're handling the form data, the included file contains a zip_lookup() function that will return an array with city and state data.

For example:
```
// lookup city and state
$response = zip_lookup($zip);
```

$response is an array that contains both city and state, and looks like this:
```
// zip_lookup(90210) would return
$response = [
	'city' => 'Beverly Hills',
	'state => 'CA'
]
```

Of course, it's easy to use these values as standalone variables:

```
// create variables for city and state from the $response array
$city = $response['city'];
$state = $response['state'];
```

Be sure to include the file in your form action page:
```
include_once('path-to-file/zip_lookup');
```

### Example Form

Host and navigate to `/example/index.php`

Screenshot:
![Example Form](/screenshot-form.png?raw=true "Example Form")


### Limitations

This is not a small file. If motivated, you could convert the $data array to an SQL (or equivalent) database.