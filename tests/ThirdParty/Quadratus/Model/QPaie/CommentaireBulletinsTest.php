<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CommentaireBulletins;

/**
 * Commentaire bulletins test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CommentaireBulletinsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CommentaireBulletins();

        $this->assertNull($obj->getCommentaire1());
        $this->assertNull($obj->getCommentaire2());
        $this->assertNull($obj->getCommentaire3());
        $this->assertNull($obj->getCommentaire4());
        $this->assertNull($obj->getCommentaire5());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxtCommentaireRtf());
        $this->assertNull($obj->getTxtCommentaireSaisi());
    }
}
