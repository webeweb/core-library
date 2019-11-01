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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\SuiviClient;

/**
 * Suivi client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class SuiviClientTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SuiviClient();

        $this->assertNull($obj->getBilanCommentaireDate());
        $this->assertNull($obj->getBilanCommentaireLib());
        $this->assertNull($obj->getBullCommentaireDate());
        $this->assertNull($obj->getBullCommentaireLib());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDas2CommentaireDate());
        $this->assertNull($obj->getDas2CommentaireLib());
        $this->assertNull($obj->getDcrCommentaireDate());
        $this->assertNull($obj->getDcrCommentaireLib());
        $this->assertNull($obj->getDcrDateLimite());
        $this->assertNull($obj->getDsiCommentaireDate());
        $this->assertNull($obj->getDsiCommentaireLib());
        $this->assertNull($obj->getDadsUCommentaireDate());
        $this->assertNull($obj->getDadsUCommentaireLib());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDucsAssedicCommentaireDate());
        $this->assertNull($obj->getDucsAssedicCommentaireLib());
        $this->assertNull($obj->getDucsUrssafCommentaireDate());
        $this->assertNull($obj->getDucsUrssafCommentaireLib());
        $this->assertNull($obj->getFacturationCommentaireDate());
        $this->assertNull($obj->getFacturationCommentaireLib());
        $this->assertNull($obj->getFaitBilan());
        $this->assertNull($obj->getFaitCvae());
        $this->assertNull($obj->getFaitDas2());
        $this->assertNull($obj->getFaitDcr());
        $this->assertNull($obj->getFaitGeneric1());
        $this->assertNull($obj->getFaitGeneric10());
        $this->assertNull($obj->getFaitGeneric2());
        $this->assertNull($obj->getFaitGeneric3());
        $this->assertNull($obj->getFaitGeneric4());
        $this->assertNull($obj->getFaitGeneric5());
        $this->assertNull($obj->getFaitGeneric6());
        $this->assertNull($obj->getFaitGeneric7());
        $this->assertNull($obj->getFaitGeneric8());
        $this->assertNull($obj->getFaitGeneric9());
        $this->assertNull($obj->getFaitIfu());
        $this->assertNull($obj->getFaitIsa());
        $this->assertNull($obj->getFaitIsf());
        $this->assertNull($obj->getFaitIsr());
        $this->assertNull($obj->getFaitIss());
        $this->assertNull($obj->getFaitImpotRevenu());
        $this->assertNull($obj->getFaitPlafTp());
        $this->assertNull($obj->getFaitPreLib());
        $this->assertNull($obj->getFaitSituation());
        $this->assertNull($obj->getFaitTp());
        $this->assertNull($obj->getFaitTva());
        $this->assertNull($obj->getFaitTvs());
        $this->assertNull($obj->getFaitTabBord());
        $this->assertNull($obj->getGeneric10CommentaireDate());
        $this->assertNull($obj->getGeneric10CommentaireLib());
        $this->assertNull($obj->getGeneric10DateLimite());
        $this->assertNull($obj->getGeneric1CommentaireDate());
        $this->assertNull($obj->getGeneric1CommentaireLib());
        $this->assertNull($obj->getGeneric1DateLimite());
        $this->assertNull($obj->getGeneric2CommentaireDate());
        $this->assertNull($obj->getGeneric2CommentaireLib());
        $this->assertNull($obj->getGeneric2DateLimite());
        $this->assertNull($obj->getGeneric3CommentaireDate());
        $this->assertNull($obj->getGeneric3CommentaireLib());
        $this->assertNull($obj->getGeneric3DateLimite());
        $this->assertNull($obj->getGeneric4CommentaireDate());
        $this->assertNull($obj->getGeneric4CommentaireLib());
        $this->assertNull($obj->getGeneric4DateLimite());
        $this->assertNull($obj->getGeneric5CommentaireDate());
        $this->assertNull($obj->getGeneric5CommentaireLib());
        $this->assertNull($obj->getGeneric5DateLimite());
        $this->assertNull($obj->getGeneric6CommentaireDate());
        $this->assertNull($obj->getGeneric6CommentaireLib());
        $this->assertNull($obj->getGeneric6DateLimite());
        $this->assertNull($obj->getGeneric7CommentaireDate());
        $this->assertNull($obj->getGeneric7CommentaireLib());
        $this->assertNull($obj->getGeneric7DateLimite());
        $this->assertNull($obj->getGeneric8CommentaireDate());
        $this->assertNull($obj->getGeneric8CommentaireLib());
        $this->assertNull($obj->getGeneric8DateLimite());
        $this->assertNull($obj->getGeneric9CommentaireDate());
        $this->assertNull($obj->getGeneric9CommentaireLib());
        $this->assertNull($obj->getGeneric9DateLimite());
        $this->assertNull($obj->getIfuCommentaireDate());
        $this->assertNull($obj->getIfuCommentaireLib());
        $this->assertNull($obj->getIsaCommentaireDate());
        $this->assertNull($obj->getIsaCommentaireLib());
        $this->assertNull($obj->getIsfCommentaireDate());
        $this->assertNull($obj->getIsfCommentaireLib());
        $this->assertNull($obj->getIsfDateLimite());
        $this->assertNull($obj->getIsrCommentaireDate());
        $this->assertNull($obj->getIsrCommentaireLib());
        $this->assertNull($obj->getIssCommentaireDate());
        $this->assertNull($obj->getIssCommentaireLib());
        $this->assertNull($obj->getImpotRevenuCommentaireDate());
        $this->assertNull($obj->getImpotRevenuCommentaireLib());
        $this->assertNull($obj->getImpotRevenuDateLimite());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafTpCommentaireDate());
        $this->assertNull($obj->getPlafTpCommentaireLib());
        $this->assertNull($obj->getPreLibCommentaireDate());
        $this->assertNull($obj->getPreLibCommentaireLib());
        $this->assertNull($obj->getPreLibDateLimite());
        $this->assertNull($obj->getSituationCommentaireDate());
        $this->assertNull($obj->getSituationCommentaireLib());
        $this->assertNull($obj->getSituationDateLimite());
        $this->assertNull($obj->getTpCommentaireDate());
        $this->assertNull($obj->getTpCommentaireLib());
        $this->assertNull($obj->getTsaCommentaireDate());
        $this->assertNull($obj->getTsaCommentaireLib());
        $this->assertNull($obj->getTssCommentaireDate());
        $this->assertNull($obj->getTssCommentaireLib());
        $this->assertNull($obj->getTvsCommentaireDate());
        $this->assertNull($obj->getTvsCommentaireLib());
        $this->assertNull($obj->getTabBordCommentaireDate());
        $this->assertNull($obj->getTabBordCommentaireLib());
        $this->assertNull($obj->getTabBordDateLimite());
        $this->assertNull($obj->getTvaCommentaireDate());
        $this->assertNull($obj->getTvaCommentaireLib());
    }
}
