<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Serializer\General;

use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Response\General\GetSitesResponse;
use WBW\Library\Easilys\Serializer\General\ResponseDeserializer;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Serializer\General
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeGetSitesResponse()
     *
     * @return void
     */
    public function testDeserializeGetSitesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/../../Fixtures/Serializer/General/ResponseDeserializerTest.testDeserializeGetSitesResponse.json");

        $res = ResponseDeserializer::deserializeGetSitesResponse($rawResponse);
        $this->assertInstanceOf(GetSitesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertTrue($res->getSuccess());
        $this->assertNotEquals([], $res->getData());
        $this->assertEquals("", $res->getMessage());
        $this->assertEquals([], $res->getErrors());

        $this->assertInstanceOf(Site::class, $res->getData()[0]);
    }
}
