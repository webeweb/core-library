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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolArchiverDevisTrait;

/**
 * Archiver devis trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolArchiverDevisTraitTest extends AbstractTestCase {

    /**
     * Tests the setArchiverDevis() method.
     *
     * @return void
     */
    public function testSetArchiverDevis() {

        $obj = new TestBoolArchiverDevisTrait();

        $obj->setArchiverDevis(true);
        $this->assertEquals(true, $obj->getArchiverDevis());
    }
}
