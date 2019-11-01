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
 * Identification trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdentificationTrait {

    /**
     * Identification.
     *
     * @var string
     */
    private $identification;

    /**
     * Get the identification.
     *
     * @return string Returns the identification.
     */
    public function getIdentification() {
        return $this->identification;
    }

    /**
     * Set the identification.
     *
     * @param string $identification The identification.
     */
    public function setIdentification($identification) {
        $this->identification = $identification;
        return $this;
    }
}
