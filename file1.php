<?
require __DIR__ . '/vendor/autoload.php';


//Rssseading data from spreadsheet.

$client = new \Google_Client();

$client->setApplicationName('Google Sheets and PHP');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1VMboyodfxigHcrJWfFKn9ggrmxWBAytXpOzfcuRCVF4";

$get_range = "Sheet1!A:A";

$response = $service->spreadsheets_values->get($spreadsheetId, $get_range);

$values = $response->getValues();

print_r( $values ); die();
