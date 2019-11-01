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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbJourCpSupTrait;

/**
 * N b jour cp sup trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbJourCpSupTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJourCpSup() method.
     *
     * @return void
     */
    public function testSetNbJourCpSup() {

        $obj = new TestFloatNbJourCpSupTrait();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }
}
