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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvtDerEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDerEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMiniEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAvtDerDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDerDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMiniDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvtDerPxAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvtDerQteAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvtDerRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvtDerRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvtDerRemise3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDerPxAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDerQteAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDerRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDerRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDerRemise3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMiniPxAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMiniQteAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMiniRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMiniRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMiniRemise3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteEconomiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiNombreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAvtDerCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionnementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDerCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMiniCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefArticleFournisseurTrait;

/**
 * Article fournisseur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticleFournisseur {

    use StringAvtDerCodeDeviseTrait;
    use DateTimeAvtDerDateAchatTrait;
    use BoolAvtDerEurosTrait;
    use FloatAvtDerPxAchatTrait;
    use FloatAvtDerQteAchatTrait;
    use FloatAvtDerRemise1Trait;
    use FloatAvtDerRemise2Trait;
    use FloatAvtDerRemise3Trait;
    use StringCodeArticleTrait;
    use StringCodeFournisseurTrait;
    use StringCommentairesTrait;
    use StringConditionnementTrait;
    use IntDelaiLeTrait;
    use IntDelaiNombreTrait;
    use IntDelaiTypeTrait;
    use StringDerCodeDeviseTrait;
    use DateTimeDerDateAchatTrait;
    use BoolDerEurosTrait;
    use FloatDerPxAchatTrait;
    use FloatDerQteAchatTrait;
    use FloatDerRemise1Trait;
    use FloatDerRemise2Trait;
    use FloatDerRemise3Trait;
    use StringMiniCodeDeviseTrait;
    use DateTimeMiniDateAchatTrait;
    use BoolMiniEurosTrait;
    use FloatMiniPxAchatTrait;
    use FloatMiniQteAchatTrait;
    use FloatMiniRemise1Trait;
    use FloatMiniRemise2Trait;
    use FloatMiniRemise3Trait;
    use IntNumeroLigneTrait;
    use FloatQteEconomiqueTrait;
    use StringRefArticleFournisseurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
