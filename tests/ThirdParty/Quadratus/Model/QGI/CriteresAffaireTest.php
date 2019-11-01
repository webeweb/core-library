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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CriteresAffaire;

/**
 * Criteres affaire test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CriteresAffaireTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CriteresAffaire();

        $this->assertNull($obj->getBooleen1());
        $this->assertNull($obj->getBooleen10());
        $this->assertNull($obj->getBooleen2());
        $this->assertNull($obj->getBooleen3());
        $this->assertNull($obj->getBooleen4());
        $this->assertNull($obj->getBooleen5());
        $this->assertNull($obj->getBooleen6());
        $this->assertNull($obj->getBooleen7());
        $this->assertNull($obj->getBooleen8());
        $this->assertNull($obj->getBooleen9());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeRef1());
        $this->assertNull($obj->getCodeRef10());
        $this->assertNull($obj->getCodeRef2());
        $this->assertNull($obj->getCodeRef3());
        $this->assertNull($obj->getCodeRef4());
        $this->assertNull($obj->getCodeRef5());
        $this->assertNull($obj->getCodeRef6());
        $this->assertNull($obj->getCodeRef7());
        $this->assertNull($obj->getCodeRef8());
        $this->assertNull($obj->getCodeRef9());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate10());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDate3());
        $this->assertNull($obj->getDate4());
        $this->assertNull($obj->getDate5());
        $this->assertNull($obj->getDate6());
        $this->assertNull($obj->getDate7());
        $this->assertNull($obj->getDate8());
        $this->assertNull($obj->getDate9());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble10());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getDouble3());
        $this->assertNull($obj->getDouble4());
        $this->assertNull($obj->getDouble5());
        $this->assertNull($obj->getDouble6());
        $this->assertNull($obj->getDouble7());
        $this->assertNull($obj->getDouble8());
        $this->assertNull($obj->getDouble9());
        $this->assertNull($obj->getLong1());
        $this->assertNull($obj->getLong10());
        $this->assertNull($obj->getLong2());
        $this->assertNull($obj->getLong3());
        $this->assertNull($obj->getLong4());
        $this->assertNull($obj->getLong5());
        $this->assertNull($obj->getLong6());
        $this->assertNull($obj->getLong7());
        $this->assertNull($obj->getLong8());
        $this->assertNull($obj->getLong9());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte10());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
        $this->assertNull($obj->getTexte6());
        $this->assertNull($obj->getTexte7());
        $this->assertNull($obj->getTexte8());
        $this->assertNull($obj->getTexte9());
    }
}
