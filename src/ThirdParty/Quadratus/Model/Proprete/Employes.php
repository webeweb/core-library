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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAdministratifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolATransfererEnPTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolChefEquipeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommercialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolControleurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDimType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFictifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHandicapeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHNuitType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHotellerieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInspecteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLivreurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPolyvalentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTempsPasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailleJfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAncienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntree1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntree2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortie1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodePointageClotureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDernNumPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjPassTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommuneNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDeptNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGestionMajDimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGestionMajJfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGestionMajNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMensualisationTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNationaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEnfantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroInseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSituationFamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Employes {

    use BoolATransfererEnPTrait;
    use BoolAdministratifTrait;
    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use BoolChefEquipeTrait;
    use StringCleDeuxTrait;
    use StringCodeOfficielCommuneTrait;
    use StringCodePaysNaissanceTrait;
    use StringCodePostalTrait;
    use BoolCommercialTrait;
    use StringCommuneNaissanceTrait;
    use StringComplementTrait;
    use BoolControleurTrait;
    use DateTimeDateAncienTrait;
    use DateTimeDateEntree1Trait;
    use DateTimeDateEntree2Trait;
    use DateTimeDateNaissanceTrait;
    use DateTimeDateSortie1Trait;
    use DateTimeDateSortie2Trait;
    use StringDeptNaissanceTrait;
    use IntDernNumPrimeTrait;
    use BoolDimType2Trait;
    use BoolFictifTrait;
    use StringGestionMajDimTrait;
    use StringGestionMajJfTrait;
    use StringGestionMajNuitTrait;
    use BoolHNuitType2Trait;
    use BoolHandicapeTrait;
    use BoolHotellerieTrait;
    use BoolInspecteurTrait;
    use BoolLivreurTrait;
    use StringMensualisationTacheTrait;
    use StringNationaliteTrait;
    use FloatNbHeureMoisTrait;
    use StringNomMaritalTrait;
    use StringNomNaissanceTrait;
    use StringNomVilleTrait;
    use StringNomVoieTrait;
    use StringNombreEnfantsTrait;
    use StringNumVoieTrait;
    use StringNumeroTrait;
    use StringNumeroInseeTrait;
    use IntNumeroPjPassTrait;
    use DateTimePeriodePointageClotureeTrait;
    use BoolPolyvalentTrait;
    use StringPrenomTrait;
    use BoolPrimeTrait;
    use StringQualificationTrait;
    use StringSituationFamTrait;
    use StringTel1Trait;
    use StringTel2Trait;
    use BoolTempsPasseTrait;
    use StringTitreTrait;
    use BoolTravailleJfTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
