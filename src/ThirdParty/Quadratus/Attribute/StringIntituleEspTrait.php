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
 * Intitule esp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleEspTrait {

    /**
     * Intitule esp.
     *
     * @var string
     */
    private $intituleEsp;

    /**
     * Get the intitule esp.
     *
     * @return string Returns the intitule esp.
     */
    public function getIntituleEsp() {
        return $this->intituleEsp;
    }

    /**
     * Set the intitule esp.
     *
     * @param string $intituleEsp The intitule esp.
     */
    public function setIntituleEsp($intituleEsp) {
        $this->intituleEsp = $intituleEsp;
        return $this;
    }
}
