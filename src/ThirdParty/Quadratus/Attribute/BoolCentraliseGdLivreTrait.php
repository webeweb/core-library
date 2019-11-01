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
 * Centralise gd livre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCentraliseGdLivreTrait {

    /**
     * Centralise gd livre.
     *
     * @var bool
     */
    private $centraliseGdLivre;

    /**
     * Get the centralise gd livre.
     *
     * @return bool Returns the centralise gd livre.
     */
    public function getCentraliseGdLivre() {
        return $this->centraliseGdLivre;
    }

    /**
     * Set the centralise gd livre.
     *
     * @param bool $centraliseGdLivre The centralise gd livre.
     */
    public function setCentraliseGdLivre($centraliseGdLivre) {
        $this->centraliseGdLivre = $centraliseGdLivre;
        return $this;
    }
}
