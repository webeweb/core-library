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
 * Imprimante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImprimanteTrait {

    /**
     * Imprimante.
     *
     * @var string
     */
    private $imprimante;

    /**
     * Get the imprimante.
     *
     * @return string Returns the imprimante.
     */
    public function getImprimante() {
        return $this->imprimante;
    }

    /**
     * Set the imprimante.
     *
     * @param string $imprimante The imprimante.
     */
    public function setImprimante($imprimante) {
        $this->imprimante = $imprimante;
        return $this;
    }
}
