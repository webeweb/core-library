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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringProchaineLettreTiersTrait;

/**
 * Prochaine lettre tiers trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringProchaineLettreTiersTraitTest extends AbstractTestCase {

    /**
     * Tests the setProchaineLettreTiers() method.
     *
     * @return void
     */
    public function testSetProchaineLettreTiers() {

        $obj = new TestStringProchaineLettreTiersTrait();

        $obj->setProchaineLettreTiers("prochaineLettreTiers");
        $this->assertEquals("prochaineLettreTiers", $obj->getProchaineLettreTiers());
    }
}
