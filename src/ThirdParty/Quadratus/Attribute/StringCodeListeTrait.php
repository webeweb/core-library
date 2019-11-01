<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Code liste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeListeTrait {

    /**
     * Code liste.
     *
     * @var string
     */
    private $codeListe;

    /**
     * Get the code liste.
     *
     * @return string Returns the code liste.
     */
    public function getCodeListe() {
        return $this->codeListe;
    }

    /**
     * Set the code liste.
     *
     * @param string $codeListe The code liste.
     */
    public function setCodeListe($codeListe) {
        $this->codeListe = $codeListe;
        return $this;
    }
}
