<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Compteur;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Compteur model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CompteurTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getNbFicASCIIEmis());
        $this->assertNull($obj->getNbFicASCIIEmisADeduire());
        $this->assertNull($obj->getNbFicASCIIEmisFact());
        $this->assertNull($obj->getNbGLImprimees());
        $this->assertNull($obj->getNbGLImprimeesADeduire());
        $this->assertNull($obj->getNbGLImprimeesFact());
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

    /**
     * Tests the setNbActiviteImprimees() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimees() {

        $obj = new Compteur();

        $obj->setNbActiviteImprimees(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimees());
    }

    /**
     * Tests the setNbActiviteImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesADeduire());
    }

    /**
     * Tests the setNbActiviteImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbActiviteImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbActiviteImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbActiviteImprimeesFact());
    }

    /**
     * Tests the setNbAnaImprimees() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimees() {

        $obj = new Compteur();

        $obj->setNbAnaImprimees(10);
        $this->assertEquals(10, $obj->getNbAnaImprimees());
    }

    /**
     * Tests the setNbAnaImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesADeduire());
    }

    /**
     * Tests the setNbAnaImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbAnaImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbAnaImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbAnaImprimeesFact());
    }

    /**
     * Tests the setNbAnnexesEditees() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditees() {

        $obj = new Compteur();

        $obj->setNbAnnexesEditees(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditees());
    }

    /**
     * Tests the setNbAnnexesEditeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesADeduire() {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesADeduire());
    }

    /**
     * Tests the setNbAnnexesEditeesFact() method.
     *
     * @return void
     */
    public function testSetNbAnnexesEditeesFact() {

        $obj = new Compteur();

        $obj->setNbAnnexesEditeesFact(10);
        $this->assertEquals(10, $obj->getNbAnnexesEditeesFact());
    }

    /**
     * Tests the setNbBalAgeeImprimees() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimees() {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimees(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimees());
    }

    /**
     * Tests the setNbBalAgeeImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesADeduire());
    }

    /**
     * Tests the setNbBalAgeeImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbBalAgeeImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbBalAgeeImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalAgeeImprimeesFact());
    }

    /**
     * Tests the setNbBalImprimees() method.
     *
     * @return void
     */
    public function testSetNbBalImprimees() {

        $obj = new Compteur();

        $obj->setNbBalImprimees(10);
        $this->assertEquals(10, $obj->getNbBalImprimees());
    }

    /**
     * Tests the setNbBalImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBalImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbBalImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesADeduire());
    }

    /**
     * Tests the setNbBalImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbBalImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbBalImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbBalImprimeesFact());
    }

    /**
     * Tests the setNbBilansEdites() method.
     *
     * @return void
     */
    public function testSetNbBilansEdites() {

        $obj = new Compteur();

        $obj->setNbBilansEdites(10);
        $this->assertEquals(10, $obj->getNbBilansEdites());
    }

    /**
     * Tests the setNbBilansEditesADeduire() method.
     *
     * @return void
     */
    public function testSetNbBilansEditesADeduire() {

        $obj = new Compteur();

        $obj->setNbBilansEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbBilansEditesADeduire());
    }

    /**
     * Tests the setNbBilansEditesFact() method.
     *
     * @return void
     */
    public function testSetNbBilansEditesFact() {

        $obj = new Compteur();

        $obj->setNbBilansEditesFact(10);
        $this->assertEquals(10, $obj->getNbBilansEditesFact());
    }

    /**
     * Tests the setNbCedageEdites() method.
     *
     * @return void
     */
    public function testSetNbCedageEdites() {

        $obj = new Compteur();

        $obj->setNbCedageEdites(10);
        $this->assertEquals(10, $obj->getNbCedageEdites());
    }

    /**
     * Tests the setNbCedageEditesADeduire() method.
     *
     * @return void
     */
    public function testSetNbCedageEditesADeduire() {

        $obj = new Compteur();

        $obj->setNbCedageEditesADeduire(10);
        $this->assertEquals(10, $obj->getNbCedageEditesADeduire());
    }

    /**
     * Tests the setNbCedageEditesFact() method.
     *
     * @return void
     */
    public function testSetNbCedageEditesFact() {

        $obj = new Compteur();

        $obj->setNbCedageEditesFact(10);
        $this->assertEquals(10, $obj->getNbCedageEditesFact());
    }

    /**
     * Tests the setNbCentrImprimees() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimees() {

        $obj = new Compteur();

        $obj->setNbCentrImprimees(10);
        $this->assertEquals(10, $obj->getNbCentrImprimees());
    }

    /**
     * Tests the setNbCentrImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesADeduire());
    }

    /**
     * Tests the setNbCentrImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbCentrImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbCentrImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbCentrImprimeesFact());
    }

    /**
     * Tests the setNbEchImprimees() method.
     *
     * @return void
     */
    public function testSetNbEchImprimees() {

        $obj = new Compteur();

        $obj->setNbEchImprimees(10);
        $this->assertEquals(10, $obj->getNbEchImprimees());
    }

    /**
     * Tests the setNbEchImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbEchImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbEchImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesADeduire());
    }

    /**
     * Tests the setNbEchImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbEchImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbEchImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesFact());
    }

    /**
     * Tests the setNbFicASCIIEmis() method.
     *
     * @return void
     */
    public function testSetNbFicASCIIEmis() {

        $obj = new Compteur();

        $obj->setNbFicASCIIEmis(10);
        $this->assertEquals(10, $obj->getNbFicASCIIEmis());
    }

    /**
     * Tests the setNbFicASCIIEmisADeduire() method.
     *
     * @return void
     */
    public function testSetNbFicASCIIEmisADeduire() {

        $obj = new Compteur();

        $obj->setNbFicASCIIEmisADeduire(10);
        $this->assertEquals(10, $obj->getNbFicASCIIEmisADeduire());
    }

    /**
     * Tests the setNbFicASCIIEmisFact() method.
     *
     * @return void
     */
    public function testSetNbFicASCIIEmisFact() {

        $obj = new Compteur();

        $obj->setNbFicASCIIEmisFact(10);
        $this->assertEquals(10, $obj->getNbFicASCIIEmisFact());
    }

    /**
     * Tests the setNbGLImprimees() method.
     *
     * @return void
     */
    public function testSetNbGLImprimees() {

        $obj = new Compteur();

        $obj->setNbGLImprimees(10);
        $this->assertEquals(10, $obj->getNbGLImprimees());
    }

    /**
     * Tests the setNbGLImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbGLImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbGLImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbGLImprimeesADeduire());
    }

    /**
     * Tests the setNbGLImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbGLImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbGLImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbGLImprimeesFact());
    }

    /**
     * Tests the setNbJrnImprimees() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimees() {

        $obj = new Compteur();

        $obj->setNbJrnImprimees(10);
        $this->assertEquals(10, $obj->getNbJrnImprimees());
    }

    /**
     * Tests the setNbJrnImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesADeduire());
    }

    /**
     * Tests the setNbJrnImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbJrnImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbJrnImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbJrnImprimeesFact());
    }

    /**
     * Tests the setNbLiassesFiscEditees() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditees() {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditees(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditees());
    }

    /**
     * Tests the setNbLiassesFiscEditeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesADeduire() {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesADeduire(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesADeduire());
    }

    /**
     * Tests the setNbLiassesFiscEditeesFact() method.
     *
     * @return void
     */
    public function testSetNbLiassesFiscEditeesFact() {

        $obj = new Compteur();

        $obj->setNbLiassesFiscEditeesFact(10);
        $this->assertEquals(10, $obj->getNbLiassesFiscEditeesFact());
    }

    /**
     * Tests the setNbLigEtebacTraitees() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraitees() {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraitees(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraitees());
    }

    /**
     * Tests the setNbLigEtebacTraiteesADeduire() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesADeduire() {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesADeduire(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesADeduire());
    }

    /**
     * Tests the setNbLigEtebacTraiteesFact() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesFact() {

        $obj = new Compteur();

        $obj->setNbLigEtebacTraiteesFact(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesFact());
    }

    /**
     * Tests the setNbRelCliImprimees() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimees() {

        $obj = new Compteur();

        $obj->setNbRelCliImprimees(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimees());
    }

    /**
     * Tests the setNbRelCliImprimeesADeduire() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesADeduire() {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesADeduire(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesADeduire());
    }

    /**
     * Tests the setNbRelCliImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbRelCliImprimeesFact() {

        $obj = new Compteur();

        $obj->setNbRelCliImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbRelCliImprimeesFact());
    }

    /**
     * Tests the setNbTabAmortImprimes() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimes() {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimes(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimes());
    }

    /**
     * Tests the setNbTabAmortImprimesADeduire() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesADeduire() {

        $obj = new Compteur();

        $obj->setNbTabAmortImprimesADeduire(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesADeduire());
    }

    /**
     * Tests the setNbTabAmortImprimesFact() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesFact() {

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
    public function testSetPeriode() {

        $obj = new Compteur();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }
}
