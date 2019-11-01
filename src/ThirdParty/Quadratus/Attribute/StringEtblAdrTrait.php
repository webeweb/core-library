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
 * Etbl adr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAdrTrait {

    /**
     * Etbl adr.
     *
     * @var string
     */
    private $etblAdr;

    /**
     * Get the etbl adr.
     *
     * @return string Returns the etbl adr.
     */
    public function getEtblAdr() {
        return $this->etblAdr;
    }

    /**
     * Set the etbl adr.
     *
     * @param string $etblAdr The etbl adr.
     */
    public function setEtblAdr($etblAdr) {
        $this->etblAdr = $etblAdr;
        return $this;
    }
}
