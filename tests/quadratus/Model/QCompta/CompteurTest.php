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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CompteurTest extends AbstractTestCase {

    /**
     * Tests setNbActiviteImprimees()
     *
     * @return void
     */
    public function testSetNbActiviteImprimees(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimees(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimees());
    }

    /**
     * Tests setNbActiviteImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesADeduire());
    }

    /**
     * Tests setNbActiviteImprimeesFact()
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesFact());
    }

    /**
     * Tests setNbAnaImprimees()
     *
     * @return void
     */
    public function testSetNbAnaImprimees(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimees(10);
        $this->assertEquals(10, $obj->getNbAnaImprimees());
    }

    /**
     * Tests setNbAnaImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbAnaImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesADeduire());
    }

    /**
     * Tests setNbAnaImprimeesFact()
     *
     * @return void
     */
    public function testSetNbAnaImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesFact());
    }

    /**
     * Tests setNbAnnexesEditees()
     *
     * @return void
     */
    public function testSetNbAnnexesEditees(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditees(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditees());
    }

    /**
     * Tests setNbAnnexesEditeesADeduire()
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesADeduire());
    }

    /**
     * Tests setNbAnnexesEditeesFact()
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesFact(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesFact());
    }

    /**
     * Tests setNbBalAgeeImprimees()
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimees(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimees(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimees());
    }

    /**
     * Tests setNbBalAgeeImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesADeduire());
    }

    /**
     * Tests setNbBalAgeeImprimeesFact()
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesFact());
    }

    /**
     * Tests setNbBalImprimees()
     *
     * @return void
     */
    public function testSetNbBalImprimees(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimees(10);
        $this->assertEquals(10, $obj->getNbBalImprimees());
    }

    /**
     * Tests setNbBalImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbBalImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesADeduire());
    }

    /**
     * Tests setNbBalImprimeesFact()
     *
     * @return void
     */
    public function testSetNbBalImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbBalImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesFact());
    }

    /**
     * Tests setNbBilansEdites()
     *
     * @return void
     */
    public function testSetNbBilansEdites(): void {

        $obj = new Compteur();

        $obj->setNbBilansEdites(10);
        $this->assertEquals(10, $obj->getNbBilansEdites());
    }

    /**
     * Tests setNbBilansEditesADeduire()
     *
     * @return void
     */
    public function testSetNbBilansEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbBilansEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbBilansEditesADeduire());
    }

    /**
     * Tests setNbBilansEditesFact()
     *
     * @return void
     */
    public function testSetNbBilansEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbBilansEditesFact(10);
        $this->assertEquals(10, $obj->getNbBilansEditesFact());
    }

    /**
     * Tests setNbCedageEdites()
     *
     * @return void
     */
    public function testSetNbCedageEdites(): void {

        $obj = new Compteur();

        $obj->setNbCedageEdites(10);
        $this->assertEquals(10, $obj->getNbCedageEdites());
    }

    /**
     * Tests setNbCedageEditesADeduire()
     *
     * @return void
     */
    public function testSetNbCedageEditesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCedageEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbCedageEditesADeduire());
    }

    /**
     * Tests setNbCedageEditesFact()
     *
     * @return void
     */
    public function testSetNbCedageEditesFact(): void {

        $obj = new Compteur();

        $obj->setNbCedageEditesFact(10);
        $this->assertEquals(10, $obj->getNbCedageEditesFact());
    }

    /**
     * Tests setNbCentrImprimees()
     *
     * @return void
     */
    public function testSetNbCentrImprimees(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimees(10);
        $this->assertEquals(10, $obj->getNbCentrImprimees());
    }

    /**
     * Tests setNbCentrImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbCentrImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesADeduire());
    }

    /**
     * Tests setNbCentrImprimeesFact()
     *
     * @return void
     */
    public function testSetNbCentrImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesFact());
    }

    /**
     * Tests setNbEchImprimees()
     *
     * @return void
     */
    public function testSetNbEchImprimees(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimees(10);
        $this->assertEquals(10, $obj->getNbEchImprimees());
    }

    /**
     * Tests setNbEchImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbEchImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesADeduire());
    }

    /**
     * Tests setNbEchImprimeesFact()
     *
     * @return void
     */
    public function testSetNbEchImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbEchImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesFact());
    }

    /**
     * Tests setNbFicAsciiEmis()
     *
     * @return void
     */
    public function testSetNbFicAsciiEmis(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmis(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmis());
    }

    /**
     * Tests setNbFicAsciiEmisADeduire()
     *
     * @return void
     */
    public function testSetNbFicAsciiEmisADeduire(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmisADeduire(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmisADeduire());
    }

    /**
     * Tests setNbFicAsciiEmisFact()
     *
     * @return void
     */
    public function testSetNbFicAsciiEmisFact(): void {

        $obj = new Compteur();

        $obj->setNbFicAsciiEmisFact(10);
        $this->assertEquals(10, $obj->getNbFicAsciiEmisFact());
    }

    /**
     * Tests setNbGlImprimees()
     *
     * @return void
     */
    public function testSetNbGlImprimees(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimees(10);
        $this->assertEquals(10, $obj->getNbGlImprimees());
    }

    /**
     * Tests setNbGlImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbGlImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbGlImprimeesADeduire());
    }

    /**
     * Tests setNbGlImprimeesFact()
     *
     * @return void
     */
    public function testSetNbGlImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbGlImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbGlImprimeesFact());
    }

    /**
     * Tests setNbJrnImprimees()
     *
     * @return void
     */
    public function testSetNbJrnImprimees(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimees(10);
        $this->assertEquals(10, $obj->getNbJrnImprimees());
    }

    /**
     * Tests setNbJrnImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbJrnImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesADeduire());
    }

    /**
     * Tests setNbJrnImprimeesFact()
     *
     * @return void
     */
    public function testSetNbJrnImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesFact());
    }

    /**
     * Tests setNbLiassesFiscEditees()
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditees(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditees(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditees());
    }

    /**
     * Tests setNbLiassesFiscEditeesADeduire()
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesADeduire());
    }

    /**
     * Tests setNbLiassesFiscEditeesFact()
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesFact(): void {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesFact(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesFact());
    }

    /**
     * Tests setNbLigEtebacTraitees()
     *
     * @return void
     */
    public function testSetNbLigEtebacTraitees(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraitees(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraitees());
    }

    /**
     * Tests setNbLigEtebacTraiteesADeduire()
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesADeduire(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesADeduire());
    }

    /**
     * Tests setNbLigEtebacTraiteesFact()
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesFact(): void {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesFact(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesFact());
    }

    /**
     * Tests setNbRelCliImprimees()
     *
     * @return void
     */
    public function testSetNbRelCliImprimees(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimees(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimees());
    }

    /**
     * Tests setNbRelCliImprimeesADeduire()
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesADeduire());
    }

    /**
     * Tests setNbRelCliImprimeesFact()
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesFact(): void {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesFact());
    }

    /**
     * Tests setNbTabAmortImprimes()
     *
     * @return void
     */
    public function testSetNbTabAmortImprimes(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimes(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimes());
    }

    /**
     * Tests setNbTabAmortImprimesADeduire()
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesADeduire(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimesADeduire(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesADeduire());
    }

    /**
     * Tests setNbTabAmortImprimesFact()
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesFact(): void {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimesFact(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesFact());
    }

    /**
     * Tests setPeriode()
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
     * Tests __construct()
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
