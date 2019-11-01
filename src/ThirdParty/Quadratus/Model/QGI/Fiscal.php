<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAbattementCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAssuranceControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEdiTdfcBdFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviDadsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviDucsediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviEditvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviPediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviReqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMandatSuiviTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPmeCommunautaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegimeAgricoleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegimeGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSocieteMereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTvaDecaissementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTvaFaiteParClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolViseurConventionneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAdhesionCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEffetAdhesionCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEffetRadiationCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRadiationCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutDadsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutDucsediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutEditvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutPediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutReqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeViseurDtAttestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeDadsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeDucsediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeEditvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureePediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeReqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCdAssietteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreImpotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeImpotDirectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRecetteImpotsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegimeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactCentreImpotsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactRecetteImpotsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDeclarationSurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDureeExerciceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpCleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpRecetteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdImpotsGouvFrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImpotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInspTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourDeclarationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeDadsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeDucsediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeEditvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointePediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeReqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMdpImpotsGouvFrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMethodeCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifRadiationCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroRegistreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodiciteTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPoleEnregistrementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefObligFiscTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefPaiementDgiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofCfeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofCvaepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofCvaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofIsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofRcmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofTdfcGroupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofTsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRofTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTresorerieIsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTresorerieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaCa12AeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabNomRsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaEtabNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaNomVirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaribVirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringViseurNumAttestTrait;

/**
 * Fiscal.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Fiscal {

    use BoolAbattementCgaTrait;
    use BoolAssuranceControleTrait;
    use StringCdAssietteTrait;
    use StringCdiTrait;
    use BoolCgaTrait;
    use StringCodeCgaTrait;
    use StringCodeCentreImpotTrait;
    use StringCodeClientTrait;
    use StringCodeImpotDirectTrait;
    use StringCodeRecetteImpotsTrait;
    use StringCodeRegimeTvaTrait;
    use StringContactCgaTrait;
    use StringContactCentreImpotsTrait;
    use StringContactRecetteImpotsTrait;
    use DateTimeDateAdhesionCgaTrait;
    use DateTimeDateEffetAdhesionCgaTrait;
    use DateTimeDateEffetRadiationCgaTrait;
    use DateTimeDateRadiationCgaTrait;
    use StringDeclarationSurTrait;
    use StringDureeExerciceTrait;
    use BoolEdiTdfcBdFTrait;
    use StringFrpCleTrait;
    use StringFrpDossierTrait;
    use StringFrpRecetteTrait;
    use StringIdImpotsGouvFrTrait;
    use StringImpotTrait;
    use StringInspTrait;
    use StringJourDeclarationTrait;
    use DateTimeMandatDateDebutDadsTrait;
    use DateTimeMandatDateDebutDucsediTrait;
    use DateTimeMandatDateDebutEditvaTrait;
    use DateTimeMandatDateDebutEtebacTrait;
    use DateTimeMandatDateDebutPediTrait;
    use DateTimeMandatDateDebutReqTrait;
    use DateTimeMandatDateDebutTdfcTrait;
    use IntMandatDureeDadsTrait;
    use IntMandatDureeDucsediTrait;
    use IntMandatDureeEditvaTrait;
    use IntMandatDureeEtebacTrait;
    use IntMandatDureePediTrait;
    use IntMandatDureeReqTrait;
    use IntMandatDureeTdfcTrait;
    use StringMandatPieceJointeDadsTrait;
    use StringMandatPieceJointeDucsediTrait;
    use StringMandatPieceJointeEditvaTrait;
    use StringMandatPieceJointeEtebacTrait;
    use StringMandatPieceJointePediTrait;
    use StringMandatPieceJointeReqTrait;
    use StringMandatPieceJointeTdfcTrait;
    use BoolMandatSuiviDadsTrait;
    use BoolMandatSuiviDucsediTrait;
    use BoolMandatSuiviEditvaTrait;
    use BoolMandatSuiviEtebacTrait;
    use BoolMandatSuiviPediTrait;
    use BoolMandatSuiviReqTrait;
    use BoolMandatSuiviTdfcTrait;
    use StringMdpImpotsGouvFrTrait;
    use StringMethodeCalculTrait;
    use StringMotifRadiationCgaTrait;
    use StringNumeroRegistreTrait;
    use BoolPmeCommunautaireTrait;
    use StringPeriodiciteTvaTrait;
    use StringPoleEnregistrementTrait;
    use StringRefObligFiscTrait;
    use StringRefPaiementDgiTrait;
    use StringRegimeTrait;
    use BoolRegimeAgricoleTrait;
    use BoolRegimeGroupeTrait;
    use StringRofCfeTrait;
    use StringRofCvaeTrait;
    use StringRofCvaepTrait;
    use StringRofIsTrait;
    use StringRofRcmTrait;
    use StringRofTsTrait;
    use StringRofTvaTrait;
    use StringRofTdfcGroupTrait;
    use BoolSocieteMereTrait;
    use StringTvaEtabBtqTrait;
    use StringTvaEtabBureauDistributeurTrait;
    use StringTvaEtabCodePostalTrait;
    use StringTvaEtabComplementTrait;
    use StringTvaEtabNomRsTrait;
    use StringTvaEtabNomVoieTrait;
    use StringTvaEtabNumVoieTrait;
    use StringTvaNomVirTrait;
    use StringTvaribVirTrait;
    use StringTresorerieTrait;
    use StringTresorerieIsTrait;
    use StringTvaCa12AeTrait;
    use BoolTvaDecaissementsTrait;
    use BoolTvaFaiteParClientTrait;
    use BoolViseurConventionneTrait;
    use DateTimeViseurDtAttestTrait;
    use StringViseurNumAttestTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
