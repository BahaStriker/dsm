<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Notify\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class UserTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                     ->users->create("identity");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('Identity' => "identity",);

        $this->assertRequest(new Request(
            'post',
            'https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users',
            null,
            $values
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2017-02-17T07:17:02Z",
                "date_updated": "2017-02-17T07:17:02Z",
                "identity": "identity",
                "links": {
                    "bindings": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/Bindings",
                    "segment_memberships": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/SegmentMemberships"
                },
                "segments": [
                    "segment1"
                ],
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity"
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->users->create("identity");

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                     ->users("NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->users("NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();

        $this->assertTrue($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                     ->users("NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "sid": "USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2017-02-17T07:17:02Z",
                "date_updated": "2017-02-17T07:17:02Z",
                "identity": "identity",
                "links": {
                    "bindings": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/Bindings",
                    "segment_memberships": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/SegmentMemberships"
                },
                "segments": [
                    "segment1"
                ],
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity"
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->users("NUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                     ->users->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "users": [],
                "meta": {
                    "first_page_url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users?PageSize=50&Page=0",
                    "key": "users",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->users->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "users": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2017-02-17T07:17:02Z",
                        "date_updated": "2017-02-17T07:17:02Z",
                        "identity": "identity",
                        "links": {
                            "bindings": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/Bindings",
                            "segment_memberships": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity/SegmentMemberships"
                        },
                        "segments": [
                            "segment1"
                        ],
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "sid": "USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/identity"
                    }
                ],
                "meta": {
                    "first_page_url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users?PageSize=50&Page=0",
                    "key": "users",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://notify.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->users->read();

        $this->assertGreaterThan(0, count($actual));
    }
}