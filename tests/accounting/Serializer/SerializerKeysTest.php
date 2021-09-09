<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Serializer;

use WBW\Library\Accounting\Serializer\SerializerKeys;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @var string
     */
    public function test__construct(): void {

        $this->assertEquals("code", SerializerKeys::CODE);
        $this->assertEquals("label", SerializerKeys::LABEL);
        $this->assertEquals("number", SerializerKeys::NUMBER);
        $this->assertEquals("type", SerializerKeys::TYPE);
    }
}