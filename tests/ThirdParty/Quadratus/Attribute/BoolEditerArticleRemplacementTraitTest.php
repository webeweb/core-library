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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolEditerArticleRemplacementTrait;

/**
 * Editer article remplacement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolEditerArticleRemplacementTraitTest extends AbstractTestCase {

    /**
     * Tests the setEditerArticleRemplacement() method.
     *
     * @return void
     */
    public function testSetEditerArticleRemplacement() {

        $obj = new TestBoolEditerArticleRemplacementTrait();

        $obj->setEditerArticleRemplacement(true);
        $this->assertEquals(true, $obj->getEditerArticleRemplacement());
    }
}
