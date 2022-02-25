<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\CriteresArticle;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres article test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CriteresArticleTest extends AbstractTestCase {

    /**
     * Tests setBooleen1()
     *
     * @return void
     */
    public function testSetBooleen1(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen1(true);
        $this->assertEquals(true, $obj->getBooleen1());
    }

    /**
     * Tests setBooleen10()
     *
     * @return void
     */
    public function testSetBooleen10(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen10(true);
        $this->assertEquals(true, $obj->getBooleen10());
    }

    /**
     * Tests setBooleen2()
     *
     * @return void
     */
    public function testSetBooleen2(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen2(true);
        $this->assertEquals(true, $obj->getBooleen2());
    }

    /**
     * Tests setBooleen3()
     *
     * @return void
     */
    public function testSetBooleen3(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen3(true);
        $this->assertEquals(true, $obj->getBooleen3());
    }

    /**
     * Tests setBooleen4()
     *
     * @return void
     */
    public function testSetBooleen4(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen4(true);
        $this->assertEquals(true, $obj->getBooleen4());
    }

    /**
     * Tests setBooleen5()
     *
     * @return void
     */
    public function testSetBooleen5(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen5(true);
        $this->assertEquals(true, $obj->getBooleen5());
    }

    /**
     * Tests setBooleen6()
     *
     * @return void
     */
    public function testSetBooleen6(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen6(true);
        $this->assertEquals(true, $obj->getBooleen6());
    }

    /**
     * Tests setBooleen7()
     *
     * @return void
     */
    public function testSetBooleen7(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen7(true);
        $this->assertEquals(true, $obj->getBooleen7());
    }

    /**
     * Tests setBooleen8()
     *
     * @return void
     */
    public function testSetBooleen8(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen8(true);
        $this->assertEquals(true, $obj->getBooleen8());
    }

    /**
     * Tests setBooleen9()
     *
     * @return void
     */
    public function testSetBooleen9(): void {

        $obj = new CriteresArticle();

        $obj->setBooleen9(true);
        $this->assertEquals(true, $obj->getBooleen9());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new CriteresArticle();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeRef1()
     *
     * @return void
     */
    public function testSetCodeRef1(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef1("codeRef1");
        $this->assertEquals("codeRef1", $obj->getCodeRef1());
    }

    /**
     * Tests setCodeRef10()
     *
     * @return void
     */
    public function testSetCodeRef10(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef10("codeRef10");
        $this->assertEquals("codeRef10", $obj->getCodeRef10());
    }

    /**
     * Tests setCodeRef2()
     *
     * @return void
     */
    public function testSetCodeRef2(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef2("codeRef2");
        $this->assertEquals("codeRef2", $obj->getCodeRef2());
    }

    /**
     * Tests setCodeRef3()
     *
     * @return void
     */
    public function testSetCodeRef3(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef3("codeRef3");
        $this->assertEquals("codeRef3", $obj->getCodeRef3());
    }

    /**
     * Tests setCodeRef4()
     *
     * @return void
     */
    public function testSetCodeRef4(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef4("codeRef4");
        $this->assertEquals("codeRef4", $obj->getCodeRef4());
    }

    /**
     * Tests setCodeRef5()
     *
     * @return void
     */
    public function testSetCodeRef5(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef5("codeRef5");
        $this->assertEquals("codeRef5", $obj->getCodeRef5());
    }

    /**
     * Tests setCodeRef6()
     *
     * @return void
     */
    public function testSetCodeRef6(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef6("codeRef6");
        $this->assertEquals("codeRef6", $obj->getCodeRef6());
    }

    /**
     * Tests setCodeRef7()
     *
     * @return void
     */
    public function testSetCodeRef7(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef7("codeRef7");
        $this->assertEquals("codeRef7", $obj->getCodeRef7());
    }

    /**
     * Tests setCodeRef8()
     *
     * @return void
     */
    public function testSetCodeRef8(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef8("codeRef8");
        $this->assertEquals("codeRef8", $obj->getCodeRef8());
    }

    /**
     * Tests setCodeRef9()
     *
     * @return void
     */
    public function testSetCodeRef9(): void {

        $obj = new CriteresArticle();

        $obj->setCodeRef9("codeRef9");
        $this->assertEquals("codeRef9", $obj->getCodeRef9());
    }

    /**
     * Tests setDate1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests setDate10()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate10(): void {

        // Set a Date/time mock.
        $date10 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate10($date10);
        $this->assertSame($date10, $obj->getDate10());
    }

    /**
     * Tests setDate2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Tests setDate3()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate3(): void {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Tests setDate4()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate4(): void {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Tests setDate5()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate5(): void {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Tests setDate6()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate6(): void {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Tests setDate7()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate7(): void {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Tests setDate8()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate8(): void {

        // Set a Date/time mock.
        $date8 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate8($date8);
        $this->assertSame($date8, $obj->getDate8());
    }

    /**
     * Tests setDate9()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate9(): void {

        // Set a Date/time mock.
        $date9 = new DateTime("2018-09-10");

        $obj = new CriteresArticle();

        $obj->setDate9($date9);
        $this->assertSame($date9, $obj->getDate9());
    }

    /**
     * Tests setDouble1()
     *
     * @return void
     */
    public function testSetDouble1(): void {

        $obj = new CriteresArticle();

        $obj->setDouble1(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble1());
    }

    /**
     * Tests setDouble10()
     *
     * @return void
     */
    public function testSetDouble10(): void {

        $obj = new CriteresArticle();

        $obj->setDouble10(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble10());
    }

    /**
     * Tests setDouble2()
     *
     * @return void
     */
    public function testSetDouble2(): void {

        $obj = new CriteresArticle();

        $obj->setDouble2(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble2());
    }

    /**
     * Tests setDouble3()
     *
     * @return void
     */
    public function testSetDouble3(): void {

        $obj = new CriteresArticle();

        $obj->setDouble3(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble3());
    }

    /**
     * Tests setDouble4()
     *
     * @return void
     */
    public function testSetDouble4(): void {

        $obj = new CriteresArticle();

        $obj->setDouble4(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble4());
    }

    /**
     * Tests setDouble5()
     *
     * @return void
     */
    public function testSetDouble5(): void {

        $obj = new CriteresArticle();

        $obj->setDouble5(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble5());
    }

    /**
     * Tests setDouble6()
     *
     * @return void
     */
    public function testSetDouble6(): void {

        $obj = new CriteresArticle();

        $obj->setDouble6(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble6());
    }

    /**
     * Tests setDouble7()
     *
     * @return void
     */
    public function testSetDouble7(): void {

        $obj = new CriteresArticle();

        $obj->setDouble7(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble7());
    }

    /**
     * Tests setDouble8()
     *
     * @return void
     */
    public function testSetDouble8(): void {

        $obj = new CriteresArticle();

        $obj->setDouble8(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble8());
    }

    /**
     * Tests setDouble9()
     *
     * @return void
     */
    public function testSetDouble9(): void {

        $obj = new CriteresArticle();

        $obj->setDouble9(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble9());
    }

    /**
     * Tests setLong1()
     *
     * @return void
     */
    public function testSetLong1(): void {

        $obj = new CriteresArticle();

        $obj->setLong1(10);
        $this->assertEquals(10, $obj->getLong1());
    }

    /**
     * Tests setLong10()
     *
     * @return void
     */
    public function testSetLong10(): void {

        $obj = new CriteresArticle();

        $obj->setLong10(10);
        $this->assertEquals(10, $obj->getLong10());
    }

    /**
     * Tests setLong2()
     *
     * @return void
     */
    public function testSetLong2(): void {

        $obj = new CriteresArticle();

        $obj->setLong2(10);
        $this->assertEquals(10, $obj->getLong2());
    }

    /**
     * Tests setLong3()
     *
     * @return void
     */
    public function testSetLong3(): void {

        $obj = new CriteresArticle();

        $obj->setLong3(10);
        $this->assertEquals(10, $obj->getLong3());
    }

    /**
     * Tests setLong4()
     *
     * @return void
     */
    public function testSetLong4(): void {

        $obj = new CriteresArticle();

        $obj->setLong4(10);
        $this->assertEquals(10, $obj->getLong4());
    }

    /**
     * Tests setLong5()
     *
     * @return void
     */
    public function testSetLong5(): void {

        $obj = new CriteresArticle();

        $obj->setLong5(10);
        $this->assertEquals(10, $obj->getLong5());
    }

    /**
     * Tests setLong6()
     *
     * @return void
     */
    public function testSetLong6(): void {

        $obj = new CriteresArticle();

        $obj->setLong6(10);
        $this->assertEquals(10, $obj->getLong6());
    }

    /**
     * Tests setLong7()
     *
     * @return void
     */
    public function testSetLong7(): void {

        $obj = new CriteresArticle();

        $obj->setLong7(10);
        $this->assertEquals(10, $obj->getLong7());
    }

    /**
     * Tests setLong8()
     *
     * @return void
     */
    public function testSetLong8(): void {

        $obj = new CriteresArticle();

        $obj->setLong8(10);
        $this->assertEquals(10, $obj->getLong8());
    }

    /**
     * Tests setLong9()
     *
     * @return void
     */
    public function testSetLong9(): void {

        $obj = new CriteresArticle();

        $obj->setLong9(10);
        $this->assertEquals(10, $obj->getLong9());
    }

    /**
     * Tests setTexte1()
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new CriteresArticle();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests setTexte10()
     *
     * @return void
     */
    public function testSetTexte10(): void {

        $obj = new CriteresArticle();

        $obj->setTexte10("texte10");
        $this->assertEquals("texte10", $obj->getTexte10());
    }

    /**
     * Tests setTexte2()
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new CriteresArticle();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Tests setTexte3()
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new CriteresArticle();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Tests setTexte4()
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new CriteresArticle();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Tests setTexte5()
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new CriteresArticle();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Tests setTexte6()
     *
     * @return void
     */
    public function testSetTexte6(): void {

        $obj = new CriteresArticle();

        $obj->setTexte6("texte6");
        $this->assertEquals("texte6", $obj->getTexte6());
    }

    /**
     * Tests setTexte7()
     *
     * @return void
     */
    public function testSetTexte7(): void {

        $obj = new CriteresArticle();

        $obj->setTexte7("texte7");
        $this->assertEquals("texte7", $obj->getTexte7());
    }

    /**
     * Tests setTexte8()
     *
     * @return void
     */
    public function testSetTexte8(): void {

        $obj = new CriteresArticle();

        $obj->setTexte8("texte8");
        $this->assertEquals("texte8", $obj->getTexte8());
    }

    /**
     * Tests setTexte9()
     *
     * @return void
     */
    public function testSetTexte9(): void {

        $obj = new CriteresArticle();

        $obj->setTexte9("texte9");
        $this->assertEquals("texte9", $obj->getTexte9());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CriteresArticle();

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
        $this->assertNull($obj->getCodeArticle());
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
