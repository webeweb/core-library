<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Compteur;

/**
 * Compteur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CompteurTest extends AbstractTestCase {

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
