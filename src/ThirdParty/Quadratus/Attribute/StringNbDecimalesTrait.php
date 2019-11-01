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
 * Nb decimales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecimalesTrait {

    /**
     * Nb decimales.
     *
     * @var string
     */
    private $nbDecimales;

    /**
     * Get the nb decimales.
     *
     * @return string Returns the nb decimales.
     */
    public function getNbDecimales() {
        return $this->nbDecimales;
    }

    /**
     * Set the nb decimales.
     *
     * @param string $nbDecimales The nb decimales.
     */
    public function setNbDecimales($nbDecimales) {
        $this->nbDecimales = $nbDecimales;
        return $this;
    }
}
