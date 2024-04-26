<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Response;

use JsonSerializable;
use WBW\Library\Common\Model\Response\DefaultJsonResponseData;
use WBW\Library\Common\Model\Response\DefaultJsonResponseDataInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Default JSON response data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Response
 */
class DefaultJsonResponseDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new DefaultJsonResponseData();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setSuccess()
     *
     * @return void
     */
    public function testSetSuccess(): void {

        $obj = new DefaultJsonResponseData();

        $obj->setSuccess(true);
        $this->assertTrue($obj->getSuccess());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new DefaultJsonResponseData();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(DefaultJsonResponseDataInterface::class, $obj);

        $this->assertNull($obj->getData());
        $this->assertNull($obj->getErrors());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getSuccess());
    }
}
