<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Notes;

/**
 * Notes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class NotesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Notes();

        $this->assertNull($obj->getCodeCategorie());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeCollaborateurModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateRappel());
        $this->assertNull($obj->getEnvoiPostIt());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getTitre());
    }
}
