<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Serializer;

use WBW\Library\Symfony\Serializer\SerializerKeys;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("entity", SerializerKeys::ENTITY);
        $this->assertEquals("event", SerializerKeys::EVENT);
        $this->assertEquals("request", SerializerKeys::REQUEST);
        $this->assertEquals("route", SerializerKeys::ROUTE);
    }
}
