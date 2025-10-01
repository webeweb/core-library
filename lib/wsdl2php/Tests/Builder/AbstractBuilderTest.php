<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Tests\Builder;

use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Builder\TestAbstractBuilder;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Model\TestAbstractNode;

/**
 * Abstract builder test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Builder
 */
class AbstractBuilderTest extends AbstractTestCase {

    /**
     * Test isPhpArray()
     *
     * @return void
     */
    public function testIsPhpArray(): void {

        $obj = new TestAbstractBuilder(new TestAbstractNode());

        $this->assertFalse($obj->isPhpArray("bool"));
        $this->assertFalse($obj->isPhpArray("float"));
        $this->assertFalse($obj->isPhpArray("int"));
        $this->assertFalse($obj->isPhpArray("mixed"));
        $this->assertFalse($obj->isPhpArray("string"));

        $this->assertTrue($obj->isPhpArray("bool[]"));
        $this->assertTrue($obj->isPhpArray("float[]"));
        $this->assertTrue($obj->isPhpArray("int[]"));
        $this->assertTrue($obj->isPhpArray("mixed[]"));
        $this->assertTrue($obj->isPhpArray("string[]"));
    }

    /**
     * Test php2use()
     *
     * @return void
     */
    public function testPhp2use(): void {

        $obj = new TestAbstractBuilder(new TestAbstractNode());

        $this->assertNull($obj->php2use(null));
        $this->assertNull($obj->php2use("bool"));
        $this->assertNull($obj->php2use("float"));
        $this->assertNull($obj->php2use("int"));
        $this->assertNull($obj->php2use("mixed"));
        $this->assertNull($obj->php2use("string"));

        $this->assertEquals("DateTime", $obj->php2use("DateTime"));
    }

    /**
     * Test type2php()
     *
     * @return void
     */
    public function testType2php(): void {

        $obj = new TestAbstractBuilder(new TestAbstractNode());

        $this->assertEquals("mixed", $obj->type2php(null));

        $this->assertEquals("string", $obj->type2php(":base64Binary"));
        $this->assertEquals("string", $obj->type2php(":unsignedByte"));
        $this->assertEquals("bool", $obj->type2php(":boolean"));
        $this->assertEquals("DateTime", $obj->type2php(":dateTime"));
        $this->assertEquals("float", $obj->type2php(":double"));
        $this->assertEquals("int", $obj->type2php(":int"));
        $this->assertEquals("string", $obj->type2php(":string"));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Test node mock.
        $node = new TestAbstractNode();

        $obj = new TestAbstractBuilder($node);

        $this->assertSame($node, $obj->getNode());
    }
}
