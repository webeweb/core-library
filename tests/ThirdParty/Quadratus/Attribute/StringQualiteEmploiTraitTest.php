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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQualiteEmploiTrait;

/**
 * Qualite emploi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQualiteEmploiTraitTest extends AbstractTestCase {

    /**
     * Tests the setQualiteEmploi() method.
     *
     * @return void
     */
    public function testSetQualiteEmploi() {

        $obj = new TestStringQualiteEmploiTrait();

        $obj->setQualiteEmploi("qualiteEmploi");
        $this->assertEquals("qualiteEmploi", $obj->getQualiteEmploi());
    }
}
