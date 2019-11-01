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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Documents;

/**
 * Documents test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DocumentsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Documents();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getDateHeureSys());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getIndiceBulletin());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeArchivage());
        $this->assertNull($obj->getPublierWeb());
    }
}
