<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Model;

use JsonSerializable;
use WBW\Library\Serializer\Model\JsonResponse;
use WBW\Library\Serializer\Tests\AbstractTestCase;
use WBW\Library\Symfony\Response\DefaultJsonResponseDataInterface;

/**
 * JSON response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Model
 */
class JsonResponseTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JsonResponse();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(DefaultJsonResponseDataInterface::class, $obj);
    }
}
