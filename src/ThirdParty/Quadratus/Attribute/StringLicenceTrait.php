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
 * Licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLicenceTrait {

    /**
     * Licence.
     *
     * @var string
     */
    private $licence;

    /**
     * Get the licence.
     *
     * @return string Returns the licence.
     */
    public function getLicence() {
        return $this->licence;
    }

    /**
     * Set the licence.
     *
     * @param string $licence The licence.
     */
    public function setLicence($licence) {
        $this->licence = $licence;
        return $this;
    }
}
