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
 * Tva code cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeCabinetTrait {

    /**
     * Tva code cabinet.
     *
     * @var string
     */
    private $tvaCodeCabinet;

    /**
     * Get the tva code cabinet.
     *
     * @return string Returns the tva code cabinet.
     */
    public function getTvaCodeCabinet() {
        return $this->tvaCodeCabinet;
    }

    /**
     * Set the tva code cabinet.
     *
     * @param string $tvaCodeCabinet The tva code cabinet.
     */
    public function setTvaCodeCabinet($tvaCodeCabinet) {
        $this->tvaCodeCabinet = $tvaCodeCabinet;
        return $this;
    }
}
