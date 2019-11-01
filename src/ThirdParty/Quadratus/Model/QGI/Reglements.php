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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDateEcheanceCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDefinitionPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDefinitionRemiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailEcheanceCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailEffetCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinDecadeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinQuinzaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditerChequeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEspecesCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPaiementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasDeTiroirCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasEffetAvoirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTraiteEditerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeComptableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptPortefeuilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDeviseCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDureeEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibEcrCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaiementDepartLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaiementLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAcceptationTrait;

/**
 * Reglements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Reglements {

    use StringBicTrait;
    use StringCodeTrait;
    use StringCodeBanqueTrait;
    use StringCodeComptableTrait;
    use StringCompteCaisseTrait;
    use StringCptPortefeuilleTrait;
    use BoolDateEcheanceCptaTrait;
    use BoolDefinitionPaiementTrait;
    use BoolDefinitionRemiseTrait;
    use BoolDetailEcheanceCptaTrait;
    use BoolDetailEffetCptaTrait;
    use StringDeviseCaisseTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use StringDureeEcheancesTrait;
    use BoolEcheanceFinDecadeTrait;
    use BoolEcheanceFinQuinzaineTrait;
    use BoolEditDateEcheanceTrait;
    use BoolEditerChequeTrait;
    use BoolEspecesCaisseTrait;
    use BoolGestionPaiementsTrait;
    use StringIbanTrait;
    use StringIntituleTrait;
    use StringIntitule2Trait;
    use StringIntitule3Trait;
    use BoolLcrTrait;
    use StringLibEcrCaisseTrait;
    use StringNombreEcheancesTrait;
    use StringPaiementDepartLeTrait;
    use StringPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use BoolPasDeTiroirCaisseTrait;
    use BoolPasEffetAvoirTrait;
    use StringRibTrait;
    use FloatRemisePiedTrait;
    use BoolTraiteEditerTrait;
    use StringTypeAcceptationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
