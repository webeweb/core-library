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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQtelCodeTacheTrait;

/**
 * Q t e l code tache trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQtelCodeTacheTraitTest extends AbstractTestCase {

    /**
     * Tests the setQtelCodeTache() method.
     *
     * @return void
     */
    public function testSetQtelCodeTache() {

        $obj = new TestStringQtelCodeTacheTrait();

        $obj->setQtelCodeTache("qtelCodeTache");
        $this->assertEquals("qtelCodeTache", $obj->getQtelCodeTache());
    }
}
