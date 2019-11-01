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
 * Num licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumLicenceTrait {

    /**
     * Num licence.
     *
     * @var string
     */
    private $numLicence;

    /**
     * Get the num licence.
     *
     * @return string Returns the num licence.
     */
    public function getNumLicence() {
        return $this->numLicence;
    }

    /**
     * Set the num licence.
     *
     * @param string $numLicence The num licence.
     */
    public function setNumLicence($numLicence) {
        $this->numLicence = $numLicence;
        return $this;
    }
}
