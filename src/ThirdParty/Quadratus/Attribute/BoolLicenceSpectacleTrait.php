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
 * Licence spectacle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLicenceSpectacleTrait {

    /**
     * Licence spectacle.
     *
     * @var bool
     */
    private $licenceSpectacle;

    /**
     * Get the licence spectacle.
     *
     * @return bool Returns the licence spectacle.
     */
    public function getLicenceSpectacle() {
        return $this->licenceSpectacle;
    }

    /**
     * Set the licence spectacle.
     *
     * @param bool $licenceSpectacle The licence spectacle.
     */
    public function setLicenceSpectacle($licenceSpectacle) {
        $this->licenceSpectacle = $licenceSpectacle;
        return $this;
    }
}
