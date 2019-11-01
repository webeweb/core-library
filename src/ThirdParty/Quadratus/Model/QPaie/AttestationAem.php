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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAemInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCertificationSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolContratEnCoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLabelPrestataireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLicenceSpectacleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLienParenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOrganisateurSpectacleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolStatutCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEmbaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinContratInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeAttestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignatureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresContributionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresRemunBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresTauxCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutAlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatContributionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombreCachetsIsolesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombreCachetsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombreHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceAemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNaf2008Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeQualifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCaisseSpectacleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCertificationSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAemInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroLabelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumIdccEmployeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumIdccPrestationTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumObjetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignaturePrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureQualiteCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLienParenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeNationaliteTrait;

/**
 * Attestation aem.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAem {

    use BoolAemInitialeTrait;
    use StringActiviteTrait;
    use FloatAutresContributionsTrait;
    use FloatAutresRemunBrutTrait;
    use FloatAutresTauxCotisTrait;
    use FloatBrutTrait;
    use FloatBrutAlTrait;
    use BoolCertificationSocialeTrait;
    use StringCiviliteTrait;
    use StringCodeEmploiTrait;
    use IntCodeEtablissementTrait;
    use StringCodeNaf2008Trait;
    use StringCodeQualifTrait;
    use StringContactTrait;
    use BoolContratEnCoursTrait;
    use FloatContributionsTrait;
    use DateTimeDateEmbaucheTrait;
    use DateTimeDateFinContratTrait;
    use DateTimeDateFinContratInitialeTrait;
    use DateTimeDateNaissTrait;
    use StringEmpAdresse1Trait;
    use StringEmpAdresse2Trait;
    use StringEmpCodePostalTrait;
    use StringEmpCommuneTrait;
    use StringEmpTelTrait;
    use StringEmploiTrait;
    use StringEtblAdresse1Trait;
    use StringEtblAdresse2Trait;
    use StringEtblCodePostalTrait;
    use StringEtblCommuneTrait;
    use StringEtblFaxTrait;
    use StringEtblMailTrait;
    use StringEtblRaisonSocialeTrait;
    use StringEtblTelTrait;
    use IntIndiceAemTrait;
    use BoolLabelPrestataireTrait;
    use BoolLicenceSpectacleTrait;
    use StringLienDocumentTrait;
    use BoolLienParenteTrait;
    use StringMotifFinContratTrait;
    use StringMotifRuptureTrait;
    use StringNafTrait;
    use StringNirTrait;
    use FloatNbJourTravTrait;
    use StringNomEmployeTrait;
    use StringNomNaissanceTrait;
    use StringNomRetraiteTrait;
    use FloatNombreCachetsTrait;
    use FloatNombreCachetsIsolesTrait;
    use FloatNombreHeuresTrait;
    use StringNumAssedicTrait;
    use StringNumCaisseSpectacleTrait;
    use StringNumCertificationSocialeTrait;
    use StringNumIdccEmployeurTrait;
    use StringNumIdccPrestationTravailTrait;
    use StringNumObjetTrait;
    use StringNumeroAemInitialeTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use StringNumeroLabelTrait;
    use StringNumeroLicenceTrait;
    use BoolOrganisateurSpectacleTrait;
    use StringOrganismeAssedicTrait;
    use StringOrganismeRetraiteTrait;
    use DateTimePeriodeAttestTrait;
    use StringPrenomTrait;
    use StringSiretTrait;
    use DateTimeSignatureDateTrait;
    use StringSignatureNomTrait;
    use StringSignaturePrenomTrait;
    use StringSignatureQualiteTrait;
    use StringSignatureQualiteCodeTrait;
    use StringSignatureVilleTrait;
    use BoolStatutCadreTrait;
    use FloatTauxCotisTrait;
    use StringTelContactTrait;
    use StringTypeAemTrait;
    use StringTypeLienParenteTrait;
    use StringTypeNationaliteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
