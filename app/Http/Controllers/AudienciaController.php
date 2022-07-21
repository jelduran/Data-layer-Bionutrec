<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use MailchimpMarketing;

class AudienciaController extends Controller
{
    public function test_api(Request $request)
    {
      $mailchimp = new MailchimpMarketing\ApiClient();

      $mailchimp->setConfig([
          'apiKey' => env('MAILCHIMP_APIKEY'),
          'server' => 'us1'
      ]);

      $datetime = new DateTime("2022-7-01 00:00:00");

      $response = $mailchimp
                  ->lists
                  ->getListMembersInfo(
                      env('MAILCHIMP_LIST_ID'),
                      $fields = ['members.email_address','members.merge_fields'],
                      $exclude_fields = null,
                      $count = '1000',
                      $offset = null,
                      $email_type = null,
                      $status = null,
                      $since_timestamp_opt = $datetime->format(DateTime::ATOM)
                    );
      
      $members = json_decode(json_encode($response), true);

      $output = array_map(fn($e) => array_reduce($e, fn($result, $element) => array_merge($result, is_array($element) ? [...$element] : [$element]), []), $members['members']);
      
      dd($output);

    }
}
