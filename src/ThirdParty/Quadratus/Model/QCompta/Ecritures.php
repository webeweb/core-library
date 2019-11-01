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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBonsAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEnLitigeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMtDevForceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRapproBancaireOkTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolValideeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDecTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePointageAuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRapproBancaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysValidationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeEcheanceSimpleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodiciteDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodiciteFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMilliemesAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrctRepartitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaE4MtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLigneFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLotEcrituresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLotFactorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLotIsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEcrEcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEditLettrePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumMandatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPieceInterneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreSimpleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClientOuFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLettrageTiersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOperateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteContrepartieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEcritureNumTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJrnRapproBancaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMethodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoLotTraceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceTireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaE4BiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaE4DrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSaisieTrait;

/**
 * Ecritures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Ecritures {

    use BoolActifTrait;
    use StringBicTrait;
    use BoolBonsAPayerTrait;
    use StringCentreTrait;
    use StringCentreSimpleTrait;
    use StringClientOuFrnTrait;
    use StringCodeBanqueTrait;
    use StringCodeDeviseTrait;
    use StringCodeJournalTrait;
    use StringCodeLettrageTrait;
    use StringCodeLettrageTiersTrait;
    use StringCodeLibelleAutoTrait;
    use StringCodeOperateurTrait;
    use IntCodeTvaTrait;
    use StringCompteContrepartieTrait;
    use DateTimeDateDecTvaTrait;
    use DateTimeDateEcheanceTrait;
    use DateTimeDatePointageAuxTrait;
    use DateTimeDateRapproBancaireTrait;
    use DateTimeDateSysSaisieTrait;
    use DateTimeDateSysValidationTrait;
    use StringDomBanqueTrait;
    use DateTimeEcheanceSimpleTrait;
    use StringEcritureNumTrait;
    use BoolEnLitigeTrait;
    use IntEtatTrait;
    use IntFolioTrait;
    use StringIbanTrait;
    use StringJourEcritureTrait;
    use StringJrnRapproBancaireTrait;
    use StringLibelleTrait;
    use StringLibelleMemoTrait;
    use IntLigneFolioTrait;
    use StringMethodeTvaTrait;
    use FloatMilliemesAnaTrait;
    use StringModePaiementTrait;
    use FloatMontantAnaTrait;
    use FloatMontantSaisiCreditTrait;
    use FloatMontantSaisiDebitTrait;
    use FloatMontantTenuCreditTrait;
    use FloatMontantTenuDebitTrait;
    use BoolMtDevForceTrait;
    use StringNatureTrait;
    use IntNoLotEcrituresTrait;
    use IntNoLotFactorTrait;
    use IntNoLotIsTrait;
    use StringNoLotTraceTrait;
    use StringNumCptOrigineTrait;
    use IntNumEcrEcoTrait;
    use IntNumEditLettrePaiementTrait;
    use IntNumLettrageTrait;
    use IntNumLigneTrait;
    use IntNumMandatTrait;
    use IntNumUniqTrait;
    use StringNumeroCompteTrait;
    use StringNumeroPieceTrait;
    use DateTimePeriodeEcritureTrait;
    use DateTimePeriodiciteDebutTrait;
    use DateTimePeriodiciteFinTrait;
    use IntPieceInterneTrait;
    use FloatPrctRepartitionTrait;
    use FloatQuantiteTrait;
    use FloatQuantite2Trait;
    use StringRibTrait;
    use BoolRapproBancaireOkTrait;
    use StringRefImageTrait;
    use StringReferenceTireTrait;
    use StringTvaE4BiTrait;
    use StringTvaE4DrTrait;
    use FloatTvaE4MtTrait;
    use StringTypeLigneTrait;
    use StringTypeSaisieTrait;
    use BoolValideeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
