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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCeInitialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolContratEnCoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDisquetteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNouvelleAttestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolStatutCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCertificatEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEmbaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutPeriodeAttestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeAttestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseCongesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombreCachetsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDeptNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmpCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuCertificatEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCaisseSpectacleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCeInitialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCongesSpectacleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPseudonymeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSexeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignataireCertificatEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCeTrait;

/**
 * Conges spectacles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CongesSpectacles {

    use FloatBaseCongesTrait;
    use FloatBrutTrait;
    use BoolCeInitialTrait;
    use StringCodeEmploiTrait;
    use IntCodeEtablissementTrait;
    use StringContactTrait;
    use BoolContratEnCoursTrait;
    use DateTimeDateCertificatEmploiTrait;
    use DateTimeDateEmbaucheTrait;
    use DateTimeDateFinContratTrait;
    use DateTimeDateNaissanceTrait;
    use DateTimeDatePaiementTrait;
    use DateTimeDebutPeriodeAttestTrait;
    use StringDeptNaissanceTrait;
    use BoolDisquetteTrait;
    use BoolEditeTrait;
    use StringEmpAdresse1Trait;
    use StringEmpAdresse2Trait;
    use StringEmpCodePostalTrait;
    use StringEmpCommuneTrait;
    use StringEmploiTrait;
    use StringEtblAdresse1Trait;
    use StringEtblAdresse2Trait;
    use StringEtblCodePostalTrait;
    use StringEtblCommuneTrait;
    use StringEtblRaisonSocialeTrait;
    use StringEtblTelTrait;
    use IntIndiceCeTrait;
    use StringLienDocumentTrait;
    use StringLieuCertificatEmploiTrait;
    use StringLieuNaissanceTrait;
    use StringNirTrait;
    use FloatNbJourTravTrait;
    use StringNomEmployeTrait;
    use StringNomNaissanceTrait;
    use FloatNombreCachetsTrait;
    use BoolNouvelleAttestTrait;
    use StringNumCaisseSpectacleTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroCeInitialTrait;
    use StringNumeroCongesSpectacleTrait;
    use StringNumeroEmployeTrait;
    use StringObservationsTrait;
    use DateTimePeriodeAttestTrait;
    use StringPrenomTrait;
    use StringPseudonymeTrait;
    use StringSiretTrait;
    use StringSexeTrait;
    use StringSignataireCertificatEmploiTrait;
    use BoolStatutCadreTrait;
    use StringTelContactTrait;
    use StringTitreTrait;
    use StringTypeCeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
