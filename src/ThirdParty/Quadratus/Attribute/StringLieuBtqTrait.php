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
 * Lieu btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuBtqTrait {

    /**
     * Lieu btq.
     *
     * @var string
     */
    private $lieuBtq;

    /**
     * Get the lieu btq.
     *
     * @return string Returns the lieu btq.
     */
    public function getLieuBtq() {
        return $this->lieuBtq;
    }

    /**
     * Set the lieu btq.
     *
     * @param string $lieuBtq The lieu btq.
     */
    public function setLieuBtq($lieuBtq) {
        $this->lieuBtq = $lieuBtq;
        return $this;
    }
}
