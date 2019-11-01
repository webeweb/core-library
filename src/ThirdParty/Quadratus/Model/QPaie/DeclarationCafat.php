<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasDePersonnelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasDeReembaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDeclarationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtAutreDeductionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtDeductionAcompte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtDeductionAcompte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtDeductionAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafond1RuammTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafond2RuammTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondAutreRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondFshTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondMaladieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxAutreRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCcsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxFshTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxMaladieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRuammTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalCotisAutreRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalCotisCcsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalCotisFshTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalCotisMaladieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalCotisRuammTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalRuammTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalSalaireAutreRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalSalaireCcsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalSalaireFshTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalSalaireMaladieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSalariesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTotalRemunerationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoCotisantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSecteurTrait;

/**
 * Declaration cafat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationCafat {

    use StringAdresse1Trait;
    use StringAdresse2Trait;
    use StringAdresse3Trait;
    use StringCodeCotisTrait;
    use IntCodeEtablissementTrait;
    use DateTimeDateDeclarationTrait;
    use StringLienDocumentTrait;
    use FloatMtAutreDeductionTrait;
    use FloatMtDeductionAcompteTrait;
    use FloatMtDeductionAcompte1Trait;
    use FloatMtDeductionAcompte2Trait;
    use IntNbSalariesTrait;
    use StringNoCotisantTrait;
    use StringOrganismeTrait;
    use BoolPasDePersonnelTrait;
    use BoolPasDeReembaucheTrait;
    use DateTimePeriodeDeclaTrait;
    use FloatPlafond1RuammTr2Trait;
    use FloatPlafond2RuammTr2Trait;
    use FloatPlafondAutreRegimeTrait;
    use FloatPlafondFshTrait;
    use FloatPlafondMaladieTrait;
    use FloatPlafondSalaireTrait;
    use StringRidTrait;
    use StringRaisonSocialeTrait;
    use StringSecteurTrait;
    use FloatTauxAtTrait;
    use FloatTauxAutreRegimeTrait;
    use FloatTauxCcsTrait;
    use FloatTauxFshTrait;
    use FloatTauxMaladieTrait;
    use FloatTauxRuammTr2Trait;
    use FloatTotalCotisAutreRegimeTrait;
    use FloatTotalCotisCcsTrait;
    use FloatTotalCotisFshTrait;
    use FloatTotalCotisMaladieTrait;
    use FloatTotalCotisRuammTr2Trait;
    use FloatTotalRuammTr2Trait;
    use IntTotalRemunerationTrait;
    use FloatTotalSalaireAutreRegimeTrait;
    use FloatTotalSalaireCcsTrait;
    use FloatTotalSalaireFshTrait;
    use FloatTotalSalaireMaladieTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
