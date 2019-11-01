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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatQuantiteHeureTrait;

/**
 * Quantite heure trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatQuantiteHeureTraitTest extends AbstractTestCase {

    /**
     * Tests the setQuantiteHeure() method.
     *
     * @return void
     */
    public function testSetQuantiteHeure() {

        $obj = new TestFloatQuantiteHeureTrait();

        $obj->setQuantiteHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteHeure());
    }
}
