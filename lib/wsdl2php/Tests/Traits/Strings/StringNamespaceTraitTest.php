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

namespace WBW\Library\Wsdl2Php\Tests\Traits\Strings;

use WBW\Library\Wsdl2Php\Tests\AbstractTestCase;
use WBW\Library\Wsdl2Php\Tests\Fixtures\Traits\Strings\TestStringNamespaceTrait;

/**
 * String target namespace trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Traits\Strings
 */
class StringNamespaceTraitTest extends AbstractTestCase {

    /**
     * Test setNamespace()
     *
     * @return void
     */
    public function testSetNamespace(): void {

        $obj = new TestStringNamespaceTrait();

        $obj->setNamespace("namespace");
        $this->assertEquals("namespace", $obj->getNamespace());
    }
}
