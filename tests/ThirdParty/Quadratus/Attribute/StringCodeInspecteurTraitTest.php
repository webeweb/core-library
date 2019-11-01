<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeInspecteurTrait;

/**
 * Code inspecteur trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeInspecteurTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeInspecteur() {

        $obj = new TestStringCodeInspecteurTrait();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }
}
