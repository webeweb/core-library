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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExclureLfr2012Trait;

/**
 * Exclure l f r2012 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExclureLfr2012TraitTest extends AbstractTestCase {

    /**
     * Tests the setExclureLfr2012() method.
     *
     * @return void
     */
    public function testSetExclureLfr2012() {

        $obj = new TestStringExclureLfr2012Trait();

        $obj->setExclureLfr2012("exclureLfr2012");
        $this->assertEquals("exclureLfr2012", $obj->getExclureLfr2012());
    }
}
