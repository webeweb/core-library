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
use WBW\Library\Wsdl2Php\Builder\PackageBuilder;
use WBW\Library\Wsdl2Php\Provider\WsdlProvider;
use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Model\TestAbstractNode;

/**
 * Package builder test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Builder
 */
class PackageBuilderTest extends AbstractTestCase {

    /**
     * Test addClassBuilder()
     *
     * @return void
     */
    public function testAddClassBuilder(): void {

        // Set a Class builder mock.
        $classBuilder = new ClassBuilder(new TestAbstractNode());

        $obj = new PackageBuilder(new WsdlProvider($this->wsdl));

        $obj->addClassBuilder($classBuilder);
        $this->assertEquals([$classBuilder], $obj->getClassBuilders());
    }

    /**
     * Test setAuthor()
     *
     * @return void
     */
    public function testSetAuthor(): void {

        $obj = new PackageBuilder(new WsdlProvider($this->wsdl));

        $obj->setAuthor("author");
        $this->assertEquals("author", $obj->getAuthor());
    }

    /**
     * Test setCopyright()
     *
     * @return void
     */
    public function testSetCopyright(): void {

        $obj = new PackageBuilder(new WsdlProvider($this->wsdl));

        $obj->setCopyright("copyright");
        $this->assertEquals("copyright", $obj->getCopyright());
    }

    /**
     * Test setPackage()
     *
     * @return void
     */
    public function testSetPackage(): void {

        $obj = new PackageBuilder(new WsdlProvider($this->wsdl));

        $obj->setPackage("package");
        $this->assertEquals("package", $obj->getPackage());
    }

    /**
     * Test setYear()
     *
     * @return void
     */
    public function testSetYear(): void {

        $obj = new PackageBuilder(new WsdlProvider($this->wsdl));

        $obj->setYear("year");
        $this->assertEquals("year", $obj->getYear());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Provider mock.
        $provider = new WsdlProvider($this->wsdl);

        $obj = new PackageBuilder($provider);

        $this->assertNull($obj->getDirectory());
        $this->assertNull($obj->getNamespace());
        $this->assertSame($provider, $obj->getProvider());

        $this->assertNull($obj->getAuthor());
        $this->assertEquals([], $obj->getClassBuilders());
        $this->assertNull($obj->getCopyright());
        $this->assertNull($obj->getPackage());
        $this->assertNull($obj->getYear());
    }
}
