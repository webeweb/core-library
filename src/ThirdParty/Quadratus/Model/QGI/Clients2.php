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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAllotissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBlMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCdesMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDevisMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinDecadeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinQuinzaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEdiExportBlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEdiExportFacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonConcerneIsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonConcerneTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonFacturableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPmeTarifOuRemSpeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrevenirMailPublierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRelevesMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsGestionPalettesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsMarchandiseSensibleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsPortDuAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsSuiviCaMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsSuiviDtEnlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsSuiviDtLivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebExePublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLettreDeMissionDateSignatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantDepassementAutoriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtTransport1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtTransport2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtTransport3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtTransport4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtTransport5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrsPoidsMiniPalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceBlMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCdesMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceDevisMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceRelevesMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndMailPublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTrsCodeTarifDefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteur1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteur3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteur4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteur5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEanClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEanFacturePapierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEanPlateformeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFactComplementSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFactZipCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringlocalisationArchivesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeleFactureManuelleSpeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSocialComplementSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSocialZipCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsArtPied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsArtPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCategMarchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCentreAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif1SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif2SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif3SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif4SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif5SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif6SensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarif6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsComment9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsConsignes1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsConsignes2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsConsignes3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsModeleFactureSpeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsSuiviDtLivFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsSuiviDtLivMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsTypeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsTypeFacturationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsTypeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransport1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransport2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransport3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransport4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransport5Trait;

/**
 * Clients2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Clients2 {

    use BoolAllotissementTrait;
    use BoolBlMailTrait;
    use BoolCdesMailTrait;
    use StringCodeActiviteCgaTrait;
    use StringCodeClientTrait;
    use StringCodeTransporteur1Trait;
    use StringCodeTransporteur2Trait;
    use StringCodeTransporteur3Trait;
    use StringCodeTransporteur4Trait;
    use StringCodeTransporteur5Trait;
    use DateTimeDateDebExePublicationTrait;
    use IntDelaiLivraisonTrait;
    use BoolDevisMailTrait;
    use StringEanClientTrait;
    use StringEanFacturePapierTrait;
    use StringEanPlateformeTrait;
    use BoolEdiExportBlTrait;
    use BoolEdiExportFacTrait;
    use BoolEcheanceFinDecadeTrait;
    use BoolEcheanceFinQuinzaineTrait;
    use StringFactComplementSuiteTrait;
    use StringFactZipCodeTrait;
    use IntIndMailPublicationTrait;
    use IntIndiceBlMailTrait;
    use IntIndiceCdesMailTrait;
    use IntIndiceDevisMailTrait;
    use IntIndiceRelevesMailTrait;
    use DateTimeLettreDeMissionDateSignatureTrait;
    use StringModeleFactureManuelleSpeTrait;
    use FloatMontantDepassementAutoriseTrait;
    use StringMotifEntreeTrait;
    use StringMotifSortieTrait;
    use FloatMtTransport1Trait;
    use FloatMtTransport2Trait;
    use FloatMtTransport3Trait;
    use FloatMtTransport4Trait;
    use FloatMtTransport5Trait;
    use BoolNonConcerneIsTrait;
    use BoolNonConcerneTpTrait;
    use BoolNonFacturableTrait;
    use BoolPmeTarifOuRemSpeTrait;
    use BoolPrevenirMailPublierTrait;
    use BoolRelevesMailTrait;
    use StringSocialComplementSuiteTrait;
    use StringSocialZipCodeTrait;
    use StringTrsArtPiedTrait;
    use StringTrsArtPied2Trait;
    use StringTrsCategMarchTrait;
    use StringTrsCentreAnaTrait;
    use StringTrsCodeTarif1Trait;
    use StringTrsCodeTarif1SensTrait;
    use StringTrsCodeTarif2Trait;
    use StringTrsCodeTarif2SensTrait;
    use StringTrsCodeTarif3Trait;
    use StringTrsCodeTarif3SensTrait;
    use StringTrsCodeTarif4Trait;
    use StringTrsCodeTarif4SensTrait;
    use StringTrsCodeTarif5Trait;
    use StringTrsCodeTarif5SensTrait;
    use StringTrsCodeTarif6Trait;
    use StringTrsCodeTarif6SensTrait;
    use IntTrsCodeTarifDefTrait;
    use StringTrsComment1Trait;
    use StringTrsComment2Trait;
    use StringTrsComment3Trait;
    use StringTrsComment4Trait;
    use StringTrsComment5Trait;
    use StringTrsComment6Trait;
    use StringTrsComment7Trait;
    use StringTrsComment8Trait;
    use StringTrsComment9Trait;
    use StringTrsConsignes1Trait;
    use StringTrsConsignes2Trait;
    use StringTrsConsignes3Trait;
    use BoolTrsGestionPalettesTrait;
    use BoolTrsMarchandiseSensibleTrait;
    use StringTrsModeleFactureSpeTrait;
    use FloatTrsPoidsMiniPalTrait;
    use BoolTrsPortDuAutoTrait;
    use BoolTrsSuiviCaMensTrait;
    use BoolTrsSuiviDtEnlTrait;
    use BoolTrsSuiviDtLivTrait;
    use StringTrsSuiviDtLivFaxTrait;
    use StringTrsSuiviDtLivMailTrait;
    use StringTrsTypeClientTrait;
    use StringTrsTypeFacturationTrait;
    use StringTrsTypeTravailTrait;
    use StringTypeTransport1Trait;
    use StringTypeTransport2Trait;
    use StringTypeTransport3Trait;
    use StringTypeTransport4Trait;
    use StringTypeTransport5Trait;
    use StringlocalisationArchivesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
