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

use DateTime;

/**
 * Criteres client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CriteresClient {

    /**
     * Booleen1.
     *
     * @var bool
     */
    private $booleen1;

    /**
     * Booleen10.
     *
     * @var bool
     */
    private $booleen10;

    /**
     * Booleen2.
     *
     * @var bool
     */
    private $booleen2;

    /**
     * Booleen3.
     *
     * @var bool
     */
    private $booleen3;

    /**
     * Booleen4.
     *
     * @var bool
     */
    private $booleen4;

    /**
     * Booleen5.
     *
     * @var bool
     */
    private $booleen5;

    /**
     * Booleen6.
     *
     * @var bool
     */
    private $booleen6;

    /**
     * Booleen7.
     *
     * @var bool
     */
    private $booleen7;

    /**
     * Booleen8.
     *
     * @var bool
     */
    private $booleen8;

    /**
     * Booleen9.
     *
     * @var bool
     */
    private $booleen9;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code ref1.
     *
     * @var string
     */
    private $codeRef1;

    /**
     * Code ref10.
     *
     * @var string
     */
    private $codeRef10;

    /**
     * Code ref2.
     *
     * @var string
     */
    private $codeRef2;

    /**
     * Code ref3.
     *
     * @var string
     */
    private $codeRef3;

    /**
     * Code ref4.
     *
     * @var string
     */
    private $codeRef4;

    /**
     * Code ref5.
     *
     * @var string
     */
    private $codeRef5;

    /**
     * Code ref6.
     *
     * @var string
     */
    private $codeRef6;

    /**
     * Code ref7.
     *
     * @var string
     */
    private $codeRef7;

    /**
     * Code ref8.
     *
     * @var string
     */
    private $codeRef8;

    /**
     * Code ref9.
     *
     * @var string
     */
    private $codeRef9;

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date10.
     *
     * @var DateTime|null
     */
    private $date10;

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Date3.
     *
     * @var DateTime|null
     */
    private $date3;

    /**
     * Date4.
     *
     * @var DateTime|null
     */
    private $date4;

    /**
     * Date5.
     *
     * @var DateTime|null
     */
    private $date5;

    /**
     * Date6.
     *
     * @var DateTime|null
     */
    private $date6;

    /**
     * Date7.
     *
     * @var DateTime|null
     */
    private $date7;

    /**
     * Date8.
     *
     * @var DateTime|null
     */
    private $date8;

    /**
     * Date9.
     *
     * @var DateTime|null
     */
    private $date9;

    /**
     * Double1.
     *
     * @var float
     */
    private $double1;

    /**
     * Double10.
     *
     * @var float
     */
    private $double10;

    /**
     * Double2.
     *
     * @var float
     */
    private $double2;

    /**
     * Double3.
     *
     * @var float
     */
    private $double3;

    /**
     * Double4.
     *
     * @var float
     */
    private $double4;

    /**
     * Double5.
     *
     * @var float
     */
    private $double5;

    /**
     * Double6.
     *
     * @var float
     */
    private $double6;

    /**
     * Double7.
     *
     * @var float
     */
    private $double7;

    /**
     * Double8.
     *
     * @var float
     */
    private $double8;

    /**
     * Double9.
     *
     * @var float
     */
    private $double9;

    /**
     * Long1.
     *
     * @var int
     */
    private $long1;

    /**
     * Long10.
     *
     * @var int
     */
    private $long10;

    /**
     * Long2.
     *
     * @var int
     */
    private $long2;

    /**
     * Long3.
     *
     * @var int
     */
    private $long3;

    /**
     * Long4.
     *
     * @var int
     */
    private $long4;

    /**
     * Long5.
     *
     * @var int
     */
    private $long5;

    /**
     * Long6.
     *
     * @var int
     */
    private $long6;

    /**
     * Long7.
     *
     * @var int
     */
    private $long7;

    /**
     * Long8.
     *
     * @var int
     */
    private $long8;

    /**
     * Long9.
     *
     * @var int
     */
    private $long9;

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Texte10.
     *
     * @var string
     */
    private $texte10;

    /**
     * Texte2.
     *
     * @var string
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string
     */
    private $texte5;

    /**
     * Texte6.
     *
     * @var string
     */
    private $texte6;

    /**
     * Texte7.
     *
     * @var string
     */
    private $texte7;

    /**
     * Texte8.
     *
     * @var string
     */
    private $texte8;

    /**
     * Texte9.
     *
     * @var string
     */
    private $texte9;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the booleen1.
     *
     * @return bool Returns the booleen1.
     */
    public function getBooleen1() {
        return $this->booleen1;
    }

    /**
     * Get the booleen10.
     *
     * @return bool Returns the booleen10.
     */
    public function getBooleen10() {
        return $this->booleen10;
    }

    /**
     * Get the booleen2.
     *
     * @return bool Returns the booleen2.
     */
    public function getBooleen2() {
        return $this->booleen2;
    }

    /**
     * Get the booleen3.
     *
     * @return bool Returns the booleen3.
     */
    public function getBooleen3() {
        return $this->booleen3;
    }

    /**
     * Get the booleen4.
     *
     * @return bool Returns the booleen4.
     */
    public function getBooleen4() {
        return $this->booleen4;
    }

    /**
     * Get the booleen5.
     *
     * @return bool Returns the booleen5.
     */
    public function getBooleen5() {
        return $this->booleen5;
    }

    /**
     * Get the booleen6.
     *
     * @return bool Returns the booleen6.
     */
    public function getBooleen6() {
        return $this->booleen6;
    }

    /**
     * Get the booleen7.
     *
     * @return bool Returns the booleen7.
     */
    public function getBooleen7() {
        return $this->booleen7;
    }

    /**
     * Get the booleen8.
     *
     * @return bool Returns the booleen8.
     */
    public function getBooleen8() {
        return $this->booleen8;
    }

    /**
     * Get the booleen9.
     *
     * @return bool Returns the booleen9.
     */
    public function getBooleen9() {
        return $this->booleen9;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code ref1.
     *
     * @return string Returns the code ref1.
     */
    public function getCodeRef1() {
        return $this->codeRef1;
    }

    /**
     * Get the code ref10.
     *
     * @return string Returns the code ref10.
     */
    public function getCodeRef10() {
        return $this->codeRef10;
    }

    /**
     * Get the code ref2.
     *
     * @return string Returns the code ref2.
     */
    public function getCodeRef2() {
        return $this->codeRef2;
    }

    /**
     * Get the code ref3.
     *
     * @return string Returns the code ref3.
     */
    public function getCodeRef3() {
        return $this->codeRef3;
    }

    /**
     * Get the code ref4.
     *
     * @return string Returns the code ref4.
     */
    public function getCodeRef4() {
        return $this->codeRef4;
    }

    /**
     * Get the code ref5.
     *
     * @return string Returns the code ref5.
     */
    public function getCodeRef5() {
        return $this->codeRef5;
    }

    /**
     * Get the code ref6.
     *
     * @return string Returns the code ref6.
     */
    public function getCodeRef6() {
        return $this->codeRef6;
    }

    /**
     * Get the code ref7.
     *
     * @return string Returns the code ref7.
     */
    public function getCodeRef7() {
        return $this->codeRef7;
    }

    /**
     * Get the code ref8.
     *
     * @return string Returns the code ref8.
     */
    public function getCodeRef8() {
        return $this->codeRef8;
    }

    /**
     * Get the code ref9.
     *
     * @return string Returns the code ref9.
     */
    public function getCodeRef9() {
        return $this->codeRef9;
    }

    /**
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1() {
        return $this->date1;
    }

    /**
     * Get the date10.
     *
     * @return DateTime|null Returns the date10.
     */
    public function getDate10() {
        return $this->date10;
    }

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2() {
        return $this->date2;
    }

    /**
     * Get the date3.
     *
     * @return DateTime|null Returns the date3.
     */
    public function getDate3() {
        return $this->date3;
    }

    /**
     * Get the date4.
     *
     * @return DateTime|null Returns the date4.
     */
    public function getDate4() {
        return $this->date4;
    }

    /**
     * Get the date5.
     *
     * @return DateTime|null Returns the date5.
     */
    public function getDate5() {
        return $this->date5;
    }

    /**
     * Get the date6.
     *
     * @return DateTime|null Returns the date6.
     */
    public function getDate6() {
        return $this->date6;
    }

    /**
     * Get the date7.
     *
     * @return DateTime|null Returns the date7.
     */
    public function getDate7() {
        return $this->date7;
    }

    /**
     * Get the date8.
     *
     * @return DateTime|null Returns the date8.
     */
    public function getDate8() {
        return $this->date8;
    }

    /**
     * Get the date9.
     *
     * @return DateTime|null Returns the date9.
     */
    public function getDate9() {
        return $this->date9;
    }

    /**
     * Get the double1.
     *
     * @return float Returns the double1.
     */
    public function getDouble1() {
        return $this->double1;
    }

    /**
     * Get the double10.
     *
     * @return float Returns the double10.
     */
    public function getDouble10() {
        return $this->double10;
    }

    /**
     * Get the double2.
     *
     * @return float Returns the double2.
     */
    public function getDouble2() {
        return $this->double2;
    }

    /**
     * Get the double3.
     *
     * @return float Returns the double3.
     */
    public function getDouble3() {
        return $this->double3;
    }

    /**
     * Get the double4.
     *
     * @return float Returns the double4.
     */
    public function getDouble4() {
        return $this->double4;
    }

    /**
     * Get the double5.
     *
     * @return float Returns the double5.
     */
    public function getDouble5() {
        return $this->double5;
    }

    /**
     * Get the double6.
     *
     * @return float Returns the double6.
     */
    public function getDouble6() {
        return $this->double6;
    }

    /**
     * Get the double7.
     *
     * @return float Returns the double7.
     */
    public function getDouble7() {
        return $this->double7;
    }

    /**
     * Get the double8.
     *
     * @return float Returns the double8.
     */
    public function getDouble8() {
        return $this->double8;
    }

    /**
     * Get the double9.
     *
     * @return float Returns the double9.
     */
    public function getDouble9() {
        return $this->double9;
    }

    /**
     * Get the long1.
     *
     * @return int Returns the long1.
     */
    public function getLong1() {
        return $this->long1;
    }

    /**
     * Get the long10.
     *
     * @return int Returns the long10.
     */
    public function getLong10() {
        return $this->long10;
    }

    /**
     * Get the long2.
     *
     * @return int Returns the long2.
     */
    public function getLong2() {
        return $this->long2;
    }

    /**
     * Get the long3.
     *
     * @return int Returns the long3.
     */
    public function getLong3() {
        return $this->long3;
    }

    /**
     * Get the long4.
     *
     * @return int Returns the long4.
     */
    public function getLong4() {
        return $this->long4;
    }

    /**
     * Get the long5.
     *
     * @return int Returns the long5.
     */
    public function getLong5() {
        return $this->long5;
    }

    /**
     * Get the long6.
     *
     * @return int Returns the long6.
     */
    public function getLong6() {
        return $this->long6;
    }

    /**
     * Get the long7.
     *
     * @return int Returns the long7.
     */
    public function getLong7() {
        return $this->long7;
    }

    /**
     * Get the long8.
     *
     * @return int Returns the long8.
     */
    public function getLong8() {
        return $this->long8;
    }

    /**
     * Get the long9.
     *
     * @return int Returns the long9.
     */
    public function getLong9() {
        return $this->long9;
    }

    /**
     * Get the texte1.
     *
     * @return string Returns the texte1.
     */
    public function getTexte1() {
        return $this->texte1;
    }

    /**
     * Get the texte10.
     *
     * @return string Returns the texte10.
     */
    public function getTexte10() {
        return $this->texte10;
    }

    /**
     * Get the texte2.
     *
     * @return string Returns the texte2.
     */
    public function getTexte2() {
        return $this->texte2;
    }

    /**
     * Get the texte3.
     *
     * @return string Returns the texte3.
     */
    public function getTexte3() {
        return $this->texte3;
    }

    /**
     * Get the texte4.
     *
     * @return string Returns the texte4.
     */
    public function getTexte4() {
        return $this->texte4;
    }

    /**
     * Get the texte5.
     *
     * @return string Returns the texte5.
     */
    public function getTexte5() {
        return $this->texte5;
    }

    /**
     * Get the texte6.
     *
     * @return string Returns the texte6.
     */
    public function getTexte6() {
        return $this->texte6;
    }

    /**
     * Get the texte7.
     *
     * @return string Returns the texte7.
     */
    public function getTexte7() {
        return $this->texte7;
    }

    /**
     * Get the texte8.
     *
     * @return string Returns the texte8.
     */
    public function getTexte8() {
        return $this->texte8;
    }

    /**
     * Get the texte9.
     *
     * @return string Returns the texte9.
     */
    public function getTexte9() {
        return $this->texte9;
    }

    /**
     * Set the booleen1.
     *
     * @param bool $booleen1 The booleen1.
     */
    public function setBooleen1($booleen1) {
        $this->booleen1 = $booleen1;
        return $this;
    }

    /**
     * Set the booleen10.
     *
     * @param bool $booleen10 The booleen10.
     */
    public function setBooleen10($booleen10) {
        $this->booleen10 = $booleen10;
        return $this;
    }

    /**
     * Set the booleen2.
     *
     * @param bool $booleen2 The booleen2.
     */
    public function setBooleen2($booleen2) {
        $this->booleen2 = $booleen2;
        return $this;
    }

    /**
     * Set the booleen3.
     *
     * @param bool $booleen3 The booleen3.
     */
    public function setBooleen3($booleen3) {
        $this->booleen3 = $booleen3;
        return $this;
    }

    /**
     * Set the booleen4.
     *
     * @param bool $booleen4 The booleen4.
     */
    public function setBooleen4($booleen4) {
        $this->booleen4 = $booleen4;
        return $this;
    }

    /**
     * Set the booleen5.
     *
     * @param bool $booleen5 The booleen5.
     */
    public function setBooleen5($booleen5) {
        $this->booleen5 = $booleen5;
        return $this;
    }

    /**
     * Set the booleen6.
     *
     * @param bool $booleen6 The booleen6.
     */
    public function setBooleen6($booleen6) {
        $this->booleen6 = $booleen6;
        return $this;
    }

    /**
     * Set the booleen7.
     *
     * @param bool $booleen7 The booleen7.
     */
    public function setBooleen7($booleen7) {
        $this->booleen7 = $booleen7;
        return $this;
    }

    /**
     * Set the booleen8.
     *
     * @param bool $booleen8 The booleen8.
     */
    public function setBooleen8($booleen8) {
        $this->booleen8 = $booleen8;
        return $this;
    }

    /**
     * Set the booleen9.
     *
     * @param bool $booleen9 The booleen9.
     */
    public function setBooleen9($booleen9) {
        $this->booleen9 = $booleen9;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code ref1.
     *
     * @param string $codeRef1 The code ref1.
     */
    public function setCodeRef1($codeRef1) {
        $this->codeRef1 = $codeRef1;
        return $this;
    }

    /**
     * Set the code ref10.
     *
     * @param string $codeRef10 The code ref10.
     */
    public function setCodeRef10($codeRef10) {
        $this->codeRef10 = $codeRef10;
        return $this;
    }

    /**
     * Set the code ref2.
     *
     * @param string $codeRef2 The code ref2.
     */
    public function setCodeRef2($codeRef2) {
        $this->codeRef2 = $codeRef2;
        return $this;
    }

    /**
     * Set the code ref3.
     *
     * @param string $codeRef3 The code ref3.
     */
    public function setCodeRef3($codeRef3) {
        $this->codeRef3 = $codeRef3;
        return $this;
    }

    /**
     * Set the code ref4.
     *
     * @param string $codeRef4 The code ref4.
     */
    public function setCodeRef4($codeRef4) {
        $this->codeRef4 = $codeRef4;
        return $this;
    }

    /**
     * Set the code ref5.
     *
     * @param string $codeRef5 The code ref5.
     */
    public function setCodeRef5($codeRef5) {
        $this->codeRef5 = $codeRef5;
        return $this;
    }

    /**
     * Set the code ref6.
     *
     * @param string $codeRef6 The code ref6.
     */
    public function setCodeRef6($codeRef6) {
        $this->codeRef6 = $codeRef6;
        return $this;
    }

    /**
     * Set the code ref7.
     *
     * @param string $codeRef7 The code ref7.
     */
    public function setCodeRef7($codeRef7) {
        $this->codeRef7 = $codeRef7;
        return $this;
    }

    /**
     * Set the code ref8.
     *
     * @param string $codeRef8 The code ref8.
     */
    public function setCodeRef8($codeRef8) {
        $this->codeRef8 = $codeRef8;
        return $this;
    }

    /**
     * Set the code ref9.
     *
     * @param string $codeRef9 The code ref9.
     */
    public function setCodeRef9($codeRef9) {
        $this->codeRef9 = $codeRef9;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     */
    public function setDate1(DateTime $date1 = null) {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     */
    public function setDate10(DateTime $date10 = null) {
        $this->date10 = $date10;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     */
    public function setDate2(DateTime $date2 = null) {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     */
    public function setDate3(DateTime $date3 = null) {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     */
    public function setDate4(DateTime $date4 = null) {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     */
    public function setDate5(DateTime $date5 = null) {
        $this->date5 = $date5;
        return $this;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     */
    public function setDate6(DateTime $date6 = null) {
        $this->date6 = $date6;
        return $this;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     */
    public function setDate7(DateTime $date7 = null) {
        $this->date7 = $date7;
        return $this;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     */
    public function setDate8(DateTime $date8 = null) {
        $this->date8 = $date8;
        return $this;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     */
    public function setDate9(DateTime $date9 = null) {
        $this->date9 = $date9;
        return $this;
    }

    /**
     * Set the double1.
     *
     * @param float $double1 The double1.
     */
    public function setDouble1($double1) {
        $this->double1 = $double1;
        return $this;
    }

    /**
     * Set the double10.
     *
     * @param float $double10 The double10.
     */
    public function setDouble10($double10) {
        $this->double10 = $double10;
        return $this;
    }

    /**
     * Set the double2.
     *
     * @param float $double2 The double2.
     */
    public function setDouble2($double2) {
        $this->double2 = $double2;
        return $this;
    }

    /**
     * Set the double3.
     *
     * @param float $double3 The double3.
     */
    public function setDouble3($double3) {
        $this->double3 = $double3;
        return $this;
    }

    /**
     * Set the double4.
     *
     * @param float $double4 The double4.
     */
    public function setDouble4($double4) {
        $this->double4 = $double4;
        return $this;
    }

    /**
     * Set the double5.
     *
     * @param float $double5 The double5.
     */
    public function setDouble5($double5) {
        $this->double5 = $double5;
        return $this;
    }

    /**
     * Set the double6.
     *
     * @param float $double6 The double6.
     */
    public function setDouble6($double6) {
        $this->double6 = $double6;
        return $this;
    }

    /**
     * Set the double7.
     *
     * @param float $double7 The double7.
     */
    public function setDouble7($double7) {
        $this->double7 = $double7;
        return $this;
    }

    /**
     * Set the double8.
     *
     * @param float $double8 The double8.
     */
    public function setDouble8($double8) {
        $this->double8 = $double8;
        return $this;
    }

    /**
     * Set the double9.
     *
     * @param float $double9 The double9.
     */
    public function setDouble9($double9) {
        $this->double9 = $double9;
        return $this;
    }

    /**
     * Set the long1.
     *
     * @param int $long1 The long1.
     */
    public function setLong1($long1) {
        $this->long1 = $long1;
        return $this;
    }

    /**
     * Set the long10.
     *
     * @param int $long10 The long10.
     */
    public function setLong10($long10) {
        $this->long10 = $long10;
        return $this;
    }

    /**
     * Set the long2.
     *
     * @param int $long2 The long2.
     */
    public function setLong2($long2) {
        $this->long2 = $long2;
        return $this;
    }

    /**
     * Set the long3.
     *
     * @param int $long3 The long3.
     */
    public function setLong3($long3) {
        $this->long3 = $long3;
        return $this;
    }

    /**
     * Set the long4.
     *
     * @param int $long4 The long4.
     */
    public function setLong4($long4) {
        $this->long4 = $long4;
        return $this;
    }

    /**
     * Set the long5.
     *
     * @param int $long5 The long5.
     */
    public function setLong5($long5) {
        $this->long5 = $long5;
        return $this;
    }

    /**
     * Set the long6.
     *
     * @param int $long6 The long6.
     */
    public function setLong6($long6) {
        $this->long6 = $long6;
        return $this;
    }

    /**
     * Set the long7.
     *
     * @param int $long7 The long7.
     */
    public function setLong7($long7) {
        $this->long7 = $long7;
        return $this;
    }

    /**
     * Set the long8.
     *
     * @param int $long8 The long8.
     */
    public function setLong8($long8) {
        $this->long8 = $long8;
        return $this;
    }

    /**
     * Set the long9.
     *
     * @param int $long9 The long9.
     */
    public function setLong9($long9) {
        $this->long9 = $long9;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string $texte1 The texte1.
     */
    public function setTexte1($texte1) {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte10.
     *
     * @param string $texte10 The texte10.
     */
    public function setTexte10($texte10) {
        $this->texte10 = $texte10;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string $texte2 The texte2.
     */
    public function setTexte2($texte2) {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string $texte3 The texte3.
     */
    public function setTexte3($texte3) {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string $texte4 The texte4.
     */
    public function setTexte4($texte4) {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string $texte5 The texte5.
     */
    public function setTexte5($texte5) {
        $this->texte5 = $texte5;
        return $this;
    }

    /**
     * Set the texte6.
     *
     * @param string $texte6 The texte6.
     */
    public function setTexte6($texte6) {
        $this->texte6 = $texte6;
        return $this;
    }

    /**
     * Set the texte7.
     *
     * @param string $texte7 The texte7.
     */
    public function setTexte7($texte7) {
        $this->texte7 = $texte7;
        return $this;
    }

    /**
     * Set the texte8.
     *
     * @param string $texte8 The texte8.
     */
    public function setTexte8($texte8) {
        $this->texte8 = $texte8;
        return $this;
    }

    /**
     * Set the texte9.
     *
     * @param string $texte9 The texte9.
     */
    public function setTexte9($texte9) {
        $this->texte9 = $texte9;
        return $this;
    }
}
