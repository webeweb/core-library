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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCddcdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFictifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionMailBulletinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHandicapeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOrphelinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasGestionPdpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPensionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds60Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCarteSejourDelivreeLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCarteSejourExpireLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCarteTravailDelivreeLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCarteTravailExpireLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissConjointTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVisiteMedicaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVisiteRepriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDerniereVisiteMedicaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePermisDelivreLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePermisExpireLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCum30SsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseGmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseSsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutAbatNonLimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutAlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutNonAbattuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpDus1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpDusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpPris1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHeurePayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHeureTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumJourPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumMtCpPris1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumMtCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumNetAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumNetImposableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondGmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondSs1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondSs2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumProvCp1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumProvCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumReposCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentActTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPensionCivileTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPensionMilitaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJoursAncTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJoursVisiteMedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategoriePermisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommuneNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDeptNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuTravailConjointTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMatriculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNationaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauConfidentialiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEnfantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomConjointTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCarteSejourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCarteTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroInseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroPermisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPermisDelivreParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPersonneAPrevenirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomConjointTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSexeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSituationFamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds138Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds61Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds76Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelConjointTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelPersAPrevenirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeNationaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePaiementTrait;

/**
 * Liste employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ListeEmployes {

    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use BoolCddcdiTrait;
    use DateTimeCarteSejourDelivreeLeTrait;
    use DateTimeCarteSejourExpireLeTrait;
    use DateTimeCarteTravailDelivreeLeTrait;
    use DateTimeCarteTravailExpireLeTrait;
    use StringCategoriePermisTrait;
    use StringCleDeuxTrait;
    use IntCodeEtablissementTrait;
    use StringCodeMotifRuptureTrait;
    use StringCodeOfficielCommuneTrait;
    use StringCodePostalTrait;
    use StringCodeTypeSalTrait;
    use StringCommuneNaissanceTrait;
    use StringComplementTrait;
    use FloatCum30SsTrait;
    use FloatCumBaseGmpTrait;
    use FloatCumBaseSsTrait;
    use FloatCumBaseTrATrait;
    use FloatCumBaseTrBTrait;
    use FloatCumBaseTrCTrait;
    use FloatCumBrutAbatNonLimTrait;
    use FloatCumBrutNonAbattuTrait;
    use FloatCumBrutAlTrait;
    use FloatCumCpDusTrait;
    use FloatCumCpDus1Trait;
    use FloatCumCpPrisTrait;
    use FloatCumCpPris1Trait;
    use FloatCumHSupTrait;
    use FloatCumHeurePayeTrait;
    use FloatCumHeureTravTrait;
    use FloatCumJourPayeTrait;
    use FloatCumJourTravTrait;
    use FloatCumMtCpPrisTrait;
    use FloatCumMtCpPris1Trait;
    use FloatCumNetAPayerTrait;
    use FloatCumNetImposableTrait;
    use FloatCumPlafondGmpTrait;
    use FloatCumPlafondSs1Trait;
    use FloatCumPlafondSs2Trait;
    use FloatCumProvCpTrait;
    use FloatCumProvCp1Trait;
    use FloatCumReposCompTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateModificationTrait;
    use DateTimeDateNaissConjointTrait;
    use DateTimeDateNaissanceTrait;
    use DateTimeDateSortieTrait;
    use DateTimeDateVisiteMedicaleTrait;
    use DateTimeDateVisiteRepriseTrait;
    use StringDeptNaissanceTrait;
    use DateTimeDerniereVisiteMedicaleTrait;
    use StringEmailTrait;
    use BoolFictifTrait;
    use BoolGestionMailBulletinTrait;
    use BoolHandicapeTrait;
    use StringLieuTravailConjointTrait;
    use StringMatriculeTrait;
    use StringNationaliteTrait;
    use FloatNbHeureMoisTrait;
    use IntNbJoursAncTrait;
    use IntNbJoursVisiteMedTrait;
    use StringNiveauConfidentialiteTrait;
    use StringNomConjointTrait;
    use StringNomMaritalTrait;
    use StringNomNaissanceTrait;
    use StringNomVilleTrait;
    use StringNomVoieTrait;
    use StringNombreEnfantsTrait;
    use StringNumVoieTrait;
    use StringNumeroTrait;
    use StringNumeroCarteSejourTrait;
    use StringNumeroCarteTravailTrait;
    use StringNumeroInseeTrait;
    use StringNumeroPermisTrait;
    use BoolOrphelinTrait;
    use BoolPasGestionPdpTrait;
    use BoolPensionTrait;
    use StringPeriodiciteTrait;
    use DateTimePermisDelivreLeTrait;
    use StringPermisDelivreParTrait;
    use DateTimePermisExpireLeTrait;
    use StringPersonneAPrevenirTrait;
    use FloatPourcentActTrait;
    use StringPrenomTrait;
    use StringPrenomConjointTrait;
    use StringRibTrait;
    use FloatSalaireBaseTrait;
    use StringServiceTrait;
    use StringSexeTrait;
    use StringSituationFamTrait;
    use StringTds138Trait;
    use BoolTds60Trait;
    use StringTds61Trait;
    use StringTds76Trait;
    use FloatTauxPensionCivileTrait;
    use FloatTauxPensionMilitaireTrait;
    use StringTel1Trait;
    use StringTel2Trait;
    use StringTelConjointTrait;
    use StringTelPersAPrevenirTrait;
    use StringTitreTrait;
    use BoolTransfertEntreeTrait;
    use BoolTransfertSortieTrait;
    use StringTypeNationaliteTrait;
    use StringTypePaiementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
