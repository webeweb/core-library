<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\CriteresLibres;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres libres test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CriteresLibresTest extends AbstractTestCase {

    /**
     * Test setCase1()
     *
     * @return void
     */
    public function testSetCase1(): void {

        $obj = new CriteresLibres();

        $obj->setCase1(true);
        $this->assertTrue($obj->getCase1());
    }

    /**
     * Test setCase10()
     *
     * @return void
     */
    public function testSetCase10(): void {

        $obj = new CriteresLibres();

        $obj->setCase10(true);
        $this->assertTrue($obj->getCase10());
    }

    /**
     * Test setCase11()
     *
     * @return void
     */
    public function testSetCase11(): void {

        $obj = new CriteresLibres();

        $obj->setCase11(true);
        $this->assertTrue($obj->getCase11());
    }

    /**
     * Test setCase12()
     *
     * @return void
     */
    public function testSetCase12(): void {

        $obj = new CriteresLibres();

        $obj->setCase12(true);
        $this->assertTrue($obj->getCase12());
    }

    /**
     * Test setCase13()
     *
     * @return void
     */
    public function testSetCase13(): void {

        $obj = new CriteresLibres();

        $obj->setCase13(true);
        $this->assertTrue($obj->getCase13());
    }

    /**
     * Test setCase14()
     *
     * @return void
     */
    public function testSetCase14(): void {

        $obj = new CriteresLibres();

        $obj->setCase14(true);
        $this->assertTrue($obj->getCase14());
    }

    /**
     * Test setCase15()
     *
     * @return void
     */
    public function testSetCase15(): void {

        $obj = new CriteresLibres();

        $obj->setCase15(true);
        $this->assertTrue($obj->getCase15());
    }

    /**
     * Test setCase16()
     *
     * @return void
     */
    public function testSetCase16(): void {

        $obj = new CriteresLibres();

        $obj->setCase16(true);
        $this->assertTrue($obj->getCase16());
    }

    /**
     * Test setCase17()
     *
     * @return void
     */
    public function testSetCase17(): void {

        $obj = new CriteresLibres();

        $obj->setCase17(true);
        $this->assertTrue($obj->getCase17());
    }

    /**
     * Test setCase18()
     *
     * @return void
     */
    public function testSetCase18(): void {

        $obj = new CriteresLibres();

        $obj->setCase18(true);
        $this->assertTrue($obj->getCase18());
    }

    /**
     * Test setCase19()
     *
     * @return void
     */
    public function testSetCase19(): void {

        $obj = new CriteresLibres();

        $obj->setCase19(true);
        $this->assertTrue($obj->getCase19());
    }

    /**
     * Test setCase2()
     *
     * @return void
     */
    public function testSetCase2(): void {

        $obj = new CriteresLibres();

        $obj->setCase2(true);
        $this->assertTrue($obj->getCase2());
    }

    /**
     * Test setCase20()
     *
     * @return void
     */
    public function testSetCase20(): void {

        $obj = new CriteresLibres();

        $obj->setCase20(true);
        $this->assertTrue($obj->getCase20());
    }

    /**
     * Test setCase3()
     *
     * @return void
     */
    public function testSetCase3(): void {

        $obj = new CriteresLibres();

        $obj->setCase3(true);
        $this->assertTrue($obj->getCase3());
    }

    /**
     * Test setCase4()
     *
     * @return void
     */
    public function testSetCase4(): void {

        $obj = new CriteresLibres();

        $obj->setCase4(true);
        $this->assertTrue($obj->getCase4());
    }

    /**
     * Test setCase5()
     *
     * @return void
     */
    public function testSetCase5(): void {

        $obj = new CriteresLibres();

        $obj->setCase5(true);
        $this->assertTrue($obj->getCase5());
    }

    /**
     * Test setCase6()
     *
     * @return void
     */
    public function testSetCase6(): void {

        $obj = new CriteresLibres();

        $obj->setCase6(true);
        $this->assertTrue($obj->getCase6());
    }

    /**
     * Test setCase7()
     *
     * @return void
     */
    public function testSetCase7(): void {

        $obj = new CriteresLibres();

        $obj->setCase7(true);
        $this->assertTrue($obj->getCase7());
    }

    /**
     * Test setCase8()
     *
     * @return void
     */
    public function testSetCase8(): void {

        $obj = new CriteresLibres();

        $obj->setCase8(true);
        $this->assertTrue($obj->getCase8());
    }

    /**
     * Test setCase9()
     *
     * @return void
     */
    public function testSetCase9(): void {

        $obj = new CriteresLibres();

        $obj->setCase9(true);
        $this->assertTrue($obj->getCase9());
    }

    /**
     * Test setDate1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Test setDate10()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate10(): void {

        // Set a Date/time mock.
        $date10 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate10($date10);
        $this->assertSame($date10, $obj->getDate10());
    }

    /**
     * Test setDate11()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate11(): void {

        // Set a Date/time mock.
        $date11 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate11($date11);
        $this->assertSame($date11, $obj->getDate11());
    }

    /**
     * Test setDate12()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate12(): void {

        // Set a Date/time mock.
        $date12 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate12($date12);
        $this->assertSame($date12, $obj->getDate12());
    }

    /**
     * Test setDate13()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate13(): void {

        // Set a Date/time mock.
        $date13 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate13($date13);
        $this->assertSame($date13, $obj->getDate13());
    }

    /**
     * Test setDate14()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate14(): void {

        // Set a Date/time mock.
        $date14 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate14($date14);
        $this->assertSame($date14, $obj->getDate14());
    }

    /**
     * Test setDate15()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate15(): void {

        // Set a Date/time mock.
        $date15 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate15($date15);
        $this->assertSame($date15, $obj->getDate15());
    }

    /**
     * Test setDate16()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate16(): void {

        // Set a Date/time mock.
        $date16 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate16($date16);
        $this->assertSame($date16, $obj->getDate16());
    }

    /**
     * Test setDate17()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate17(): void {

        // Set a Date/time mock.
        $date17 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate17($date17);
        $this->assertSame($date17, $obj->getDate17());
    }

    /**
     * Test setDate18()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate18(): void {

        // Set a Date/time mock.
        $date18 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate18($date18);
        $this->assertSame($date18, $obj->getDate18());
    }

    /**
     * Test setDate19()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate19(): void {

        // Set a Date/time mock.
        $date19 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate19($date19);
        $this->assertSame($date19, $obj->getDate19());
    }

    /**
     * Test setDate2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Test setDate20()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate20(): void {

        // Set a Date/time mock.
        $date20 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate20($date20);
        $this->assertSame($date20, $obj->getDate20());
    }

    /**
     * Test setDate3()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate3(): void {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Test setDate4()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate4(): void {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Test setDate5()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate5(): void {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Test setDate6()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate6(): void {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Test setDate7()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate7(): void {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Test setDate8()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate8(): void {

        // Set a Date/time mock.
        $date8 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate8($date8);
        $this->assertSame($date8, $obj->getDate8());
    }

    /**
     * Test setDate9()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate9(): void {

        // Set a Date/time mock.
        $date9 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate9($date9);
        $this->assertSame($date9, $obj->getDate9());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CriteresLibres();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setTexte1()
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new CriteresLibres();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Test setTexte10()
     *
     * @return void
     */
    public function testSetTexte10(): void {

        $obj = new CriteresLibres();

        $obj->setTexte10("texte10");
        $this->assertEquals("texte10", $obj->getTexte10());
    }

    /**
     * Test setTexte11()
     *
     * @return void
     */
    public function testSetTexte11(): void {

        $obj = new CriteresLibres();

        $obj->setTexte11("texte11");
        $this->assertEquals("texte11", $obj->getTexte11());
    }

    /**
     * Test setTexte12()
     *
     * @return void
     */
    public function testSetTexte12(): void {

        $obj = new CriteresLibres();

        $obj->setTexte12("texte12");
        $this->assertEquals("texte12", $obj->getTexte12());
    }

    /**
     * Test setTexte13()
     *
     * @return void
     */
    public function testSetTexte13(): void {

        $obj = new CriteresLibres();

        $obj->setTexte13("texte13");
        $this->assertEquals("texte13", $obj->getTexte13());
    }

    /**
     * Test setTexte14()
     *
     * @return void
     */
    public function testSetTexte14(): void {

        $obj = new CriteresLibres();

        $obj->setTexte14("texte14");
        $this->assertEquals("texte14", $obj->getTexte14());
    }

    /**
     * Test setTexte15()
     *
     * @return void
     */
    public function testSetTexte15(): void {

        $obj = new CriteresLibres();

        $obj->setTexte15("texte15");
        $this->assertEquals("texte15", $obj->getTexte15());
    }

    /**
     * Test setTexte16()
     *
     * @return void
     */
    public function testSetTexte16(): void {

        $obj = new CriteresLibres();

        $obj->setTexte16("texte16");
        $this->assertEquals("texte16", $obj->getTexte16());
    }

    /**
     * Test setTexte17()
     *
     * @return void
     */
    public function testSetTexte17(): void {

        $obj = new CriteresLibres();

        $obj->setTexte17("texte17");
        $this->assertEquals("texte17", $obj->getTexte17());
    }

    /**
     * Test setTexte18()
     *
     * @return void
     */
    public function testSetTexte18(): void {

        $obj = new CriteresLibres();

        $obj->setTexte18("texte18");
        $this->assertEquals("texte18", $obj->getTexte18());
    }

    /**
     * Test setTexte19()
     *
     * @return void
     */
    public function testSetTexte19(): void {

        $obj = new CriteresLibres();

        $obj->setTexte19("texte19");
        $this->assertEquals("texte19", $obj->getTexte19());
    }

    /**
     * Test setTexte2()
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new CriteresLibres();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Test setTexte20()
     *
     * @return void
     */
    public function testSetTexte20(): void {

        $obj = new CriteresLibres();

        $obj->setTexte20("texte20");
        $this->assertEquals("texte20", $obj->getTexte20());
    }

    /**
     * Test setTexte3()
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new CriteresLibres();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Test setTexte4()
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new CriteresLibres();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Test setTexte5()
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new CriteresLibres();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Test setTexte6()
     *
     * @return void
     */
    public function testSetTexte6(): void {

        $obj = new CriteresLibres();

        $obj->setTexte6("texte6");
        $this->assertEquals("texte6", $obj->getTexte6());
    }

    /**
     * Test setTexte7()
     *
     * @return void
     */
    public function testSetTexte7(): void {

        $obj = new CriteresLibres();

        $obj->setTexte7("texte7");
        $this->assertEquals("texte7", $obj->getTexte7());
    }

    /**
     * Test setTexte8()
     *
     * @return void
     */
    public function testSetTexte8(): void {

        $obj = new CriteresLibres();

        $obj->setTexte8("texte8");
        $this->assertEquals("texte8", $obj->getTexte8());
    }

    /**
     * Test setTexte9()
     *
     * @return void
     */
    public function testSetTexte9(): void {

        $obj = new CriteresLibres();

        $obj->setTexte9("texte9");
        $this->assertEquals("texte9", $obj->getTexte9());
    }

    /**
     * Test setValeur1()
     *
     * @return void
     */
    public function testSetValeur1(): void {

        $obj = new CriteresLibres();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Test setValeur10()
     *
     * @return void
     */
    public function testSetValeur10(): void {

        $obj = new CriteresLibres();

        $obj->setValeur10(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur10());
    }

    /**
     * Test setValeur11()
     *
     * @return void
     */
    public function testSetValeur11(): void {

        $obj = new CriteresLibres();

        $obj->setValeur11(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur11());
    }

    /**
     * Test setValeur12()
     *
     * @return void
     */
    public function testSetValeur12(): void {

        $obj = new CriteresLibres();

        $obj->setValeur12(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur12());
    }

    /**
     * Test setValeur13()
     *
     * @return void
     */
    public function testSetValeur13(): void {

        $obj = new CriteresLibres();

        $obj->setValeur13(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur13());
    }

    /**
     * Test setValeur14()
     *
     * @return void
     */
    public function testSetValeur14(): void {

        $obj = new CriteresLibres();

        $obj->setValeur14(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur14());
    }

    /**
     * Test setValeur15()
     *
     * @return void
     */
    public function testSetValeur15(): void {

        $obj = new CriteresLibres();

        $obj->setValeur15(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur15());
    }

    /**
     * Test setValeur16()
     *
     * @return void
     */
    public function testSetValeur16(): void {

        $obj = new CriteresLibres();

        $obj->setValeur16(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur16());
    }

    /**
     * Test setValeur17()
     *
     * @return void
     */
    public function testSetValeur17(): void {

        $obj = new CriteresLibres();

        $obj->setValeur17(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur17());
    }

    /**
     * Test setValeur18()
     *
     * @return void
     */
    public function testSetValeur18(): void {

        $obj = new CriteresLibres();

        $obj->setValeur18(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur18());
    }

    /**
     * Test setValeur19()
     *
     * @return void
     */
    public function testSetValeur19(): void {

        $obj = new CriteresLibres();

        $obj->setValeur19(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur19());
    }

    /**
     * Test setValeur2()
     *
     * @return void
     */
    public function testSetValeur2(): void {

        $obj = new CriteresLibres();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }

    /**
     * Test setValeur20()
     *
     * @return void
     */
    public function testSetValeur20(): void {

        $obj = new CriteresLibres();

        $obj->setValeur20(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur20());
    }

    /**
     * Test setValeur3()
     *
     * @return void
     */
    public function testSetValeur3(): void {

        $obj = new CriteresLibres();

        $obj->setValeur3(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur3());
    }

    /**
     * Test setValeur4()
     *
     * @return void
     */
    public function testSetValeur4(): void {

        $obj = new CriteresLibres();

        $obj->setValeur4(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur4());
    }

    /**
     * Test setValeur5()
     *
     * @return void
     */
    public function testSetValeur5(): void {

        $obj = new CriteresLibres();

        $obj->setValeur5(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur5());
    }

    /**
     * Test setValeur6()
     *
     * @return void
     */
    public function testSetValeur6(): void {

        $obj = new CriteresLibres();

        $obj->setValeur6(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur6());
    }

    /**
     * Test setValeur7()
     *
     * @return void
     */
    public function testSetValeur7(): void {

        $obj = new CriteresLibres();

        $obj->setValeur7(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur7());
    }

    /**
     * Test setValeur8()
     *
     * @return void
     */
    public function testSetValeur8(): void {

        $obj = new CriteresLibres();

        $obj->setValeur8(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur8());
    }

    /**
     * Test setValeur9()
     *
     * @return void
     */
    public function testSetValeur9(): void {

        $obj = new CriteresLibres();

        $obj->setValeur9(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur9());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
        $this->assertNull($obj->getCase3());
        $this->assertNull($obj->getCase4());
        $this->assertNull($obj->getCase5());
        $this->assertNull($obj->getCase6());
        $this->assertNull($obj->getCase7());
        $this->assertNull($obj->getCase8());
        $this->assertNull($obj->getCase9());
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
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte10());
        $this->assertNull($obj->getTexte11());
        $this->assertNull($obj->getTexte12());
        $this->assertNull($obj->getTexte13());
        $this->assertNull($obj->getTexte14());
        $this->assertNull($obj->getTexte15());
        $this->assertNull($obj->getTexte16());
        $this->assertNull($obj->getTexte17());
        $this->assertNull($obj->getTexte18());
        $this->assertNull($obj->getTexte19());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte20());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
        $this->assertNull($obj->getTexte6());
        $this->assertNull($obj->getTexte7());
        $this->assertNull($obj->getTexte8());
        $this->assertNull($obj->getTexte9());
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
}
