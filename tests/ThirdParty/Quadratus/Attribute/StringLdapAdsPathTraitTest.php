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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLdapAdsPathTrait;

/**
 * L d a p_ ads path trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLdapAdsPathTraitTest extends AbstractTestCase {

    /**
     * Tests the setLdapAdsPath() method.
     *
     * @return void
     */
    public function testSetLdapAdsPath() {

        $obj = new TestStringLdapAdsPathTrait();

        $obj->setLdapAdsPath("ldapAdsPath");
        $this->assertEquals("ldapAdsPath", $obj->getLdapAdsPath());
    }
}
