<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dec t v a3514 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVA3514 {

    /**
     * 02 base h t196.
     *
     * @var float
     */
    private $_02BaseHT196;

    /**
     * 02 taxe due196.
     *
     * @var float
     */
    private $_02TaxeDue196;

    /**
     * 03 base h t55.
     *
     * @var float
     */
    private $_03BaseHT55;

    /**
     * 03 taxe due55.
     *
     * @var float
     */
    private $_03TaxeDue55;

    /**
     * 04 base h t85.
     *
     * @var float
     */
    private $_04BaseHT85;

    /**
     * 04 taxe due85.
     *
     * @var float
     */
    private $_04TaxeDue85;

    /**
     * 05 base h t21.
     *
     * @var float
     */
    private $_05BaseHT21;

    /**
     * 05 taxe due21.
     *
     * @var float
     */
    private $_05TaxeDue21;

    /**
     * 06 base h t anc taux.
     *
     * @var float
     */
    private $_06BaseHTAncTaux;

    /**
     * 06 taxe due anc taux.
     *
     * @var float
     */
    private $_06TaxeDueAncTaux;

    /**
     * 07 base h t taux part.
     *
     * @var float
     */
    private $_07BaseHTTauxPart;

    /**
     * 07 taxe due taux part.
     *
     * @var float
     */
    private $_07TaxeDueTauxPart;

    /**
     * 08 base h t t v aa reverser.
     *
     * @var float
     */
    private $_08BaseHTTVAaReverser;

    /**
     * 08 taxe due t v aa reverser.
     *
     * @var float
     */
    private $_08TaxeDueTVAaReverser;

    /**
     * 09 total t v a brute.
     *
     * @var float
     */
    private $_09TotalTVABrute;

    /**
     * 10 biens immos.
     *
     * @var float
     */
    private $_10BiensImmos;

    /**
     * 11 autres biens.
     *
     * @var float
     */
    private $_11AutresBiens;

    /**
     * 12 omission.
     *
     * @var float
     */
    private $_12Omission;

    /**
     * 13 total tva deduc.
     *
     * @var float
     */
    private $_13TotalTvaDeduc;

    /**
     * 14 a.
     *
     * @var float
     */
    private $_14A;

    /**
     * 15 b.
     *
     * @var float
     */
    private $_15B;

    /**
     * 16 rembours t v a.
     *
     * @var float
     */
    private $_16RemboursTVA;

    /**
     * 18 credit t v a c a12.
     *
     * @var float
     */
    private $_18CreditTVACA12;

    /**
     * 1 mtt augmentation.
     *
     * @var float
     */
    private $_1MttAugmentation;

    /**
     * 20 acompte t a1.
     *
     * @var float
     */
    private $_20AcompteTA1;

    /**
     * 20 acompte t a2.
     *
     * @var float
     */
    private $_20AcompteTA2;

    /**
     * 21 acompte tot1.
     *
     * @var float
     */
    private $_21AcompteTot1;

    /**
     * 21 acompte tot2.
     *
     * @var float
     */
    private $_21AcompteTot2;

    /**
     * 2 b base h t7.
     *
     * @var float
     */
    private $_2BBaseHT7;

    /**
     * 2 b taxe due7.
     *
     * @var float
     */
    private $_2BTaxeDue7;

    /**
     * 2 mtt credit prec.
     *
     * @var float
     */
    private $_2MttCreditPrec;

    /**
     * 2 mtt diminution.
     *
     * @var float
     */
    private $_2MttDiminution;

    /**
     * 3 mtt diminution.
     *
     * @var float
     */
    private $_3MttDiminution;

    /**
     * 3 suspension.
     *
     * @var int
     */
    private $_3Suspension;

    /**
     * 4 has diminution.
     *
     * @var bool
     */
    private $_4HasDiminution;

    /**
     * 4 mtt diminution.
     *
     * @var float
     */
    private $_4MttDiminution;

    /**
     * Acompte du.
     *
     * @var DateTime
     */
    private $acompteDu;

    /**
     * Date dec.
     *
     * @var DateTime
     */
    private $dateDec;

    /**
     * Date limite dec.
     *
     * @var DateTime
     */
    private $dateLimiteDec;

    /**
     * Det code t a.
     *
     * @var string
     */
    private $detCodeTA;

    /**
     * Det t a1.
     *
     * @var string
     */
    private $detTA1;

    /**
     * Det t a2.
     *
     * @var string
     */
    private $detTA2;

    /**
     * Det t a3.
     *
     * @var string
     */
    private $detTA3;

    /**
     * Det t a4.
     *
     * @var string
     */
    private $detTA4;

    /**
     * Exigible le.
     *
     * @var DateTime
     */
    private $exigibleLe;

    /**
     * Mtt a payer.
     *
     * @var float
     */
    private $mttAPayer;

    /**
     * Mtt det t a1.
     *
     * @var float
     */
    private $mttDetTA1;

    /**
     * Mtt det t a2.
     *
     * @var float
     */
    private $mttDetTA2;

    /**
     * Mtt det t a3.
     *
     * @var float
     */
    private $mttDetTA3;

    /**
     * Mtt det t a4.
     *
     * @var float
     */
    private $mttDetTA4;

    /**
     * Mtt dont t v a.
     *
     * @var float
     */
    private $mttDontTVA;

    /**
     * Mtt dont taxes assim.
     *
     * @var float
     */
    private $mttDontTaxesAssim;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * z0151.
     *
     * @var float
     */
    private $z0151;

    /**
     * z0207.
     *
     * @var float
     */
    private $z0207;

    /**
     * z h a.
     *
     * @var float
     */
    private $zHA;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the 02 base h t196.
     *
     * @return float Returns the 02 base h t196.
     */
    public function get02BaseHT196() {
        return $this->_02BaseHT196;
    }

    /**
     * Get the 02 taxe due196.
     *
     * @return float Returns the 02 taxe due196.
     */
    public function get02TaxeDue196() {
        return $this->_02TaxeDue196;
    }

    /**
     * Get the 03 base h t55.
     *
     * @return float Returns the 03 base h t55.
     */
    public function get03BaseHT55() {
        return $this->_03BaseHT55;
    }

    /**
     * Get the 03 taxe due55.
     *
     * @return float Returns the 03 taxe due55.
     */
    public function get03TaxeDue55() {
        return $this->_03TaxeDue55;
    }

    /**
     * Get the 04 base h t85.
     *
     * @return float Returns the 04 base h t85.
     */
    public function get04BaseHT85() {
        return $this->_04BaseHT85;
    }

    /**
     * Get the 04 taxe due85.
     *
     * @return float Returns the 04 taxe due85.
     */
    public function get04TaxeDue85() {
        return $this->_04TaxeDue85;
    }

    /**
     * Get the 05 base h t21.
     *
     * @return float Returns the 05 base h t21.
     */
    public function get05BaseHT21() {
        return $this->_05BaseHT21;
    }

    /**
     * Get the 05 taxe due21.
     *
     * @return float Returns the 05 taxe due21.
     */
    public function get05TaxeDue21() {
        return $this->_05TaxeDue21;
    }

    /**
     * Get the 06 base h t anc taux.
     *
     * @return float Returns the 06 base h t anc taux.
     */
    public function get06BaseHTAncTaux() {
        return $this->_06BaseHTAncTaux;
    }

    /**
     * Get the 06 taxe due anc taux.
     *
     * @return float Returns the 06 taxe due anc taux.
     */
    public function get06TaxeDueAncTaux() {
        return $this->_06TaxeDueAncTaux;
    }

    /**
     * Get the 07 base h t taux part.
     *
     * @return float Returns the 07 base h t taux part.
     */
    public function get07BaseHTTauxPart() {
        return $this->_07BaseHTTauxPart;
    }

    /**
     * Get the 07 taxe due taux part.
     *
     * @return float Returns the 07 taxe due taux part.
     */
    public function get07TaxeDueTauxPart() {
        return $this->_07TaxeDueTauxPart;
    }

    /**
     * Get the 08 base h t t v aa reverser.
     *
     * @return float Returns the 08 base h t t v aa reverser.
     */
    public function get08BaseHTTVAaReverser() {
        return $this->_08BaseHTTVAaReverser;
    }

    /**
     * Get the 08 taxe due t v aa reverser.
     *
     * @return float Returns the 08 taxe due t v aa reverser.
     */
    public function get08TaxeDueTVAaReverser() {
        return $this->_08TaxeDueTVAaReverser;
    }

    /**
     * Get the 09 total t v a brute.
     *
     * @return float Returns the 09 total t v a brute.
     */
    public function get09TotalTVABrute() {
        return $this->_09TotalTVABrute;
    }

    /**
     * Get the 10 biens immos.
     *
     * @return float Returns the 10 biens immos.
     */
    public function get10BiensImmos() {
        return $this->_10BiensImmos;
    }

    /**
     * Get the 11 autres biens.
     *
     * @return float Returns the 11 autres biens.
     */
    public function get11AutresBiens() {
        return $this->_11AutresBiens;
    }

    /**
     * Get the 12 omission.
     *
     * @return float Returns the 12 omission.
     */
    public function get12Omission() {
        return $this->_12Omission;
    }

    /**
     * Get the 13 total tva deduc.
     *
     * @return float Returns the 13 total tva deduc.
     */
    public function get13TotalTvaDeduc() {
        return $this->_13TotalTvaDeduc;
    }

    /**
     * Get the 14 a.
     *
     * @return float Returns the 14 a.
     */
    public function get14A() {
        return $this->_14A;
    }

    /**
     * Get the 15 b.
     *
     * @return float Returns the 15 b.
     */
    public function get15B() {
        return $this->_15B;
    }

    /**
     * Get the 16 rembours t v a.
     *
     * @return float Returns the 16 rembours t v a.
     */
    public function get16RemboursTVA() {
        return $this->_16RemboursTVA;
    }

    /**
     * Get the 18 credit t v a c a12.
     *
     * @return float Returns the 18 credit t v a c a12.
     */
    public function get18CreditTVACA12() {
        return $this->_18CreditTVACA12;
    }

    /**
     * Get the 1 mtt augmentation.
     *
     * @return float Returns the 1 mtt augmentation.
     */
    public function get1MttAugmentation() {
        return $this->_1MttAugmentation;
    }

    /**
     * Get the 20 acompte t a1.
     *
     * @return float Returns the 20 acompte t a1.
     */
    public function get20AcompteTA1() {
        return $this->_20AcompteTA1;
    }

    /**
     * Get the 20 acompte t a2.
     *
     * @return float Returns the 20 acompte t a2.
     */
    public function get20AcompteTA2() {
        return $this->_20AcompteTA2;
    }

    /**
     * Get the 21 acompte tot1.
     *
     * @return float Returns the 21 acompte tot1.
     */
    public function get21AcompteTot1() {
        return $this->_21AcompteTot1;
    }

    /**
     * Get the 21 acompte tot2.
     *
     * @return float Returns the 21 acompte tot2.
     */
    public function get21AcompteTot2() {
        return $this->_21AcompteTot2;
    }

    /**
     * Get the 2 b base h t7.
     *
     * @return float Returns the 2 b base h t7.
     */
    public function get2BBaseHT7() {
        return $this->_2BBaseHT7;
    }

    /**
     * Get the 2 b taxe due7.
     *
     * @return float Returns the 2 b taxe due7.
     */
    public function get2BTaxeDue7() {
        return $this->_2BTaxeDue7;
    }

    /**
     * Get the 2 mtt credit prec.
     *
     * @return float Returns the 2 mtt credit prec.
     */
    public function get2MttCreditPrec() {
        return $this->_2MttCreditPrec;
    }

    /**
     * Get the 2 mtt diminution.
     *
     * @return float Returns the 2 mtt diminution.
     */
    public function get2MttDiminution() {
        return $this->_2MttDiminution;
    }

    /**
     * Get the 3 mtt diminution.
     *
     * @return float Returns the 3 mtt diminution.
     */
    public function get3MttDiminution() {
        return $this->_3MttDiminution;
    }

    /**
     * Get the 3 suspension.
     *
     * @return int Returns the 3 suspension.
     */
    public function get3Suspension() {
        return $this->_3Suspension;
    }

    /**
     * Get the 4 has diminution.
     *
     * @return bool Returns the 4 has diminution.
     */
    public function get4HasDiminution() {
        return $this->_4HasDiminution;
    }

    /**
     * Get the 4 mtt diminution.
     *
     * @return float Returns the 4 mtt diminution.
     */
    public function get4MttDiminution() {
        return $this->_4MttDiminution;
    }

    /**
     * Get the acompte du.
     *
     * @return DateTime Returns the acompte du.
     */
    public function getAcompteDu() {
        return $this->acompteDu;
    }

    /**
     * Get the date dec.
     *
     * @return DateTime Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Get the date limite dec.
     *
     * @return DateTime Returns the date limite dec.
     */
    public function getDateLimiteDec() {
        return $this->dateLimiteDec;
    }

    /**
     * Get the det code t a.
     *
     * @return string Returns the det code t a.
     */
    public function getDetCodeTA() {
        return $this->detCodeTA;
    }

    /**
     * Get the det t a1.
     *
     * @return string Returns the det t a1.
     */
    public function getDetTA1() {
        return $this->detTA1;
    }

    /**
     * Get the det t a2.
     *
     * @return string Returns the det t a2.
     */
    public function getDetTA2() {
        return $this->detTA2;
    }

    /**
     * Get the det t a3.
     *
     * @return string Returns the det t a3.
     */
    public function getDetTA3() {
        return $this->detTA3;
    }

    /**
     * Get the det t a4.
     *
     * @return string Returns the det t a4.
     */
    public function getDetTA4() {
        return $this->detTA4;
    }

    /**
     * Get the exigible le.
     *
     * @return DateTime Returns the exigible le.
     */
    public function getExigibleLe() {
        return $this->exigibleLe;
    }

    /**
     * Get the mtt a payer.
     *
     * @return float Returns the mtt a payer.
     */
    public function getMttAPayer() {
        return $this->mttAPayer;
    }

    /**
     * Get the mtt det t a1.
     *
     * @return float Returns the mtt det t a1.
     */
    public function getMttDetTA1() {
        return $this->mttDetTA1;
    }

    /**
     * Get the mtt det t a2.
     *
     * @return float Returns the mtt det t a2.
     */
    public function getMttDetTA2() {
        return $this->mttDetTA2;
    }

    /**
     * Get the mtt det t a3.
     *
     * @return float Returns the mtt det t a3.
     */
    public function getMttDetTA3() {
        return $this->mttDetTA3;
    }

    /**
     * Get the mtt det t a4.
     *
     * @return float Returns the mtt det t a4.
     */
    public function getMttDetTA4() {
        return $this->mttDetTA4;
    }

    /**
     * Get the mtt dont t v a.
     *
     * @return float Returns the mtt dont t v a.
     */
    public function getMttDontTVA() {
        return $this->mttDontTVA;
    }

    /**
     * Get the mtt dont taxes assim.
     *
     * @return float Returns the mtt dont taxes assim.
     */
    public function getMttDontTaxesAssim() {
        return $this->mttDontTaxesAssim;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the z0151.
     *
     * @return float Returns the z0151.
     */
    public function getz0151() {
        return $this->z0151;
    }

    /**
     * Get the z0207.
     *
     * @return float Returns the z0207.
     */
    public function getz0207() {
        return $this->z0207;
    }

    /**
     * Get the z h a.
     *
     * @return float Returns the z h a.
     */
    public function getzHA() {
        return $this->zHA;
    }

    /**
     * Set the 02 base h t196.
     *
     * @param float $_02BaseHT196 The 02 base h t196.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set02BaseHT196($_02BaseHT196) {
        $this->_02BaseHT196 = $_02BaseHT196;
        return $this;
    }

    /**
     * Set the 02 taxe due196.
     *
     * @param float $_02TaxeDue196 The 02 taxe due196.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set02TaxeDue196($_02TaxeDue196) {
        $this->_02TaxeDue196 = $_02TaxeDue196;
        return $this;
    }

    /**
     * Set the 03 base h t55.
     *
     * @param float $_03BaseHT55 The 03 base h t55.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set03BaseHT55($_03BaseHT55) {
        $this->_03BaseHT55 = $_03BaseHT55;
        return $this;
    }

    /**
     * Set the 03 taxe due55.
     *
     * @param float $_03TaxeDue55 The 03 taxe due55.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set03TaxeDue55($_03TaxeDue55) {
        $this->_03TaxeDue55 = $_03TaxeDue55;
        return $this;
    }

    /**
     * Set the 04 base h t85.
     *
     * @param float $_04BaseHT85 The 04 base h t85.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set04BaseHT85($_04BaseHT85) {
        $this->_04BaseHT85 = $_04BaseHT85;
        return $this;
    }

    /**
     * Set the 04 taxe due85.
     *
     * @param float $_04TaxeDue85 The 04 taxe due85.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set04TaxeDue85($_04TaxeDue85) {
        $this->_04TaxeDue85 = $_04TaxeDue85;
        return $this;
    }

    /**
     * Set the 05 base h t21.
     *
     * @param float $_05BaseHT21 The 05 base h t21.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set05BaseHT21($_05BaseHT21) {
        $this->_05BaseHT21 = $_05BaseHT21;
        return $this;
    }

    /**
     * Set the 05 taxe due21.
     *
     * @param float $_05TaxeDue21 The 05 taxe due21.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set05TaxeDue21($_05TaxeDue21) {
        $this->_05TaxeDue21 = $_05TaxeDue21;
        return $this;
    }

    /**
     * Set the 06 base h t anc taux.
     *
     * @param float $_06BaseHTAncTaux The 06 base h t anc taux.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set06BaseHTAncTaux($_06BaseHTAncTaux) {
        $this->_06BaseHTAncTaux = $_06BaseHTAncTaux;
        return $this;
    }

    /**
     * Set the 06 taxe due anc taux.
     *
     * @param float $_06TaxeDueAncTaux The 06 taxe due anc taux.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set06TaxeDueAncTaux($_06TaxeDueAncTaux) {
        $this->_06TaxeDueAncTaux = $_06TaxeDueAncTaux;
        return $this;
    }

    /**
     * Set the 07 base h t taux part.
     *
     * @param float $_07BaseHTTauxPart The 07 base h t taux part.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set07BaseHTTauxPart($_07BaseHTTauxPart) {
        $this->_07BaseHTTauxPart = $_07BaseHTTauxPart;
        return $this;
    }

    /**
     * Set the 07 taxe due taux part.
     *
     * @param float $_07TaxeDueTauxPart The 07 taxe due taux part.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set07TaxeDueTauxPart($_07TaxeDueTauxPart) {
        $this->_07TaxeDueTauxPart = $_07TaxeDueTauxPart;
        return $this;
    }

    /**
     * Set the 08 base h t t v aa reverser.
     *
     * @param float $_08BaseHTTVAaReverser The 08 base h t t v aa reverser.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set08BaseHTTVAaReverser($_08BaseHTTVAaReverser) {
        $this->_08BaseHTTVAaReverser = $_08BaseHTTVAaReverser;
        return $this;
    }

    /**
     * Set the 08 taxe due t v aa reverser.
     *
     * @param float $_08TaxeDueTVAaReverser The 08 taxe due t v aa reverser.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set08TaxeDueTVAaReverser($_08TaxeDueTVAaReverser) {
        $this->_08TaxeDueTVAaReverser = $_08TaxeDueTVAaReverser;
        return $this;
    }

    /**
     * Set the 09 total t v a brute.
     *
     * @param float $_09TotalTVABrute The 09 total t v a brute.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set09TotalTVABrute($_09TotalTVABrute) {
        $this->_09TotalTVABrute = $_09TotalTVABrute;
        return $this;
    }

    /**
     * Set the 10 biens immos.
     *
     * @param float $_10BiensImmos The 10 biens immos.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set10BiensImmos($_10BiensImmos) {
        $this->_10BiensImmos = $_10BiensImmos;
        return $this;
    }

    /**
     * Set the 11 autres biens.
     *
     * @param float $_11AutresBiens The 11 autres biens.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set11AutresBiens($_11AutresBiens) {
        $this->_11AutresBiens = $_11AutresBiens;
        return $this;
    }

    /**
     * Set the 12 omission.
     *
     * @param float $_12Omission The 12 omission.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set12Omission($_12Omission) {
        $this->_12Omission = $_12Omission;
        return $this;
    }

    /**
     * Set the 13 total tva deduc.
     *
     * @param float $_13TotalTvaDeduc The 13 total tva deduc.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set13TotalTvaDeduc($_13TotalTvaDeduc) {
        $this->_13TotalTvaDeduc = $_13TotalTvaDeduc;
        return $this;
    }

    /**
     * Set the 14 a.
     *
     * @param float $_14A The 14 a.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set14A($_14A) {
        $this->_14A = $_14A;
        return $this;
    }

    /**
     * Set the 15 b.
     *
     * @param float $_15B The 15 b.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set15B($_15B) {
        $this->_15B = $_15B;
        return $this;
    }

    /**
     * Set the 16 rembours t v a.
     *
     * @param float $_16RemboursTVA The 16 rembours t v a.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set16RemboursTVA($_16RemboursTVA) {
        $this->_16RemboursTVA = $_16RemboursTVA;
        return $this;
    }

    /**
     * Set the 18 credit t v a c a12.
     *
     * @param float $_18CreditTVACA12 The 18 credit t v a c a12.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set18CreditTVACA12($_18CreditTVACA12) {
        $this->_18CreditTVACA12 = $_18CreditTVACA12;
        return $this;
    }

    /**
     * Set the 1 mtt augmentation.
     *
     * @param float $_1MttAugmentation The 1 mtt augmentation.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set1MttAugmentation($_1MttAugmentation) {
        $this->_1MttAugmentation = $_1MttAugmentation;
        return $this;
    }

    /**
     * Set the 20 acompte t a1.
     *
     * @param float $_20AcompteTA1 The 20 acompte t a1.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set20AcompteTA1($_20AcompteTA1) {
        $this->_20AcompteTA1 = $_20AcompteTA1;
        return $this;
    }

    /**
     * Set the 20 acompte t a2.
     *
     * @param float $_20AcompteTA2 The 20 acompte t a2.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set20AcompteTA2($_20AcompteTA2) {
        $this->_20AcompteTA2 = $_20AcompteTA2;
        return $this;
    }

    /**
     * Set the 21 acompte tot1.
     *
     * @param float $_21AcompteTot1 The 21 acompte tot1.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set21AcompteTot1($_21AcompteTot1) {
        $this->_21AcompteTot1 = $_21AcompteTot1;
        return $this;
    }

    /**
     * Set the 21 acompte tot2.
     *
     * @param float $_21AcompteTot2 The 21 acompte tot2.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set21AcompteTot2($_21AcompteTot2) {
        $this->_21AcompteTot2 = $_21AcompteTot2;
        return $this;
    }

    /**
     * Set the 2 b base h t7.
     *
     * @param float $_2BBaseHT7 The 2 b base h t7.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set2BBaseHT7($_2BBaseHT7) {
        $this->_2BBaseHT7 = $_2BBaseHT7;
        return $this;
    }

    /**
     * Set the 2 b taxe due7.
     *
     * @param float $_2BTaxeDue7 The 2 b taxe due7.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set2BTaxeDue7($_2BTaxeDue7) {
        $this->_2BTaxeDue7 = $_2BTaxeDue7;
        return $this;
    }

    /**
     * Set the 2 mtt credit prec.
     *
     * @param float $_2MttCreditPrec The 2 mtt credit prec.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set2MttCreditPrec($_2MttCreditPrec) {
        $this->_2MttCreditPrec = $_2MttCreditPrec;
        return $this;
    }

    /**
     * Set the 2 mtt diminution.
     *
     * @param float $_2MttDiminution The 2 mtt diminution.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set2MttDiminution($_2MttDiminution) {
        $this->_2MttDiminution = $_2MttDiminution;
        return $this;
    }

    /**
     * Set the 3 mtt diminution.
     *
     * @param float $_3MttDiminution The 3 mtt diminution.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set3MttDiminution($_3MttDiminution) {
        $this->_3MttDiminution = $_3MttDiminution;
        return $this;
    }

    /**
     * Set the 3 suspension.
     *
     * @param int $_3Suspension The 3 suspension.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set3Suspension($_3Suspension) {
        $this->_3Suspension = $_3Suspension;
        return $this;
    }

    /**
     * Set the 4 has diminution.
     *
     * @param bool $_4HasDiminution The 4 has diminution.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set4HasDiminution($_4HasDiminution) {
        $this->_4HasDiminution = $_4HasDiminution;
        return $this;
    }

    /**
     * Set the 4 mtt diminution.
     *
     * @param float $_4MttDiminution The 4 mtt diminution.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function set4MttDiminution($_4MttDiminution) {
        $this->_4MttDiminution = $_4MttDiminution;
        return $this;
    }

    /**
     * Set the acompte du.
     *
     * @param DateTime $acompteDu The acompte du.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setAcompteDu(DateTime $acompteDu = null) {
        $this->acompteDu = $acompteDu;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param DateTime $dateDec The date dec.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDateDec(DateTime $dateDec = null) {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the date limite dec.
     *
     * @param DateTime $dateLimiteDec The date limite dec.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDateLimiteDec(DateTime $dateLimiteDec = null) {
        $this->dateLimiteDec = $dateLimiteDec;
        return $this;
    }

    /**
     * Set the det code t a.
     *
     * @param string $detCodeTA The det code t a.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDetCodeTA($detCodeTA) {
        $this->detCodeTA = $detCodeTA;
        return $this;
    }

    /**
     * Set the det t a1.
     *
     * @param string $detTA1 The det t a1.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDetTA1($detTA1) {
        $this->detTA1 = $detTA1;
        return $this;
    }

    /**
     * Set the det t a2.
     *
     * @param string $detTA2 The det t a2.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDetTA2($detTA2) {
        $this->detTA2 = $detTA2;
        return $this;
    }

    /**
     * Set the det t a3.
     *
     * @param string $detTA3 The det t a3.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDetTA3($detTA3) {
        $this->detTA3 = $detTA3;
        return $this;
    }

    /**
     * Set the det t a4.
     *
     * @param string $detTA4 The det t a4.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setDetTA4($detTA4) {
        $this->detTA4 = $detTA4;
        return $this;
    }

    /**
     * Set the exigible le.
     *
     * @param DateTime $exigibleLe The exigible le.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setExigibleLe(DateTime $exigibleLe = null) {
        $this->exigibleLe = $exigibleLe;
        return $this;
    }

    /**
     * Set the mtt a payer.
     *
     * @param float $mttAPayer The mtt a payer.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttAPayer($mttAPayer) {
        $this->mttAPayer = $mttAPayer;
        return $this;
    }

    /**
     * Set the mtt det t a1.
     *
     * @param float $mttDetTA1 The mtt det t a1.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDetTA1($mttDetTA1) {
        $this->mttDetTA1 = $mttDetTA1;
        return $this;
    }

    /**
     * Set the mtt det t a2.
     *
     * @param float $mttDetTA2 The mtt det t a2.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDetTA2($mttDetTA2) {
        $this->mttDetTA2 = $mttDetTA2;
        return $this;
    }

    /**
     * Set the mtt det t a3.
     *
     * @param float $mttDetTA3 The mtt det t a3.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDetTA3($mttDetTA3) {
        $this->mttDetTA3 = $mttDetTA3;
        return $this;
    }

    /**
     * Set the mtt det t a4.
     *
     * @param float $mttDetTA4 The mtt det t a4.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDetTA4($mttDetTA4) {
        $this->mttDetTA4 = $mttDetTA4;
        return $this;
    }

    /**
     * Set the mtt dont t v a.
     *
     * @param float $mttDontTVA The mtt dont t v a.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDontTVA($mttDontTVA) {
        $this->mttDontTVA = $mttDontTVA;
        return $this;
    }

    /**
     * Set the mtt dont taxes assim.
     *
     * @param float $mttDontTaxesAssim The mtt dont taxes assim.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setMttDontTaxesAssim($mttDontTaxesAssim) {
        $this->mttDontTaxesAssim = $mttDontTaxesAssim;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the z0151.
     *
     * @param float $z0151 The z0151.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setz0151($z0151) {
        $this->z0151 = $z0151;
        return $this;
    }

    /**
     * Set the z0207.
     *
     * @param float $z0207 The z0207.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setz0207($z0207) {
        $this->z0207 = $z0207;
        return $this;
    }

    /**
     * Set the z h a.
     *
     * @param float $zHA The z h a.
     * @return DecTVA3514 Returns this dec t v a3514.
     */
    public function setzHA($zHA) {
        $this->zHA = $zHA;
        return $this;
    }
}
