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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommandeIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFromCdeTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMajStockByDaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolValideeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteBsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteCdeCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteCdeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteLivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInspecteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLivreurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoBonIntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceCdeCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceCdeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroBsGenereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeGestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdBlocageTrait;

/**
 * Cde fournisseur mensu.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurMensu {

    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeFournisseurTrait;
    use StringCodeInspecteurTrait;
    use StringCodeLivraisonTrait;
    use StringCodeLivreurTrait;
    use BoolCommandeIsoleeTrait;
    use StringCritereTexte1Trait;
    use DateTimeDateLivraisonTrait;
    use DateTimeDateTransfertTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use BoolFromCdeTypeTrait;
    use BoolMajStockByDaTrait;
    use StringNoBonIntTrait;
    use StringNoPieceCdeTrait;
    use StringNoPieceCdeCliTrait;
    use StringNumeroBsGenereTrait;
    use IntNumeroLigneTrait;
    use FloatPuBrutTrait;
    use DateTimePeriodeTrait;
    use StringPosteRentTrait;
    use BoolPrixSaisiTrait;
    use FloatQuantiteTrait;
    use FloatQuantiteBsTrait;
    use FloatQuantiteCdeTrait;
    use FloatQuantiteCdeCliTrait;
    use FloatQuantiteLivTrait;
    use FloatRemise1Trait;
    use FloatRemise2Trait;
    use FloatRemise3Trait;
    use StringTypeGestionTrait;
    use StringTypePieceTrait;
    use StringUniqIdBlocageTrait;
    use BoolValideeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
