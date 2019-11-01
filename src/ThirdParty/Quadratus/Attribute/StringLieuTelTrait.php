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
 * Lieu tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuTelTrait {

    /**
     * Lieu tel.
     *
     * @var string
     */
    private $lieuTel;

    /**
     * Get the lieu tel.
     *
     * @return string Returns the lieu tel.
     */
    public function getLieuTel() {
        return $this->lieuTel;
    }

    /**
     * Set the lieu tel.
     *
     * @param string $lieuTel The lieu tel.
     */
    public function setLieuTel($lieuTel) {
        $this->lieuTel = $lieuTel;
        return $this;
    }
}
