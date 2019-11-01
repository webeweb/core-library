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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAnalytiquePropreteTrait;

/**
 * Code analytique proprete trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAnalytiquePropreteTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAnalytiqueProprete() method.
     *
     * @return void
     */
    public function testSetCodeAnalytiqueProprete() {

        $obj = new TestStringCodeAnalytiquePropreteTrait();

        $obj->setCodeAnalytiqueProprete("codeAnalytiqueProprete");
        $this->assertEquals("codeAnalytiqueProprete", $obj->getCodeAnalytiqueProprete());
    }
}
