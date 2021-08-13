<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Compteur;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Compteur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CompteurTest extends AbstractTestCase {

    /**
     * Tests the setNbActiviteImprimees() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimees(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimees(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimees());
    }

    /**
     * Tests the setNbActiviteImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesADeduire());
    }

    /**
     * Tests the setNbActiviteImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesFact());
    }

    /**
     * Tests the setNbAnaImprimees() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimees(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimees(10);
        $this->assertEquals(10, $obj->getNbAnaImprimees());
    }

    /**
     * Tests the setNbAnaImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesADeduire());
    }

    /**
     * Tests the setNbAnaImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesFact());
    }

    /**
     * Tests the setNbAnnexesEditees() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditees(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditees(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditees());
    }

    /**
     * Tests the setNbAnnexesEditeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesADeduire());
    }

    /**
     * Tests the setNbAnnexesEditeesFact() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesFact(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesFact());
    }

    /**
     * Tests the setNbBalAgeeImprimees() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimees(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimees(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimees());
    }

    /**
     * Tests the setNbBalAgeeImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesADeduire());
    }

    /**
     * Tests the setNbBalAgeeImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesFact());
    }

    /**
     * Tests the setNbBalImprimees() method.
     *
     * @return void
     */
    public function testSetNbBalImprimees(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimees(10);
        $this->assertEquals(10, $obj->getNbBalImprimees());
    }

    /**
     * Tests the setNbBalImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBalImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesADeduire());
    }

    /**
     * Tests the setNbBalImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbBalImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesFact());
    }

    /**
     * Tests the setNbBilansEdites() method.
     *
     * @return void
     */
    public function testSetNbBilansEdites(): void {

        $obj = new Compteur();

        $obj->setNbBilansEdites(10);
        $this->assertEquals(10, $obj->getNbBilansEdites());
    }

    /**
     * Tests the setNbBilansEditesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBilansEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBilansEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbBilansEditesADeduire());
    }

    /**
     * Tests the setNbBilansEditesFact() method.
     *
     * @return void
     */
    public function testSetNbBilansEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbBilansEditesFact(10);
        $this->assertEquals(10, $obj->getNbBilansEditesFact());
    }

    /**
     * Tests the setNbCedageEdites() method.
     *
     * @return void
     */
    public function testSetNbCedageEdites(): void {

        $obj = new Compteur();

        $obj->setNbCedageEdites(10);
        $this->assertEquals(10, $obj->getNbCedageEdites());
    }

    /**
     * Tests the setNbCedageEditesADeduire() method.
     *
     * @return void
     */
    public function testSetNbCedageEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCedageEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbCedageEditesADeduire());
    }

    /**
     * Tests the setNbCedageEditesFact() method.
     *
     * @return void
     */
    public function testSetNbCedageEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbCedageEditesFact(10);
        $this->assertEquals(10, $obj->getNbCedageEditesFact());
    }

    /**
     * Tests the setNbCentrImprimees() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimees(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimees(10);
        $this->assertEquals(10, $obj->getNbCentrImprimees());
    }

    /**
     * Tests the setNbCentrImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesADeduire());
    }

    /**
     * Tests the setNbCentrImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesFact());
    }

    /**
     * Tests the setNbEchImprimees() method.
     *
     * @return void
     */
    public function testSetNbEchImprimees(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimees(10);
        $this->assertEquals(10, $obj->getNbEchImprimees());
    }

    /**
     * Tests the setNbEchImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbEchImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesADeduire());
    }

    /**
     * Tests the setNbEchImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbEchImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesFact());
    }

    /**
     * Tests the setNbFicAsciiEmis() method.
     *
     * @return void
     */
    public function testSetNbFicAsciiEmis(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmis(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmis());
    }

    /**
     * Tests the setNbFicAsciiEmisADeduire() method.
     *
     * @return void
     */
    public function testSetNbFicAsciiEmisADeduire(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmisADeduire(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmisADeduire());
    }

    /**
     * Tests the setNbFicAsciiEmisFact() method.
     *
     * @return void
     */
    public function testSetNbFicAsciiEmisFact(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmisFact(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmisFact());
    }

    /**
     * Tests the setNbGlImprimees() method.
     *
     * @return void
     */
    public function testSetNbGlImprimees(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimees(10);
        $this->assertEquals(10, $obj->getNbGlImprimees());
    }

    /**
     * Tests the setNbGlImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbGlImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbGlImprimeesADeduire());
    }

    /**
     * Tests the setNbGlImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbGlImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbGlImprimeesFact());
    }

    /**
     * Tests the setNbJrnImprimees() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimees(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimees(10);
        $this->assertEquals(10, $obj->getNbJrnImprimees());
    }

    /**
     * Tests the setNbJrnImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesADeduire());
    }

    /**
     * Tests the setNbJrnImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesFact());
    }

    /**
     * Tests the setNbLiassesFiscEditees() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditees(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditees(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditees());
    }

    /**
     * Tests the setNbLiassesFiscEditeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesADeduire());
    }

    /**
     * Tests the setNbLiassesFiscEditeesFact() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesFact(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesFact());
    }

    /**
     * Tests the setNbLigEtebacTraitees() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraitees(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraitees(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraitees());
    }

    /**
     * Tests the setNbLigEtebacTraiteesADeduire() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesADeduire(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesADeduire());
    }

    /**
     * Tests the setNbLigEtebacTraiteesFact() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesFact(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesFact(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesFact());
    }

    /**
     * Tests the setNbRelCliImprimees() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimees(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimees(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimees());
    }

    /**
     * Tests the setNbRelCliImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesADeduire());
    }

    /**
     * Tests the setNbRelCliImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesFact());
    }

    /**
     * Tests the setNbTabAmortImprimes() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimes(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimes(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimes());
    }

    /**
     * Tests the setNbTabAmortImprimesADeduire() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimesADeduire(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesADeduire());
    }

    /**
     * Tests the setNbTabAmortImprimesFact() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesFact(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimesFact(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesFact());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new Compteur();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Compteur();

        $this->assertNull($obj->getNbActiviteImprimees());
        $this->assertNull($obj->getNbActiviteImprimeesADeduire());
        $this->assertNull($obj->getNbActiviteImprimeesFact());
        $this->assertNull($obj->getNbAnaImprimees());
        $this->assertNull($obj->getNbAnaImprimeesADeduire());
        $this->assertNull($obj->getNbAnaImprimeesFact());
        $this->assertNull($obj->getNbAnnexesEditees());
        $this->assertNull($obj->getNbAnnexesEditeesADeduire());
        $this->assertNull($obj->getNbAnnexesEditeesFact());
        $this->assertNull($obj->getNbBalAgeeImprimees());
        $this->assertNull($obj->getNbBalAgeeImprimeesADeduire());
        $this->assertNull($obj->getNbBalAgeeImprimeesFact());
        $this->assertNull($obj->getNbBalImprimees());
        $this->assertNull($obj->getNbBalImprimeesADeduire());
        $this->assertNull($obj->getNbBalImprimeesFact());
        $this->assertNull($obj->getNbBilansEdites());
        $this->assertNull($obj->getNbBilansEditesADeduire());
        $this->assertNull($obj->getNbBilansEditesFact());
        $this->assertNull($obj->getNbCedageEdites());
        $this->assertNull($obj->getNbCedageEditesADeduire());
        $this->assertNull($obj->getNbCedageEditesFact());
        $this->assertNull($obj->getNbCentrImprimees());
        $this->assertNull($obj->getNbCentrImprimeesADeduire());
        $this->assertNull($obj->getNbCentrImprimeesFact());
        $this->assertNull($obj->getNbEchImprimees());
        $this->assertNull($obj->getNbEchImprimeesADeduire());
        $this->assertNull($obj->getNbEchImprimeesFact());
        $this->assertNull($obj->getNbFicAsciiEmis());
        $this->assertNull($obj->getNbFicAsciiEmisADeduire());
        $this->assertNull($obj->getNbFicAsciiEmisFact());
        $this->assertNull($obj->getNbGlImprimees());
        $this->assertNull($obj->getNbGlImprimeesADeduire());
        $this->assertNull($obj->getNbGlImprimeesFact());
        $this->assertNull($obj->getNbJrnImprimees());
        $this->assertNull($obj->getNbJrnImprimeesADeduire());
        $this->assertNull($obj->getNbJrnImprimeesFact());
        $this->assertNull($obj->getNbLiassesFiscEditees());
        $this->assertNull($obj->getNbLiassesFiscEditeesADeduire());
        $this->assertNull($obj->getNbLiassesFiscEditeesFact());
        $this->assertNull($obj->getNbLigEtebacTraitees());
        $this->assertNull($obj->getNbLigEtebacTraiteesADeduire());
        $this->assertNull($obj->getNbLigEtebacTraiteesFact());
        $this->assertNull($obj->getNbRelCliImprimees());
        $this->assertNull($obj->getNbRelCliImprimeesADeduire());
        $this->assertNull($obj->getNbRelCliImprimeesFact());
        $this->assertNull($obj->getNbTabAmortImprimes());
        $this->assertNull($obj->getNbTabAmortImprimesADeduire());
        $this->assertNull($obj->getNbTabAmortImprimesFact());
        $this->assertNull($obj->getPeriode());
    }
}
