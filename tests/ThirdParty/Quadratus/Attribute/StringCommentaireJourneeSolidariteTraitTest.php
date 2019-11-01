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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaireJourneeSolidariteTrait;

/**
 * Commentaire journee solidarite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaireJourneeSolidariteTraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaireJourneeSolidarite() method.
     *
     * @return void
     */
    public function testSetCommentaireJourneeSolidarite() {

        $obj = new TestStringCommentaireJourneeSolidariteTrait();

        $obj->setCommentaireJourneeSolidarite("commentaireJourneeSolidarite");
        $this->assertEquals("commentaireJourneeSolidarite", $obj->getCommentaireJourneeSolidarite());
    }
}
