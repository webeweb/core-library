<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Tests\Serializer;

use WBW\Library\Ciqual\Serializer\SerializerKeys;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("code", SerializerKeys::CODE);
        $this->assertEquals("codeAliment", SerializerKeys::CODE_ALIMENT);
        $this->assertEquals("citationRef", SerializerKeys::CITATION_REF);
        $this->assertEquals("codeConfiance", SerializerKeys::CODE_CONFIANCE);
        $this->assertEquals("codeConstituant", SerializerKeys::CODE_CONSTITUANT);
        $this->assertEquals("codeGroupe", SerializerKeys::CODE_GROUPE);
        $this->assertEquals("codeSource", SerializerKeys::CODE_SOURCE);
        $this->assertEquals("codeSousGroupe", SerializerKeys::CODE_SOUS_GROUPE);
        $this->assertEquals("codeSousSousGroupe", SerializerKeys::CODE_SOUS_SOUS_GROUPE);
        $this->assertEquals("max", SerializerKeys::MAX);
        $this->assertEquals("min", SerializerKeys::MIN);
        $this->assertEquals("nomEng", SerializerKeys::NOM_ENG);
        $this->assertEquals("nomEngSousGroupe", SerializerKeys::NOM_ENG_SOUS_GROUPE);
        $this->assertEquals("nomEngSousSousGroupe", SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE);
        $this->assertEquals("nomFr", SerializerKeys::NOM_FR);
        $this->assertEquals("nomFrSousGroupe", SerializerKeys::NOM_FR_SOUS_GROUPE);
        $this->assertEquals("nomFrSousSousGroupe", SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE);
        $this->assertEquals("nomIndexFr", SerializerKeys::NOM_INDEX_FR);
        $this->assertEquals("teneur", SerializerKeys::TENEUR);
    }
}
