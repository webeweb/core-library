<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Tests\Serializer;

use WBW\Library\QueryBuilder\Serializer\SerializerKeys;
use WBW\Library\QueryBuilder\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("allow_empty_value", SerializerKeys::ALLOW_EMPTY_VALUE);
        $this->assertEquals("callback", SerializerKeys::CALLBACK);
        $this->assertEquals("condition", SerializerKeys::CONDITION);
        $this->assertEquals("field", SerializerKeys::FIELD);
        $this->assertEquals("format", SerializerKeys::FORMAT);
        $this->assertEquals("id", SerializerKeys::ID);
        $this->assertEquals("input", SerializerKeys::INPUT);
        $this->assertEquals("label", SerializerKeys::LABEL);
        $this->assertEquals("max", SerializerKeys::MAX);
        $this->assertEquals("messages", SerializerKeys::MESSAGES);
        $this->assertEquals("min", SerializerKeys::MIN);
        $this->assertEquals("multiple", SerializerKeys::MULTIPLE);
        $this->assertEquals("operator", SerializerKeys::OPERATOR);
        $this->assertEquals("operators", SerializerKeys::OPERATORS);
        $this->assertEquals("rules", SerializerKeys::RULES);
        $this->assertEquals("step", SerializerKeys::STEP);
        $this->assertEquals("type", SerializerKeys::TYPE);
        $this->assertEquals("valid", SerializerKeys::VALID);
        $this->assertEquals("validation", SerializerKeys::VALIDATION);
        $this->assertEquals("value", SerializerKeys::VALUE);
        $this->assertEquals("values", SerializerKeys::VALUES);
    }
}
