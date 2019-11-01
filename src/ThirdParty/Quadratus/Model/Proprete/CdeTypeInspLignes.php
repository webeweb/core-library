<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAouTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommandeIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMajStockByDaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNovTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOctTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisirModaliteLivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolValideeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValideeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInspecteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeGestionTrait;

/**
 * Cde type insp lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspLignes {

    use BoolAouTrait;
    use BoolAvrTrait;
    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeFournisseurTrait;
    use StringCodeInspecteurTrait;
    use StringCodeLivraisonTrait;
    use BoolCommandeIsoleeTrait;
    use DateTimeDateDebutValiditeTrait;
    use DateTimeDateFinValiditeTrait;
    use DateTimeDateValideeTrait;
    use BoolDecTrait;
    use StringDesignation1Trait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use BoolFevTrait;
    use BoolJanTrait;
    use StringJourLivraisonTrait;
    use BoolJuilTrait;
    use BoolJuinTrait;
    use BoolMaiTrait;
    use BoolMajStockByDaTrait;
    use BoolMarTrait;
    use BoolNovTrait;
    use IntNumeroLigneTrait;
    use BoolOctTrait;
    use StringPosteRentTrait;
    use FloatQuantiteTrait;
    use BoolSaisirModaliteLivTrait;
    use BoolSepTrait;
    use StringTypeGestionTrait;
    use BoolValideeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
