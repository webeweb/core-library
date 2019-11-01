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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCollabOrgTrait;

/**
 * Code collab o r g trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCollabOrgTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollabOrg() method.
     *
     * @return void
     */
    public function testSetCodeCollabOrg() {

        $obj = new TestStringCodeCollabOrgTrait();

        $obj->setCodeCollabOrg("codeCollabOrg");
        $this->assertEquals("codeCollabOrg", $obj->getCodeCollabOrg());
    }
}
