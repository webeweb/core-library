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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeOrganismeArrcoTrait;

/**
 * Code organisme arrco trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeOrganismeArrcoTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeOrganismeArrco() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeArrco() {

        $obj = new TestStringCodeOrganismeArrcoTrait();

        $obj->setCodeOrganismeArrco("codeOrganismeArrco");
        $this->assertEquals("codeOrganismeArrco", $obj->getCodeOrganismeArrco());
    }
}
