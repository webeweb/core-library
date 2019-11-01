<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiverLotTraceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolALettrerAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBonAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCentraliseGdLivreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCompteInactifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCptParticulierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCumulPiedJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailClotureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditM2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFranchiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGererIntCptCourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIntraComTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPersonneMoraleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrestaTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepartitionAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviDevisesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTvaAutresOpeImposTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTvaDomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTvaEncaissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCredit1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCredit2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditHorsExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebit1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebit2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitHorsExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMargeTheoriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEcrituresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoProchainLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPrestataireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPrixMoyenNbDec2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPrixMoyenNbDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPrixMoyenNbEntier2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPrixMoyenNbEntierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuantiteNbDec2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuantiteNbDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuantiteNbEntier2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuantiteNbEntierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeIntraComTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroup1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroup2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroup3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroup4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRepartitionAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectif1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectif2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContrepartieChargeProdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptTvaContrepCprTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleAllTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleAngTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleEspTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleItaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleLongTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJalTreReglTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleLotTraceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMethodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauDroitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoDossReflechiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptReflechiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProchaineLettreTiersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProchaineLettreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQuantiteLibelle2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQuantiteLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRepartitionAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRubriqueBilan1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRubriqueBilan2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCptTiersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Comptes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes {

    use BoolALettrerAutoTrait;
    use BoolActiverLotTraceTrait;
    use BoolBonAPayerTrait;
    use BoolCentraliseGdLivreTrait;
    use StringCleDeuxTrait;
    use StringCodeAffaireTrait;
    use StringCodeDeviseTrait;
    use StringCodeRegroup1Trait;
    use StringCodeRegroup2Trait;
    use StringCodeRegroup3Trait;
    use StringCodeRegroup4Trait;
    use StringCodeRepartitionAnaTrait;
    use StringCodeTvaTrait;
    use StringCollectifTrait;
    use StringCollectif1Trait;
    use StringCollectif2Trait;
    use BoolCompteInactifTrait;
    use StringContrepartieChargeProdTrait;
    use BoolCptParticulierTrait;
    use StringCptTvaContrepCprTrait;
    use FloatCreditTrait;
    use FloatCreditHorsExTrait;
    use FloatCredit1Trait;
    use FloatCredit2Trait;
    use BoolCumulPiedJournalTrait;
    use DateTimeDateRevisionTrait;
    use DateTimeDateSysCreationTrait;
    use FloatDebitTrait;
    use FloatDebitHorsExTrait;
    use FloatDebit1Trait;
    use FloatDebit2Trait;
    use BoolDetailClotureTrait;
    use BoolEditM2Trait;
    use StringEtatRevisionTrait;
    use StringFamilleTrait;
    use BoolFranchiseTrait;
    use BoolGererIntCptCourTrait;
    use StringIntituleTrait;
    use StringIntituleAllTrait;
    use StringIntituleAngTrait;
    use StringIntituleEspTrait;
    use StringIntituleItaTrait;
    use StringIntituleLongTrait;
    use BoolIntraComTrait;
    use StringJalTreReglTrait;
    use StringLibelleLotTraceTrait;
    use FloatMargeTheoriqueTrait;
    use StringMethodeTvaTrait;
    use IntNbEcrituresTrait;
    use StringNiveauDroitTrait;
    use StringNoDossReflechiTrait;
    use IntNoProchainLettrageTrait;
    use StringNumCptReflechiTrait;
    use StringNumeroTrait;
    use BoolPeriodiciteTrait;
    use BoolPersonneMoraleTrait;
    use BoolPrestaTelTrait;
    use IntPrestataireTrait;
    use IntPrixMoyenNbDecTrait;
    use IntPrixMoyenNbDec2Trait;
    use IntPrixMoyenNbEntierTrait;
    use IntPrixMoyenNbEntier2Trait;
    use StringProchaineLettreTrait;
    use StringProchaineLettreTiersTrait;
    use StringQuantiteLibelleTrait;
    use StringQuantiteLibelle2Trait;
    use IntQuantiteNbDecTrait;
    use IntQuantiteNbDec2Trait;
    use IntQuantiteNbEntierTrait;
    use IntQuantiteNbEntier2Trait;
    use StringRefImageTrait;
    use StringReferenceFournisseurTrait;
    use StringRepartitionAnaTrait;
    use BoolRepartitionAutoTrait;
    use StringRubriqueBilan1Trait;
    use StringRubriqueBilan2Trait;
    use BoolSuiviDevisesTrait;
    use BoolSuiviQuantiteTrait;
    use BoolSuiviQuantite2Trait;
    use BoolTvaAutresOpeImposTrait;
    use BoolTvaDomTrait;
    use BoolTvaEncaissementTrait;
    use StringTypeTrait;
    use BoolTypeCollectifTrait;
    use StringTypeCptTiersTrait;
    use IntTypeIntraComTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
