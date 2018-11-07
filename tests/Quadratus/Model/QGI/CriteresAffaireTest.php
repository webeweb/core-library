<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\CriteresAffaire;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Criteres affaire model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CriteresAffaireTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CriteresAffaire();

		$this->assertNull($obj->getBooleen1());
		$this->assertNull($obj->getBooleen10());
		$this->assertNull($obj->getBooleen2());
		$this->assertNull($obj->getBooleen3());
		$this->assertNull($obj->getBooleen4());
		$this->assertNull($obj->getBooleen5());
		$this->assertNull($obj->getBooleen6());
		$this->assertNull($obj->getBooleen7());
		$this->assertNull($obj->getBooleen8());
		$this->assertNull($obj->getBooleen9());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeRef1());
		$this->assertNull($obj->getCodeRef10());
		$this->assertNull($obj->getCodeRef2());
		$this->assertNull($obj->getCodeRef3());
		$this->assertNull($obj->getCodeRef4());
		$this->assertNull($obj->getCodeRef5());
		$this->assertNull($obj->getCodeRef6());
		$this->assertNull($obj->getCodeRef7());
		$this->assertNull($obj->getCodeRef8());
		$this->assertNull($obj->getCodeRef9());
		$this->assertNull($obj->getDate1());
		$this->assertNull($obj->getDate10());
		$this->assertNull($obj->getDate2());
		$this->assertNull($obj->getDate3());
		$this->assertNull($obj->getDate4());
		$this->assertNull($obj->getDate5());
		$this->assertNull($obj->getDate6());
		$this->assertNull($obj->getDate7());
		$this->assertNull($obj->getDate8());
		$this->assertNull($obj->getDate9());
		$this->assertNull($obj->getDouble1());
		$this->assertNull($obj->getDouble10());
		$this->assertNull($obj->getDouble2());
		$this->assertNull($obj->getDouble3());
		$this->assertNull($obj->getDouble4());
		$this->assertNull($obj->getDouble5());
		$this->assertNull($obj->getDouble6());
		$this->assertNull($obj->getDouble7());
		$this->assertNull($obj->getDouble8());
		$this->assertNull($obj->getDouble9());
		$this->assertNull($obj->getLong1());
		$this->assertNull($obj->getLong10());
		$this->assertNull($obj->getLong2());
		$this->assertNull($obj->getLong3());
		$this->assertNull($obj->getLong4());
		$this->assertNull($obj->getLong5());
		$this->assertNull($obj->getLong6());
		$this->assertNull($obj->getLong7());
		$this->assertNull($obj->getLong8());
		$this->assertNull($obj->getLong9());
		$this->assertNull($obj->getTexte1());
		$this->assertNull($obj->getTexte10());
		$this->assertNull($obj->getTexte2());
		$this->assertNull($obj->getTexte3());
		$this->assertNull($obj->getTexte4());
		$this->assertNull($obj->getTexte5());
		$this->assertNull($obj->getTexte6());
		$this->assertNull($obj->getTexte7());
		$this->assertNull($obj->getTexte8());
		$this->assertNull($obj->getTexte9());
	}

	/**
	 * Tests the setBooleen1() method.
	 *
	 * @return void
	 */
	public function testSetBooleen1() {

		$obj = new CriteresAffaire();

		$obj->setBooleen1(true);
		$this->assertEquals(true, $obj->getBooleen1());
	}

	/**
	 * Tests the setBooleen10() method.
	 *
	 * @return void
	 */
	public function testSetBooleen10() {

		$obj = new CriteresAffaire();

		$obj->setBooleen10(true);
		$this->assertEquals(true, $obj->getBooleen10());
	}

	/**
	 * Tests the setBooleen2() method.
	 *
	 * @return void
	 */
	public function testSetBooleen2() {

		$obj = new CriteresAffaire();

		$obj->setBooleen2(true);
		$this->assertEquals(true, $obj->getBooleen2());
	}

	/**
	 * Tests the setBooleen3() method.
	 *
	 * @return void
	 */
	public function testSetBooleen3() {

		$obj = new CriteresAffaire();

		$obj->setBooleen3(true);
		$this->assertEquals(true, $obj->getBooleen3());
	}

	/**
	 * Tests the setBooleen4() method.
	 *
	 * @return void
	 */
	public function testSetBooleen4() {

		$obj = new CriteresAffaire();

		$obj->setBooleen4(true);
		$this->assertEquals(true, $obj->getBooleen4());
	}

	/**
	 * Tests the setBooleen5() method.
	 *
	 * @return void
	 */
	public function testSetBooleen5() {

		$obj = new CriteresAffaire();

		$obj->setBooleen5(true);
		$this->assertEquals(true, $obj->getBooleen5());
	}

	/**
	 * Tests the setBooleen6() method.
	 *
	 * @return void
	 */
	public function testSetBooleen6() {

		$obj = new CriteresAffaire();

		$obj->setBooleen6(true);
		$this->assertEquals(true, $obj->getBooleen6());
	}

	/**
	 * Tests the setBooleen7() method.
	 *
	 * @return void
	 */
	public function testSetBooleen7() {

		$obj = new CriteresAffaire();

		$obj->setBooleen7(true);
		$this->assertEquals(true, $obj->getBooleen7());
	}

	/**
	 * Tests the setBooleen8() method.
	 *
	 * @return void
	 */
	public function testSetBooleen8() {

		$obj = new CriteresAffaire();

		$obj->setBooleen8(true);
		$this->assertEquals(true, $obj->getBooleen8());
	}

	/**
	 * Tests the setBooleen9() method.
	 *
	 * @return void
	 */
	public function testSetBooleen9() {

		$obj = new CriteresAffaire();

		$obj->setBooleen9(true);
		$this->assertEquals(true, $obj->getBooleen9());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new CriteresAffaire();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeRef1() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef1() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef1("codeRef1");
		$this->assertEquals("codeRef1", $obj->getCodeRef1());
	}

	/**
	 * Tests the setCodeRef10() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef10() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef10("codeRef10");
		$this->assertEquals("codeRef10", $obj->getCodeRef10());
	}

	/**
	 * Tests the setCodeRef2() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef2() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef2("codeRef2");
		$this->assertEquals("codeRef2", $obj->getCodeRef2());
	}

	/**
	 * Tests the setCodeRef3() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef3() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef3("codeRef3");
		$this->assertEquals("codeRef3", $obj->getCodeRef3());
	}

	/**
	 * Tests the setCodeRef4() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef4() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef4("codeRef4");
		$this->assertEquals("codeRef4", $obj->getCodeRef4());
	}

	/**
	 * Tests the setCodeRef5() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef5() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef5("codeRef5");
		$this->assertEquals("codeRef5", $obj->getCodeRef5());
	}

	/**
	 * Tests the setCodeRef6() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef6() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef6("codeRef6");
		$this->assertEquals("codeRef6", $obj->getCodeRef6());
	}

	/**
	 * Tests the setCodeRef7() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef7() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef7("codeRef7");
		$this->assertEquals("codeRef7", $obj->getCodeRef7());
	}

	/**
	 * Tests the setCodeRef8() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef8() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef8("codeRef8");
		$this->assertEquals("codeRef8", $obj->getCodeRef8());
	}

	/**
	 * Tests the setCodeRef9() method.
	 *
	 * @return void
	 */
	public function testSetCodeRef9() {

		$obj = new CriteresAffaire();

		$obj->setCodeRef9("codeRef9");
		$this->assertEquals("codeRef9", $obj->getCodeRef9());
	}

	/**
	 * Tests the setDate1() method.
	 *
	 * @return void
	 */
	public function testSetDate1() {

		$obj = new CriteresAffaire();

		$obj->setDate1(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate1());
	}

	/**
	 * Tests the setDate10() method.
	 *
	 * @return void
	 */
	public function testSetDate10() {

		$obj = new CriteresAffaire();

		$obj->setDate10(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate10());
	}

	/**
	 * Tests the setDate2() method.
	 *
	 * @return void
	 */
	public function testSetDate2() {

		$obj = new CriteresAffaire();

		$obj->setDate2(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate2());
	}

	/**
	 * Tests the setDate3() method.
	 *
	 * @return void
	 */
	public function testSetDate3() {

		$obj = new CriteresAffaire();

		$obj->setDate3(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate3());
	}

	/**
	 * Tests the setDate4() method.
	 *
	 * @return void
	 */
	public function testSetDate4() {

		$obj = new CriteresAffaire();

		$obj->setDate4(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate4());
	}

	/**
	 * Tests the setDate5() method.
	 *
	 * @return void
	 */
	public function testSetDate5() {

		$obj = new CriteresAffaire();

		$obj->setDate5(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate5());
	}

	/**
	 * Tests the setDate6() method.
	 *
	 * @return void
	 */
	public function testSetDate6() {

		$obj = new CriteresAffaire();

		$obj->setDate6(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate6());
	}

	/**
	 * Tests the setDate7() method.
	 *
	 * @return void
	 */
	public function testSetDate7() {

		$obj = new CriteresAffaire();

		$obj->setDate7(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate7());
	}

	/**
	 * Tests the setDate8() method.
	 *
	 * @return void
	 */
	public function testSetDate8() {

		$obj = new CriteresAffaire();

		$obj->setDate8(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate8());
	}

	/**
	 * Tests the setDate9() method.
	 *
	 * @return void
	 */
	public function testSetDate9() {

		$obj = new CriteresAffaire();

		$obj->setDate9(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate9());
	}

	/**
	 * Tests the setDouble1() method.
	 *
	 * @return void
	 */
	public function testSetDouble1() {

		$obj = new CriteresAffaire();

		$obj->setDouble1(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble1());
	}

	/**
	 * Tests the setDouble10() method.
	 *
	 * @return void
	 */
	public function testSetDouble10() {

		$obj = new CriteresAffaire();

		$obj->setDouble10(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble10());
	}

	/**
	 * Tests the setDouble2() method.
	 *
	 * @return void
	 */
	public function testSetDouble2() {

		$obj = new CriteresAffaire();

		$obj->setDouble2(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble2());
	}

	/**
	 * Tests the setDouble3() method.
	 *
	 * @return void
	 */
	public function testSetDouble3() {

		$obj = new CriteresAffaire();

		$obj->setDouble3(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble3());
	}

	/**
	 * Tests the setDouble4() method.
	 *
	 * @return void
	 */
	public function testSetDouble4() {

		$obj = new CriteresAffaire();

		$obj->setDouble4(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble4());
	}

	/**
	 * Tests the setDouble5() method.
	 *
	 * @return void
	 */
	public function testSetDouble5() {

		$obj = new CriteresAffaire();

		$obj->setDouble5(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble5());
	}

	/**
	 * Tests the setDouble6() method.
	 *
	 * @return void
	 */
	public function testSetDouble6() {

		$obj = new CriteresAffaire();

		$obj->setDouble6(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble6());
	}

	/**
	 * Tests the setDouble7() method.
	 *
	 * @return void
	 */
	public function testSetDouble7() {

		$obj = new CriteresAffaire();

		$obj->setDouble7(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble7());
	}

	/**
	 * Tests the setDouble8() method.
	 *
	 * @return void
	 */
	public function testSetDouble8() {

		$obj = new CriteresAffaire();

		$obj->setDouble8(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble8());
	}

	/**
	 * Tests the setDouble9() method.
	 *
	 * @return void
	 */
	public function testSetDouble9() {

		$obj = new CriteresAffaire();

		$obj->setDouble9(10.092018);
		$this->assertEquals(10.092018, $obj->getDouble9());
	}

	/**
	 * Tests the setLong1() method.
	 *
	 * @return void
	 */
	public function testSetLong1() {

		$obj = new CriteresAffaire();

		$obj->setLong1(10);
		$this->assertEquals(10, $obj->getLong1());
	}

	/**
	 * Tests the setLong10() method.
	 *
	 * @return void
	 */
	public function testSetLong10() {

		$obj = new CriteresAffaire();

		$obj->setLong10(10);
		$this->assertEquals(10, $obj->getLong10());
	}

	/**
	 * Tests the setLong2() method.
	 *
	 * @return void
	 */
	public function testSetLong2() {

		$obj = new CriteresAffaire();

		$obj->setLong2(10);
		$this->assertEquals(10, $obj->getLong2());
	}

	/**
	 * Tests the setLong3() method.
	 *
	 * @return void
	 */
	public function testSetLong3() {

		$obj = new CriteresAffaire();

		$obj->setLong3(10);
		$this->assertEquals(10, $obj->getLong3());
	}

	/**
	 * Tests the setLong4() method.
	 *
	 * @return void
	 */
	public function testSetLong4() {

		$obj = new CriteresAffaire();

		$obj->setLong4(10);
		$this->assertEquals(10, $obj->getLong4());
	}

	/**
	 * Tests the setLong5() method.
	 *
	 * @return void
	 */
	public function testSetLong5() {

		$obj = new CriteresAffaire();

		$obj->setLong5(10);
		$this->assertEquals(10, $obj->getLong5());
	}

	/**
	 * Tests the setLong6() method.
	 *
	 * @return void
	 */
	public function testSetLong6() {

		$obj = new CriteresAffaire();

		$obj->setLong6(10);
		$this->assertEquals(10, $obj->getLong6());
	}

	/**
	 * Tests the setLong7() method.
	 *
	 * @return void
	 */
	public function testSetLong7() {

		$obj = new CriteresAffaire();

		$obj->setLong7(10);
		$this->assertEquals(10, $obj->getLong7());
	}

	/**
	 * Tests the setLong8() method.
	 *
	 * @return void
	 */
	public function testSetLong8() {

		$obj = new CriteresAffaire();

		$obj->setLong8(10);
		$this->assertEquals(10, $obj->getLong8());
	}

	/**
	 * Tests the setLong9() method.
	 *
	 * @return void
	 */
	public function testSetLong9() {

		$obj = new CriteresAffaire();

		$obj->setLong9(10);
		$this->assertEquals(10, $obj->getLong9());
	}

	/**
	 * Tests the setTexte1() method.
	 *
	 * @return void
	 */
	public function testSetTexte1() {

		$obj = new CriteresAffaire();

		$obj->setTexte1("texte1");
		$this->assertEquals("texte1", $obj->getTexte1());
	}

	/**
	 * Tests the setTexte10() method.
	 *
	 * @return void
	 */
	public function testSetTexte10() {

		$obj = new CriteresAffaire();

		$obj->setTexte10("texte10");
		$this->assertEquals("texte10", $obj->getTexte10());
	}

	/**
	 * Tests the setTexte2() method.
	 *
	 * @return void
	 */
	public function testSetTexte2() {

		$obj = new CriteresAffaire();

		$obj->setTexte2("texte2");
		$this->assertEquals("texte2", $obj->getTexte2());
	}

	/**
	 * Tests the setTexte3() method.
	 *
	 * @return void
	 */
	public function testSetTexte3() {

		$obj = new CriteresAffaire();

		$obj->setTexte3("texte3");
		$this->assertEquals("texte3", $obj->getTexte3());
	}

	/**
	 * Tests the setTexte4() method.
	 *
	 * @return void
	 */
	public function testSetTexte4() {

		$obj = new CriteresAffaire();

		$obj->setTexte4("texte4");
		$this->assertEquals("texte4", $obj->getTexte4());
	}

	/**
	 * Tests the setTexte5() method.
	 *
	 * @return void
	 */
	public function testSetTexte5() {

		$obj = new CriteresAffaire();

		$obj->setTexte5("texte5");
		$this->assertEquals("texte5", $obj->getTexte5());
	}

	/**
	 * Tests the setTexte6() method.
	 *
	 * @return void
	 */
	public function testSetTexte6() {

		$obj = new CriteresAffaire();

		$obj->setTexte6("texte6");
		$this->assertEquals("texte6", $obj->getTexte6());
	}

	/**
	 * Tests the setTexte7() method.
	 *
	 * @return void
	 */
	public function testSetTexte7() {

		$obj = new CriteresAffaire();

		$obj->setTexte7("texte7");
		$this->assertEquals("texte7", $obj->getTexte7());
	}

	/**
	 * Tests the setTexte8() method.
	 *
	 * @return void
	 */
	public function testSetTexte8() {

		$obj = new CriteresAffaire();

		$obj->setTexte8("texte8");
		$this->assertEquals("texte8", $obj->getTexte8());
	}

	/**
	 * Tests the setTexte9() method.
	 *
	 * @return void
	 */
	public function testSetTexte9() {

		$obj = new CriteresAffaire();

		$obj->setTexte9("texte9");
		$this->assertEquals("texte9", $obj->getTexte9());
	}

}
