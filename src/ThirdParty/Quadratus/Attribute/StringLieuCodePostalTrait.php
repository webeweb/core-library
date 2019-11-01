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
 * Lieu code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuCodePostalTrait {

    /**
     * Lieu code postal.
     *
     * @var string
     */
    private $lieuCodePostal;

    /**
     * Get the lieu code postal.
     *
     * @return string Returns the lieu code postal.
     */
    public function getLieuCodePostal() {
        return $this->lieuCodePostal;
    }

    /**
     * Set the lieu code postal.
     *
     * @param string $lieuCodePostal The lieu code postal.
     */
    public function setLieuCodePostal($lieuCodePostal) {
        $this->lieuCodePostal = $lieuCodePostal;
        return $this;
    }
}
