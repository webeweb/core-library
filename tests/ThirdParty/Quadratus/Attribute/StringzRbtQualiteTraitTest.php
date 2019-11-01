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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringzRbtQualiteTrait;

/**
 * z r b t qualite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringzRbtQualiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setzRbtQualite() method.
     *
     * @return void
     */
    public function testSetzRbtQualite() {

        $obj = new TestStringzRbtQualiteTrait();

        $obj->setzRbtQualite("zRbtQualite");
        $this->assertEquals("zRbtQualite", $obj->getzRbtQualite());
    }
}
