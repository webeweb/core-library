<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva3519;

/**
 * Dec tva3519 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3519Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTva3519();

        $this->assertNull($obj->getAutresOpe1());
        $this->assertNull($obj->getAutresOpe2());
        $this->assertNull($obj->getAutresOpe3());
        $this->assertNull($obj->getAutresOpe4());
        $this->assertNull($obj->getAutresOpeTotal());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCommentaires1());
        $this->assertNull($obj->getCommentaires2());
        $this->assertNull($obj->getCommentaires3());
        $this->assertNull($obj->getCommentaires4());
        $this->assertNull($obj->getCommentaires5());
        $this->assertNull($obj->getCreditCompte());
        $this->assertNull($obj->getCreditImputer());
        $this->assertNull($obj->getCreditNonRemb());
        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getExpBiens1());
        $this->assertNull($obj->getExpBiens2());
        $this->assertNull($obj->getExpBiens3());
        $this->assertNull($obj->getExpBiens4());
        $this->assertNull($obj->getExpBiensTotal());
        $this->assertNull($obj->getExpPeriodes());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntracom1());
        $this->assertNull($obj->getIntracom2());
        $this->assertNull($obj->getIntracom3());
        $this->assertNull($obj->getIntracom4());
        $this->assertNull($obj->getIntracomTotal());
        $this->assertNull($obj->getMois1());
        $this->assertNull($obj->getMois2());
        $this->assertNull($obj->getMois3());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontantRbt());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNomPrenom());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafondRbt());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRbtDemande());
        $this->assertNull($obj->getReportCredit());
        $this->assertNull($obj->getTvaFictive1());
        $this->assertNull($obj->getTvaFictive2());
        $this->assertNull($obj->getTvaFictive3());
        $this->assertNull($obj->getTvaFictive4());
        $this->assertNull($obj->getTvaFictive5());
        $this->assertNull($obj->getTvaFictivePrec());
        $this->assertNull($obj->getTvaFictivePres());
        $this->assertNull($obj->getTauxTva1());
        $this->assertNull($obj->getTauxTva2());
        $this->assertNull($obj->getTauxTva3());
        $this->assertNull($obj->getTauxTva4());
        $this->assertNull($obj->getTotalColonne1());
        $this->assertNull($obj->getTotalColonne2());
        $this->assertNull($obj->getTotalColonne3());
        $this->assertNull($obj->getTotalColonne4());
        $this->assertNull($obj->getTotalColonne5());
        $this->assertNull($obj->getTypeDemande());
        $this->assertNull($obj->getVille());
    }
}
