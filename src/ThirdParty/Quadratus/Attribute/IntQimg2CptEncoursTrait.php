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
 * Qimg2 cpt encours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQimg2CptEncoursTrait {

    /**
     * Qimg2 cpt encours.
     *
     * @var int
     */
    private $qimg2CptEncours;

    /**
     * Get the qimg2 cpt encours.
     *
     * @return int Returns the qimg2 cpt encours.
     */
    public function getQimg2CptEncours() {
        return $this->qimg2CptEncours;
    }

    /**
     * Set the qimg2 cpt encours.
     *
     * @param int $qimg2CptEncours The qimg2 cpt encours.
     */
    public function setQimg2CptEncours($qimg2CptEncours) {
        $this->qimg2CptEncours = $qimg2CptEncours;
        return $this;
    }
}
