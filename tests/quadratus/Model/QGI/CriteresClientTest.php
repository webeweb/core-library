<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\CriteresClient;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CriteresClientTest extends AbstractTestCase {

    /**
     * Tests the setBooleen1() method.
     *
     * @return void
     */
    public function testSetBooleen1(): void {

        $obj = new CriteresClient();

        $obj->setBooleen1(true);
        $this->assertEquals(true, $obj->getBooleen1());
    }

    /**
     * Tests the setBooleen10() method.
     *
     * @return void
     */
    public function testSetBooleen10(): void {

        $obj = new CriteresClient();

        $obj->setBooleen10(true);
        $this->assertEquals(true, $obj->getBooleen10());
    }

    /**
     * Tests the setBooleen2() method.
     *
     * @return void
     */
    public function testSetBooleen2(): void {

        $obj = new CriteresClient();

        $obj->setBooleen2(true);
        $this->assertEquals(true, $obj->getBooleen2());
    }

    /**
     * Tests the setBooleen3() method.
     *
     * @return void
     */
    public function testSetBooleen3(): void {

        $obj = new CriteresClient();

        $obj->setBooleen3(true);
        $this->assertEquals(true, $obj->getBooleen3());
    }

    /**
     * Tests the setBooleen4() method.
     *
     * @return void
     */
    public function testSetBooleen4(): void {

        $obj = new CriteresClient();

        $obj->setBooleen4(true);
        $this->assertEquals(true, $obj->getBooleen4());
    }

    /**
     * Tests the setBooleen5() method.
     *
     * @return void
     */
    public function testSetBooleen5(): void {

        $obj = new CriteresClient();

        $obj->setBooleen5(true);
        $this->assertEquals(true, $obj->getBooleen5());
    }

    /**
     * Tests the setBooleen6() method.
     *
     * @return void
     */
    public function testSetBooleen6(): void {

        $obj = new CriteresClient();

        $obj->setBooleen6(true);
        $this->assertEquals(true, $obj->getBooleen6());
    }

    /**
     * Tests the setBooleen7() method.
     *
     * @return void
     */
    public function testSetBooleen7(): void {

        $obj = new CriteresClient();

        $obj->setBooleen7(true);
        $this->assertEquals(true, $obj->getBooleen7());
    }

    /**
     * Tests the setBooleen8() method.
     *
     * @return void
     */
    public function testSetBooleen8(): void {

        $obj = new CriteresClient();

        $obj->setBooleen8(true);
        $this->assertEquals(true, $obj->getBooleen8());
    }

    /**
     * Tests the setBooleen9() method.
     *
     * @return void
     */
    public function testSetBooleen9(): void {

        $obj = new CriteresClient();

        $obj->setBooleen9(true);
        $this->assertEquals(true, $obj->getBooleen9());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CriteresClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRef1() method.
     *
     * @return void
     */
    public function testSetCodeRef1(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef1("codeRef1");
        $this->assertEquals("codeRef1", $obj->getCodeRef1());
    }

    /**
     * Tests the setCodeRef10() method.
     *
     * @return void
     */
    public function testSetCodeRef10(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef10("codeRef10");
        $this->assertEquals("codeRef10", $obj->getCodeRef10());
    }

    /**
     * Tests the setCodeRef2() method.
     *
     * @return void
     */
    public function testSetCodeRef2(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef2("codeRef2");
        $this->assertEquals("codeRef2", $obj->getCodeRef2());
    }

    /**
     * Tests the setCodeRef3() method.
     *
     * @return void
     */
    public function testSetCodeRef3(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef3("codeRef3");
        $this->assertEquals("codeRef3", $obj->getCodeRef3());
    }

    /**
     * Tests the setCodeRef4() method.
     *
     * @return void
     */
    public function testSetCodeRef4(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef4("codeRef4");
        $this->assertEquals("codeRef4", $obj->getCodeRef4());
    }

    /**
     * Tests the setCodeRef5() method.
     *
     * @return void
     */
    public function testSetCodeRef5(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef5("codeRef5");
        $this->assertEquals("codeRef5", $obj->getCodeRef5());
    }

    /**
     * Tests the setCodeRef6() method.
     *
     * @return void
     */
    public function testSetCodeRef6(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef6("codeRef6");
        $this->assertEquals("codeRef6", $obj->getCodeRef6());
    }

    /**
     * Tests the setCodeRef7() method.
     *
     * @return void
     */
    public function testSetCodeRef7(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef7("codeRef7");
        $this->assertEquals("codeRef7", $obj->getCodeRef7());
    }

    /**
     * Tests the setCodeRef8() method.
     *
     * @return void
     */
    public function testSetCodeRef8(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef8("codeRef8");
        $this->assertEquals("codeRef8", $obj->getCodeRef8());
    }

    /**
     * Tests the setCodeRef9() method.
     *
     * @return void
     */
    public function testSetCodeRef9(): void {

        $obj = new CriteresClient();

        $obj->setCodeRef9("codeRef9");
        $this->assertEquals("codeRef9", $obj->getCodeRef9());
    }

    /**
     * Tests the setDate1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests the setDate10() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate10(): void {

        // Set a Date/time mock.
        $date10 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate10($date10);
        $this->assertSame($date10, $obj->getDate10());
    }

    /**
     * Tests the setDate2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Tests the setDate3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate3(): void {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Tests the setDate4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate4(): void {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Tests the setDate5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate5(): void {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Tests the setDate6() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate6(): void {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Tests the setDate7() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate7(): void {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Tests the setDate8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate8(): void {

        // Set a Date/time mock.
        $date8 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate8($date8);
        $this->assertSame($date8, $obj->getDate8());
    }

    /**
     * Tests the setDate9() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate9(): void {

        // Set a Date/time mock.
        $date9 = new DateTime("2018-09-10");

        $obj = new CriteresClient();

        $obj->setDate9($date9);
        $this->assertSame($date9, $obj->getDate9());
    }

    /**
     * Tests the setDouble1() method.
     *
     * @return void
     */
    public function testSetDouble1(): void {

        $obj = new CriteresClient();

        $obj->setDouble1(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble1());
    }

    /**
     * Tests the setDouble10() method.
     *
     * @return void
     */
    public function testSetDouble10(): void {

        $obj = new CriteresClient();

        $obj->setDouble10(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble10());
    }

    /**
     * Tests the setDouble2() method.
     *
     * @return void
     */
    public function testSetDouble2(): void {

        $obj = new CriteresClient();

        $obj->setDouble2(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble2());
    }

    /**
     * Tests the setDouble3() method.
     *
     * @return void
     */
    public function testSetDouble3(): void {

        $obj = new CriteresClient();

        $obj->setDouble3(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble3());
    }

    /**
     * Tests the setDouble4() method.
     *
     * @return void
     */
    public function testSetDouble4(): void {

        $obj = new CriteresClient();

        $obj->setDouble4(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble4());
    }

    /**
     * Tests the setDouble5() method.
     *
     * @return void
     */
    public function testSetDouble5(): void {

        $obj = new CriteresClient();

        $obj->setDouble5(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble5());
    }

    /**
     * Tests the setDouble6() method.
     *
     * @return void
     */
    public function testSetDouble6(): void {

        $obj = new CriteresClient();

        $obj->setDouble6(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble6());
    }

    /**
     * Tests the setDouble7() method.
     *
     * @return void
     */
    public function testSetDouble7(): void {

        $obj = new CriteresClient();

        $obj->setDouble7(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble7());
    }

    /**
     * Tests the setDouble8() method.
     *
     * @return void
     */
    public function testSetDouble8(): void {

        $obj = new CriteresClient();

        $obj->setDouble8(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble8());
    }

    /**
     * Tests the setDouble9() method.
     *
     * @return void
     */
    public function testSetDouble9(): void {

        $obj = new CriteresClient();

        $obj->setDouble9(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble9());
    }

    /**
     * Tests the setLong1() method.
     *
     * @return void
     */
    public function testSetLong1(): void {

        $obj = new CriteresClient();

        $obj->setLong1(10);
        $this->assertEquals(10, $obj->getLong1());
    }

    /**
     * Tests the setLong10() method.
     *
     * @return void
     */
    public function testSetLong10(): void {

        $obj = new CriteresClient();

        $obj->setLong10(10);
        $this->assertEquals(10, $obj->getLong10());
    }

    /**
     * Tests the setLong2() method.
     *
     * @return void
     */
    public function testSetLong2(): void {

        $obj = new CriteresClient();

        $obj->setLong2(10);
        $this->assertEquals(10, $obj->getLong2());
    }

    /**
     * Tests the setLong3() method.
     *
     * @return void
     */
    public function testSetLong3(): void {

        $obj = new CriteresClient();

        $obj->setLong3(10);
        $this->assertEquals(10, $obj->getLong3());
    }

    /**
     * Tests the setLong4() method.
     *
     * @return void
     */
    public function testSetLong4(): void {

        $obj = new CriteresClient();

        $obj->setLong4(10);
        $this->assertEquals(10, $obj->getLong4());
    }

    /**
     * Tests the setLong5() method.
     *
     * @return void
     */
    public function testSetLong5(): void {

        $obj = new CriteresClient();

        $obj->setLong5(10);
        $this->assertEquals(10, $obj->getLong5());
    }

    /**
     * Tests the setLong6() method.
     *
     * @return void
     */
    public function testSetLong6(): void {

        $obj = new CriteresClient();

        $obj->setLong6(10);
        $this->assertEquals(10, $obj->getLong6());
    }

    /**
     * Tests the setLong7() method.
     *
     * @return void
     */
    public function testSetLong7(): void {

        $obj = new CriteresClient();

        $obj->setLong7(10);
        $this->assertEquals(10, $obj->getLong7());
    }

    /**
     * Tests the setLong8() method.
     *
     * @return void
     */
    public function testSetLong8(): void {

        $obj = new CriteresClient();

        $obj->setLong8(10);
        $this->assertEquals(10, $obj->getLong8());
    }

    /**
     * Tests the setLong9() method.
     *
     * @return void
     */
    public function testSetLong9(): void {

        $obj = new CriteresClient();

        $obj->setLong9(10);
        $this->assertEquals(10, $obj->getLong9());
    }

    /**
     * Tests the setTexte1() method.
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new CriteresClient();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests the setTexte10() method.
     *
     * @return void
     */
    public function testSetTexte10(): void {

        $obj = new CriteresClient();

        $obj->setTexte10("texte10");
        $this->assertEquals("texte10", $obj->getTexte10());
    }

    /**
     * Tests the setTexte2() method.
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new CriteresClient();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Tests the setTexte3() method.
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new CriteresClient();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Tests the setTexte4() method.
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new CriteresClient();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Tests the setTexte5() method.
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new CriteresClient();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Tests the setTexte6() method.
     *
     * @return void
     */
    public function testSetTexte6(): void {

        $obj = new CriteresClient();

        $obj->setTexte6("texte6");
        $this->assertEquals("texte6", $obj->getTexte6());
    }

    /**
     * Tests the setTexte7() method.
     *
     * @return void
     */
    public function testSetTexte7(): void {

        $obj = new CriteresClient();

        $obj->setTexte7("texte7");
        $this->assertEquals("texte7", $obj->getTexte7());
    }

    /**
     * Tests the setTexte8() method.
     *
     * @return void
     */
    public function testSetTexte8(): void {

        $obj = new CriteresClient();

        $obj->setTexte8("texte8");
        $this->assertEquals("texte8", $obj->getTexte8());
    }

    /**
     * Tests the setTexte9() method.
     *
     * @return void
     */
    public function testSetTexte9(): void {

        $obj = new CriteresClient();

        $obj->setTexte9("texte9");
        $this->assertEquals("texte9", $obj->getTexte9());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CriteresClient();

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
        $this->assertNull($obj->getCodeClient());
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
}
