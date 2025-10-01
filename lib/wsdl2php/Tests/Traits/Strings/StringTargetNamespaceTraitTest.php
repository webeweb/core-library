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
use WBW\Library\Wsdl2Php\Tests\Fixtures\Traits\Strings\TestStringTargetNamespaceTrait;

/**
 * String target namespace trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Traits\Strings
 */
class StringTargetNamespaceTraitTest extends AbstractTestCase {

    /**
     * Test setTargetNamespace()
     *
     * @return void
     */
    public function testSetTargetNamespace(): void {

        $obj = new TestStringTargetNamespaceTrait();

        $obj->setTargetNamespace("targetNamespace");
        $this->assertEquals("targetNamespace", $obj->getTargetNamespace());
    }
}
