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
use WBW\Library\Core\Quadratus\Model\QGI\CriteresLibres;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Criteres libres model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class CriteresLibresTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CriteresLibres();

		$this->assertNull($obj->getCase1());
		$this->assertNull($obj->getCase10());
		$this->assertNull($obj->getCase11());
		$this->assertNull($obj->getCase12());
		$this->assertNull($obj->getCase13());
		$this->assertNull($obj->getCase14());
		$this->assertNull($obj->getCase15());
		$this->assertNull($obj->getCase16());
		$this->assertNull($obj->getCase17());
		$this->assertNull($obj->getCase18());
		$this->assertNull($obj->getCase19());
		$this->assertNull($obj->getCase2());
		$this->assertNull($obj->getCase20());
		$this->assertNull($obj->getCase21());
		$this->assertNull($obj->getCase22());
		$this->assertNull($obj->getCase23());
		$this->assertNull($obj->getCase24());
		$this->assertNull($obj->getCase25());
		$this->assertNull($obj->getCase26());
		$this->assertNull($obj->getCase27());
		$this->assertNull($obj->getCase28());
		$this->assertNull($obj->getCase29());
		$this->assertNull($obj->getCase3());
		$this->assertNull($obj->getCase30());
		$this->assertNull($obj->getCase31());
		$this->assertNull($obj->getCase32());
		$this->assertNull($obj->getCase33());
		$this->assertNull($obj->getCase34());
		$this->assertNull($obj->getCase35());
		$this->assertNull($obj->getCase36());
		$this->assertNull($obj->getCase37());
		$this->assertNull($obj->getCase38());
		$this->assertNull($obj->getCase39());
		$this->assertNull($obj->getCase4());
		$this->assertNull($obj->getCase40());
		$this->assertNull($obj->getCase41());
		$this->assertNull($obj->getCase42());
		$this->assertNull($obj->getCase43());
		$this->assertNull($obj->getCase44());
		$this->assertNull($obj->getCase45());
		$this->assertNull($obj->getCase46());
		$this->assertNull($obj->getCase47());
		$this->assertNull($obj->getCase48());
		$this->assertNull($obj->getCase49());
		$this->assertNull($obj->getCase5());
		$this->assertNull($obj->getCase50());
		$this->assertNull($obj->getCase6());
		$this->assertNull($obj->getCase7());
		$this->assertNull($obj->getCase8());
		$this->assertNull($obj->getCase9());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getDate1());
		$this->assertNull($obj->getDate10());
		$this->assertNull($obj->getDate11());
		$this->assertNull($obj->getDate12());
		$this->assertNull($obj->getDate13());
		$this->assertNull($obj->getDate14());
		$this->assertNull($obj->getDate15());
		$this->assertNull($obj->getDate16());
		$this->assertNull($obj->getDate17());
		$this->assertNull($obj->getDate18());
		$this->assertNull($obj->getDate19());
		$this->assertNull($obj->getDate2());
		$this->assertNull($obj->getDate20());
		$this->assertNull($obj->getDate3());
		$this->assertNull($obj->getDate4());
		$this->assertNull($obj->getDate5());
		$this->assertNull($obj->getDate6());
		$this->assertNull($obj->getDate7());
		$this->assertNull($obj->getDate8());
		$this->assertNull($obj->getDate9());
		$this->assertNull($obj->getTexteA());
		$this->assertNull($obj->getTexteB());
		$this->assertNull($obj->getTexteC());
		$this->assertNull($obj->getTexteD());
		$this->assertNull($obj->getTexteE());
		$this->assertNull($obj->getTexteF());
		$this->assertNull($obj->getTexteG());
		$this->assertNull($obj->getTexteH());
		$this->assertNull($obj->getTexteI());
		$this->assertNull($obj->getTexteJ());
		$this->assertNull($obj->getTexteK());
		$this->assertNull($obj->getTexteL());
		$this->assertNull($obj->getTexteM());
		$this->assertNull($obj->getTexteN());
		$this->assertNull($obj->getTexteO());
		$this->assertNull($obj->getTexteP());
		$this->assertNull($obj->getTexteQ());
		$this->assertNull($obj->getTexteR());
		$this->assertNull($obj->getTexteS());
		$this->assertNull($obj->getTexteT());
		$this->assertNull($obj->getValeur1());
		$this->assertNull($obj->getValeur10());
		$this->assertNull($obj->getValeur11());
		$this->assertNull($obj->getValeur12());
		$this->assertNull($obj->getValeur13());
		$this->assertNull($obj->getValeur14());
		$this->assertNull($obj->getValeur15());
		$this->assertNull($obj->getValeur16());
		$this->assertNull($obj->getValeur17());
		$this->assertNull($obj->getValeur18());
		$this->assertNull($obj->getValeur19());
		$this->assertNull($obj->getValeur2());
		$this->assertNull($obj->getValeur20());
		$this->assertNull($obj->getValeur3());
		$this->assertNull($obj->getValeur4());
		$this->assertNull($obj->getValeur5());
		$this->assertNull($obj->getValeur6());
		$this->assertNull($obj->getValeur7());
		$this->assertNull($obj->getValeur8());
		$this->assertNull($obj->getValeur9());
	}

	/**
	 * Tests the setCase1() method.
	 *
	 * @return void
	 */
	public function testSetCase1() {

		$obj = new CriteresLibres();

		$obj->setCase1(true);
		$this->assertEquals(true, $obj->getCase1());
	}

	/**
	 * Tests the setCase10() method.
	 *
	 * @return void
	 */
	public function testSetCase10() {

		$obj = new CriteresLibres();

		$obj->setCase10(true);
		$this->assertEquals(true, $obj->getCase10());
	}

	/**
	 * Tests the setCase11() method.
	 *
	 * @return void
	 */
	public function testSetCase11() {

		$obj = new CriteresLibres();

		$obj->setCase11(true);
		$this->assertEquals(true, $obj->getCase11());
	}

	/**
	 * Tests the setCase12() method.
	 *
	 * @return void
	 */
	public function testSetCase12() {

		$obj = new CriteresLibres();

		$obj->setCase12(true);
		$this->assertEquals(true, $obj->getCase12());
	}

	/**
	 * Tests the setCase13() method.
	 *
	 * @return void
	 */
	public function testSetCase13() {

		$obj = new CriteresLibres();

		$obj->setCase13(true);
		$this->assertEquals(true, $obj->getCase13());
	}

	/**
	 * Tests the setCase14() method.
	 *
	 * @return void
	 */
	public function testSetCase14() {

		$obj = new CriteresLibres();

		$obj->setCase14(true);
		$this->assertEquals(true, $obj->getCase14());
	}

	/**
	 * Tests the setCase15() method.
	 *
	 * @return void
	 */
	public function testSetCase15() {

		$obj = new CriteresLibres();

		$obj->setCase15(true);
		$this->assertEquals(true, $obj->getCase15());
	}

	/**
	 * Tests the setCase16() method.
	 *
	 * @return void
	 */
	public function testSetCase16() {

		$obj = new CriteresLibres();

		$obj->setCase16(true);
		$this->assertEquals(true, $obj->getCase16());
	}

	/**
	 * Tests the setCase17() method.
	 *
	 * @return void
	 */
	public function testSetCase17() {

		$obj = new CriteresLibres();

		$obj->setCase17(true);
		$this->assertEquals(true, $obj->getCase17());
	}

	/**
	 * Tests the setCase18() method.
	 *
	 * @return void
	 */
	public function testSetCase18() {

		$obj = new CriteresLibres();

		$obj->setCase18(true);
		$this->assertEquals(true, $obj->getCase18());
	}

	/**
	 * Tests the setCase19() method.
	 *
	 * @return void
	 */
	public function testSetCase19() {

		$obj = new CriteresLibres();

		$obj->setCase19(true);
		$this->assertEquals(true, $obj->getCase19());
	}

	/**
	 * Tests the setCase2() method.
	 *
	 * @return void
	 */
	public function testSetCase2() {

		$obj = new CriteresLibres();

		$obj->setCase2(true);
		$this->assertEquals(true, $obj->getCase2());
	}

	/**
	 * Tests the setCase20() method.
	 *
	 * @return void
	 */
	public function testSetCase20() {

		$obj = new CriteresLibres();

		$obj->setCase20(true);
		$this->assertEquals(true, $obj->getCase20());
	}

	/**
	 * Tests the setCase21() method.
	 *
	 * @return void
	 */
	public function testSetCase21() {

		$obj = new CriteresLibres();

		$obj->setCase21(true);
		$this->assertEquals(true, $obj->getCase21());
	}

	/**
	 * Tests the setCase22() method.
	 *
	 * @return void
	 */
	public function testSetCase22() {

		$obj = new CriteresLibres();

		$obj->setCase22(true);
		$this->assertEquals(true, $obj->getCase22());
	}

	/**
	 * Tests the setCase23() method.
	 *
	 * @return void
	 */
	public function testSetCase23() {

		$obj = new CriteresLibres();

		$obj->setCase23(true);
		$this->assertEquals(true, $obj->getCase23());
	}

	/**
	 * Tests the setCase24() method.
	 *
	 * @return void
	 */
	public function testSetCase24() {

		$obj = new CriteresLibres();

		$obj->setCase24(true);
		$this->assertEquals(true, $obj->getCase24());
	}

	/**
	 * Tests the setCase25() method.
	 *
	 * @return void
	 */
	public function testSetCase25() {

		$obj = new CriteresLibres();

		$obj->setCase25(true);
		$this->assertEquals(true, $obj->getCase25());
	}

	/**
	 * Tests the setCase26() method.
	 *
	 * @return void
	 */
	public function testSetCase26() {

		$obj = new CriteresLibres();

		$obj->setCase26(true);
		$this->assertEquals(true, $obj->getCase26());
	}

	/**
	 * Tests the setCase27() method.
	 *
	 * @return void
	 */
	public function testSetCase27() {

		$obj = new CriteresLibres();

		$obj->setCase27(true);
		$this->assertEquals(true, $obj->getCase27());
	}

	/**
	 * Tests the setCase28() method.
	 *
	 * @return void
	 */
	public function testSetCase28() {

		$obj = new CriteresLibres();

		$obj->setCase28(true);
		$this->assertEquals(true, $obj->getCase28());
	}

	/**
	 * Tests the setCase29() method.
	 *
	 * @return void
	 */
	public function testSetCase29() {

		$obj = new CriteresLibres();

		$obj->setCase29(true);
		$this->assertEquals(true, $obj->getCase29());
	}

	/**
	 * Tests the setCase3() method.
	 *
	 * @return void
	 */
	public function testSetCase3() {

		$obj = new CriteresLibres();

		$obj->setCase3(true);
		$this->assertEquals(true, $obj->getCase3());
	}

	/**
	 * Tests the setCase30() method.
	 *
	 * @return void
	 */
	public function testSetCase30() {

		$obj = new CriteresLibres();

		$obj->setCase30(true);
		$this->assertEquals(true, $obj->getCase30());
	}

	/**
	 * Tests the setCase31() method.
	 *
	 * @return void
	 */
	public function testSetCase31() {

		$obj = new CriteresLibres();

		$obj->setCase31(true);
		$this->assertEquals(true, $obj->getCase31());
	}

	/**
	 * Tests the setCase32() method.
	 *
	 * @return void
	 */
	public function testSetCase32() {

		$obj = new CriteresLibres();

		$obj->setCase32(true);
		$this->assertEquals(true, $obj->getCase32());
	}

	/**
	 * Tests the setCase33() method.
	 *
	 * @return void
	 */
	public function testSetCase33() {

		$obj = new CriteresLibres();

		$obj->setCase33(true);
		$this->assertEquals(true, $obj->getCase33());
	}

	/**
	 * Tests the setCase34() method.
	 *
	 * @return void
	 */
	public function testSetCase34() {

		$obj = new CriteresLibres();

		$obj->setCase34(true);
		$this->assertEquals(true, $obj->getCase34());
	}

	/**
	 * Tests the setCase35() method.
	 *
	 * @return void
	 */
	public function testSetCase35() {

		$obj = new CriteresLibres();

		$obj->setCase35(true);
		$this->assertEquals(true, $obj->getCase35());
	}

	/**
	 * Tests the setCase36() method.
	 *
	 * @return void
	 */
	public function testSetCase36() {

		$obj = new CriteresLibres();

		$obj->setCase36(true);
		$this->assertEquals(true, $obj->getCase36());
	}

	/**
	 * Tests the setCase37() method.
	 *
	 * @return void
	 */
	public function testSetCase37() {

		$obj = new CriteresLibres();

		$obj->setCase37(true);
		$this->assertEquals(true, $obj->getCase37());
	}

	/**
	 * Tests the setCase38() method.
	 *
	 * @return void
	 */
	public function testSetCase38() {

		$obj = new CriteresLibres();

		$obj->setCase38(true);
		$this->assertEquals(true, $obj->getCase38());
	}

	/**
	 * Tests the setCase39() method.
	 *
	 * @return void
	 */
	public function testSetCase39() {

		$obj = new CriteresLibres();

		$obj->setCase39(true);
		$this->assertEquals(true, $obj->getCase39());
	}

	/**
	 * Tests the setCase4() method.
	 *
	 * @return void
	 */
	public function testSetCase4() {

		$obj = new CriteresLibres();

		$obj->setCase4(true);
		$this->assertEquals(true, $obj->getCase4());
	}

	/**
	 * Tests the setCase40() method.
	 *
	 * @return void
	 */
	public function testSetCase40() {

		$obj = new CriteresLibres();

		$obj->setCase40(true);
		$this->assertEquals(true, $obj->getCase40());
	}

	/**
	 * Tests the setCase41() method.
	 *
	 * @return void
	 */
	public function testSetCase41() {

		$obj = new CriteresLibres();

		$obj->setCase41(true);
		$this->assertEquals(true, $obj->getCase41());
	}

	/**
	 * Tests the setCase42() method.
	 *
	 * @return void
	 */
	public function testSetCase42() {

		$obj = new CriteresLibres();

		$obj->setCase42(true);
		$this->assertEquals(true, $obj->getCase42());
	}

	/**
	 * Tests the setCase43() method.
	 *
	 * @return void
	 */
	public function testSetCase43() {

		$obj = new CriteresLibres();

		$obj->setCase43(true);
		$this->assertEquals(true, $obj->getCase43());
	}

	/**
	 * Tests the setCase44() method.
	 *
	 * @return void
	 */
	public function testSetCase44() {

		$obj = new CriteresLibres();

		$obj->setCase44(true);
		$this->assertEquals(true, $obj->getCase44());
	}

	/**
	 * Tests the setCase45() method.
	 *
	 * @return void
	 */
	public function testSetCase45() {

		$obj = new CriteresLibres();

		$obj->setCase45(true);
		$this->assertEquals(true, $obj->getCase45());
	}

	/**
	 * Tests the setCase46() method.
	 *
	 * @return void
	 */
	public function testSetCase46() {

		$obj = new CriteresLibres();

		$obj->setCase46(true);
		$this->assertEquals(true, $obj->getCase46());
	}

	/**
	 * Tests the setCase47() method.
	 *
	 * @return void
	 */
	public function testSetCase47() {

		$obj = new CriteresLibres();

		$obj->setCase47(true);
		$this->assertEquals(true, $obj->getCase47());
	}

	/**
	 * Tests the setCase48() method.
	 *
	 * @return void
	 */
	public function testSetCase48() {

		$obj = new CriteresLibres();

		$obj->setCase48(true);
		$this->assertEquals(true, $obj->getCase48());
	}

	/**
	 * Tests the setCase49() method.
	 *
	 * @return void
	 */
	public function testSetCase49() {

		$obj = new CriteresLibres();

		$obj->setCase49(true);
		$this->assertEquals(true, $obj->getCase49());
	}

	/**
	 * Tests the setCase5() method.
	 *
	 * @return void
	 */
	public function testSetCase5() {

		$obj = new CriteresLibres();

		$obj->setCase5(true);
		$this->assertEquals(true, $obj->getCase5());
	}

	/**
	 * Tests the setCase50() method.
	 *
	 * @return void
	 */
	public function testSetCase50() {

		$obj = new CriteresLibres();

		$obj->setCase50(true);
		$this->assertEquals(true, $obj->getCase50());
	}

	/**
	 * Tests the setCase6() method.
	 *
	 * @return void
	 */
	public function testSetCase6() {

		$obj = new CriteresLibres();

		$obj->setCase6(true);
		$this->assertEquals(true, $obj->getCase6());
	}

	/**
	 * Tests the setCase7() method.
	 *
	 * @return void
	 */
	public function testSetCase7() {

		$obj = new CriteresLibres();

		$obj->setCase7(true);
		$this->assertEquals(true, $obj->getCase7());
	}

	/**
	 * Tests the setCase8() method.
	 *
	 * @return void
	 */
	public function testSetCase8() {

		$obj = new CriteresLibres();

		$obj->setCase8(true);
		$this->assertEquals(true, $obj->getCase8());
	}

	/**
	 * Tests the setCase9() method.
	 *
	 * @return void
	 */
	public function testSetCase9() {

		$obj = new CriteresLibres();

		$obj->setCase9(true);
		$this->assertEquals(true, $obj->getCase9());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new CriteresLibres();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setDate1() method.
	 *
	 * @return void
	 */
	public function testSetDate1() {

		$obj = new CriteresLibres();

		$obj->setDate1(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate1());
	}

	/**
	 * Tests the setDate10() method.
	 *
	 * @return void
	 */
	public function testSetDate10() {

		$obj = new CriteresLibres();

		$obj->setDate10(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate10());
	}

	/**
	 * Tests the setDate11() method.
	 *
	 * @return void
	 */
	public function testSetDate11() {

		$obj = new CriteresLibres();

		$obj->setDate11(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate11());
	}

	/**
	 * Tests the setDate12() method.
	 *
	 * @return void
	 */
	public function testSetDate12() {

		$obj = new CriteresLibres();

		$obj->setDate12(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate12());
	}

	/**
	 * Tests the setDate13() method.
	 *
	 * @return void
	 */
	public function testSetDate13() {

		$obj = new CriteresLibres();

		$obj->setDate13(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate13());
	}

	/**
	 * Tests the setDate14() method.
	 *
	 * @return void
	 */
	public function testSetDate14() {

		$obj = new CriteresLibres();

		$obj->setDate14(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate14());
	}

	/**
	 * Tests the setDate15() method.
	 *
	 * @return void
	 */
	public function testSetDate15() {

		$obj = new CriteresLibres();

		$obj->setDate15(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate15());
	}

	/**
	 * Tests the setDate16() method.
	 *
	 * @return void
	 */
	public function testSetDate16() {

		$obj = new CriteresLibres();

		$obj->setDate16(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate16());
	}

	/**
	 * Tests the setDate17() method.
	 *
	 * @return void
	 */
	public function testSetDate17() {

		$obj = new CriteresLibres();

		$obj->setDate17(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate17());
	}

	/**
	 * Tests the setDate18() method.
	 *
	 * @return void
	 */
	public function testSetDate18() {

		$obj = new CriteresLibres();

		$obj->setDate18(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate18());
	}

	/**
	 * Tests the setDate19() method.
	 *
	 * @return void
	 */
	public function testSetDate19() {

		$obj = new CriteresLibres();

		$obj->setDate19(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate19());
	}

	/**
	 * Tests the setDate2() method.
	 *
	 * @return void
	 */
	public function testSetDate2() {

		$obj = new CriteresLibres();

		$obj->setDate2(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate2());
	}

	/**
	 * Tests the setDate20() method.
	 *
	 * @return void
	 */
	public function testSetDate20() {

		$obj = new CriteresLibres();

		$obj->setDate20(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate20());
	}

	/**
	 * Tests the setDate3() method.
	 *
	 * @return void
	 */
	public function testSetDate3() {

		$obj = new CriteresLibres();

		$obj->setDate3(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate3());
	}

	/**
	 * Tests the setDate4() method.
	 *
	 * @return void
	 */
	public function testSetDate4() {

		$obj = new CriteresLibres();

		$obj->setDate4(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate4());
	}

	/**
	 * Tests the setDate5() method.
	 *
	 * @return void
	 */
	public function testSetDate5() {

		$obj = new CriteresLibres();

		$obj->setDate5(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate5());
	}

	/**
	 * Tests the setDate6() method.
	 *
	 * @return void
	 */
	public function testSetDate6() {

		$obj = new CriteresLibres();

		$obj->setDate6(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate6());
	}

	/**
	 * Tests the setDate7() method.
	 *
	 * @return void
	 */
	public function testSetDate7() {

		$obj = new CriteresLibres();

		$obj->setDate7(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate7());
	}

	/**
	 * Tests the setDate8() method.
	 *
	 * @return void
	 */
	public function testSetDate8() {

		$obj = new CriteresLibres();

		$obj->setDate8(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate8());
	}

	/**
	 * Tests the setDate9() method.
	 *
	 * @return void
	 */
	public function testSetDate9() {

		$obj = new CriteresLibres();

		$obj->setDate9(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate9());
	}

	/**
	 * Tests the setTexteA() method.
	 *
	 * @return void
	 */
	public function testSetTexteA() {

		$obj = new CriteresLibres();

		$obj->setTexteA("texteA");
		$this->assertEquals("texteA", $obj->getTexteA());
	}

	/**
	 * Tests the setTexteB() method.
	 *
	 * @return void
	 */
	public function testSetTexteB() {

		$obj = new CriteresLibres();

		$obj->setTexteB("texteB");
		$this->assertEquals("texteB", $obj->getTexteB());
	}

	/**
	 * Tests the setTexteC() method.
	 *
	 * @return void
	 */
	public function testSetTexteC() {

		$obj = new CriteresLibres();

		$obj->setTexteC("texteC");
		$this->assertEquals("texteC", $obj->getTexteC());
	}

	/**
	 * Tests the setTexteD() method.
	 *
	 * @return void
	 */
	public function testSetTexteD() {

		$obj = new CriteresLibres();

		$obj->setTexteD("texteD");
		$this->assertEquals("texteD", $obj->getTexteD());
	}

	/**
	 * Tests the setTexteE() method.
	 *
	 * @return void
	 */
	public function testSetTexteE() {

		$obj = new CriteresLibres();

		$obj->setTexteE("texteE");
		$this->assertEquals("texteE", $obj->getTexteE());
	}

	/**
	 * Tests the setTexteF() method.
	 *
	 * @return void
	 */
	public function testSetTexteF() {

		$obj = new CriteresLibres();

		$obj->setTexteF("texteF");
		$this->assertEquals("texteF", $obj->getTexteF());
	}

	/**
	 * Tests the setTexteG() method.
	 *
	 * @return void
	 */
	public function testSetTexteG() {

		$obj = new CriteresLibres();

		$obj->setTexteG("texteG");
		$this->assertEquals("texteG", $obj->getTexteG());
	}

	/**
	 * Tests the setTexteH() method.
	 *
	 * @return void
	 */
	public function testSetTexteH() {

		$obj = new CriteresLibres();

		$obj->setTexteH("texteH");
		$this->assertEquals("texteH", $obj->getTexteH());
	}

	/**
	 * Tests the setTexteI() method.
	 *
	 * @return void
	 */
	public function testSetTexteI() {

		$obj = new CriteresLibres();

		$obj->setTexteI("texteI");
		$this->assertEquals("texteI", $obj->getTexteI());
	}

	/**
	 * Tests the setTexteJ() method.
	 *
	 * @return void
	 */
	public function testSetTexteJ() {

		$obj = new CriteresLibres();

		$obj->setTexteJ("texteJ");
		$this->assertEquals("texteJ", $obj->getTexteJ());
	}

	/**
	 * Tests the setTexteK() method.
	 *
	 * @return void
	 */
	public function testSetTexteK() {

		$obj = new CriteresLibres();

		$obj->setTexteK("texteK");
		$this->assertEquals("texteK", $obj->getTexteK());
	}

	/**
	 * Tests the setTexteL() method.
	 *
	 * @return void
	 */
	public function testSetTexteL() {

		$obj = new CriteresLibres();

		$obj->setTexteL("texteL");
		$this->assertEquals("texteL", $obj->getTexteL());
	}

	/**
	 * Tests the setTexteM() method.
	 *
	 * @return void
	 */
	public function testSetTexteM() {

		$obj = new CriteresLibres();

		$obj->setTexteM("texteM");
		$this->assertEquals("texteM", $obj->getTexteM());
	}

	/**
	 * Tests the setTexteN() method.
	 *
	 * @return void
	 */
	public function testSetTexteN() {

		$obj = new CriteresLibres();

		$obj->setTexteN("texteN");
		$this->assertEquals("texteN", $obj->getTexteN());
	}

	/**
	 * Tests the setTexteO() method.
	 *
	 * @return void
	 */
	public function testSetTexteO() {

		$obj = new CriteresLibres();

		$obj->setTexteO("texteO");
		$this->assertEquals("texteO", $obj->getTexteO());
	}

	/**
	 * Tests the setTexteP() method.
	 *
	 * @return void
	 */
	public function testSetTexteP() {

		$obj = new CriteresLibres();

		$obj->setTexteP("texteP");
		$this->assertEquals("texteP", $obj->getTexteP());
	}

	/**
	 * Tests the setTexteQ() method.
	 *
	 * @return void
	 */
	public function testSetTexteQ() {

		$obj = new CriteresLibres();

		$obj->setTexteQ("texteQ");
		$this->assertEquals("texteQ", $obj->getTexteQ());
	}

	/**
	 * Tests the setTexteR() method.
	 *
	 * @return void
	 */
	public function testSetTexteR() {

		$obj = new CriteresLibres();

		$obj->setTexteR("texteR");
		$this->assertEquals("texteR", $obj->getTexteR());
	}

	/**
	 * Tests the setTexteS() method.
	 *
	 * @return void
	 */
	public function testSetTexteS() {

		$obj = new CriteresLibres();

		$obj->setTexteS("texteS");
		$this->assertEquals("texteS", $obj->getTexteS());
	}

	/**
	 * Tests the setTexteT() method.
	 *
	 * @return void
	 */
	public function testSetTexteT() {

		$obj = new CriteresLibres();

		$obj->setTexteT("texteT");
		$this->assertEquals("texteT", $obj->getTexteT());
	}

	/**
	 * Tests the setValeur1() method.
	 *
	 * @return void
	 */
	public function testSetValeur1() {

		$obj = new CriteresLibres();

		$obj->setValeur1(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur1());
	}

	/**
	 * Tests the setValeur10() method.
	 *
	 * @return void
	 */
	public function testSetValeur10() {

		$obj = new CriteresLibres();

		$obj->setValeur10(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur10());
	}

	/**
	 * Tests the setValeur11() method.
	 *
	 * @return void
	 */
	public function testSetValeur11() {

		$obj = new CriteresLibres();

		$obj->setValeur11(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur11());
	}

	/**
	 * Tests the setValeur12() method.
	 *
	 * @return void
	 */
	public function testSetValeur12() {

		$obj = new CriteresLibres();

		$obj->setValeur12(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur12());
	}

	/**
	 * Tests the setValeur13() method.
	 *
	 * @return void
	 */
	public function testSetValeur13() {

		$obj = new CriteresLibres();

		$obj->setValeur13(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur13());
	}

	/**
	 * Tests the setValeur14() method.
	 *
	 * @return void
	 */
	public function testSetValeur14() {

		$obj = new CriteresLibres();

		$obj->setValeur14(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur14());
	}

	/**
	 * Tests the setValeur15() method.
	 *
	 * @return void
	 */
	public function testSetValeur15() {

		$obj = new CriteresLibres();

		$obj->setValeur15(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur15());
	}

	/**
	 * Tests the setValeur16() method.
	 *
	 * @return void
	 */
	public function testSetValeur16() {

		$obj = new CriteresLibres();

		$obj->setValeur16(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur16());
	}

	/**
	 * Tests the setValeur17() method.
	 *
	 * @return void
	 */
	public function testSetValeur17() {

		$obj = new CriteresLibres();

		$obj->setValeur17(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur17());
	}

	/**
	 * Tests the setValeur18() method.
	 *
	 * @return void
	 */
	public function testSetValeur18() {

		$obj = new CriteresLibres();

		$obj->setValeur18(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur18());
	}

	/**
	 * Tests the setValeur19() method.
	 *
	 * @return void
	 */
	public function testSetValeur19() {

		$obj = new CriteresLibres();

		$obj->setValeur19(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur19());
	}

	/**
	 * Tests the setValeur2() method.
	 *
	 * @return void
	 */
	public function testSetValeur2() {

		$obj = new CriteresLibres();

		$obj->setValeur2(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur2());
	}

	/**
	 * Tests the setValeur20() method.
	 *
	 * @return void
	 */
	public function testSetValeur20() {

		$obj = new CriteresLibres();

		$obj->setValeur20(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur20());
	}

	/**
	 * Tests the setValeur3() method.
	 *
	 * @return void
	 */
	public function testSetValeur3() {

		$obj = new CriteresLibres();

		$obj->setValeur3(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur3());
	}

	/**
	 * Tests the setValeur4() method.
	 *
	 * @return void
	 */
	public function testSetValeur4() {

		$obj = new CriteresLibres();

		$obj->setValeur4(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur4());
	}

	/**
	 * Tests the setValeur5() method.
	 *
	 * @return void
	 */
	public function testSetValeur5() {

		$obj = new CriteresLibres();

		$obj->setValeur5(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur5());
	}

	/**
	 * Tests the setValeur6() method.
	 *
	 * @return void
	 */
	public function testSetValeur6() {

		$obj = new CriteresLibres();

		$obj->setValeur6(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur6());
	}

	/**
	 * Tests the setValeur7() method.
	 *
	 * @return void
	 */
	public function testSetValeur7() {

		$obj = new CriteresLibres();

		$obj->setValeur7(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur7());
	}

	/**
	 * Tests the setValeur8() method.
	 *
	 * @return void
	 */
	public function testSetValeur8() {

		$obj = new CriteresLibres();

		$obj->setValeur8(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur8());
	}

	/**
	 * Tests the setValeur9() method.
	 *
	 * @return void
	 */
	public function testSetValeur9() {

		$obj = new CriteresLibres();

		$obj->setValeur9(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur9());
	}

}
