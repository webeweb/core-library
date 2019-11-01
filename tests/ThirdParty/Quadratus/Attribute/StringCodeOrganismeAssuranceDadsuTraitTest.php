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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeOrganismeAssuranceDadsuTrait;

/**
 * Code organisme assurance d a d s u trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeOrganismeAssuranceDadsuTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeOrganismeAssuranceDadsu() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeAssuranceDadsu() {

        $obj = new TestStringCodeOrganismeAssuranceDadsuTrait();

        $obj->setCodeOrganismeAssuranceDadsu("codeOrganismeAssuranceDadsu");
        $this->assertEquals("codeOrganismeAssuranceDadsu", $obj->getCodeOrganismeAssuranceDadsu());
    }
}
