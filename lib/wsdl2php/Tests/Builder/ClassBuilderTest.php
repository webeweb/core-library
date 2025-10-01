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

use WBW\Library\Wsdl2Php\Builder\ClassBuilder;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Model\TestAbstractNode;

/**
 * Class builder test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Builder
 */
class ClassBuilderTest extends AbstractTestCase {

    /**
     * Test addAttribute()
     *
     * @return void
     */
    public function testAddAttribute(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->addAttribute("attribute");
        $this->assertEquals(["attribute"], $obj->getAttributes());
    }

    /**
     * Test addImplement()
     *
     * @return void
     */
    public function testAddImplement(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->addImplement("implement");
        $this->assertEquals(["implement"], $obj->getImplements());
    }

    /**
     * Test addType()
     *
     * @return void
     */
    public function testAddType(): void {

        $obj = new ClassBuilder(new TestAbstractNode());
        $obj->addAttribute("attribute");

        $obj->addType("attribute", "type");
        $this->assertEquals(["attribute" => "type"], $obj->getTypes());
    }

    /**
     * Test addUse()
     *
     * @return void
     */
    public function testAddUse(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->addUse("use");
        $this->assertEquals(["use"], $obj->getUses());
    }

    /**
     * Test setClassname()
     *
     * @return void
     */
    public function testSetClassname(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->setClassname("classname");
        $this->assertEquals("classname", $obj->getClassname());
    }

    /**
     * Test setExtends()
     *
     * @return void
     */
    public function testSetExtends(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->setExtends("extends");
        $this->assertEquals("extends", $obj->getExtends());
    }

    /**
     * Test setHeader()
     *
     * @return void
     */
    public function testSetHeader(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $obj->setHeader("header");
        $this->assertEquals("header", $obj->getHeader());
    }

    /**
     * Test the () method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClassBuilder(new TestAbstractNode());

        $this->assertNull($obj->getNamespace());
        $this->assertNull($obj->getProvider());

        $this->assertNull($obj->getHeader());
        $this->assertNull($obj->getClassname());
        $this->assertEquals([], $obj->getUses());
        $this->assertNull($obj->getExtends());
        $this->assertEquals([], $obj->getImplements());
        $this->assertEquals([], $obj->getAttributes());
        $this->assertEquals([], $obj->getTypes());
    }
}
