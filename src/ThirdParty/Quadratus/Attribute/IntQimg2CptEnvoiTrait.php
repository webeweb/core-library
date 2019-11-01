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
 * Qimg2 cpt envoi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQimg2CptEnvoiTrait {

    /**
     * Qimg2 cpt envoi.
     *
     * @var int
     */
    private $qimg2CptEnvoi;

    /**
     * Get the qimg2 cpt envoi.
     *
     * @return int Returns the qimg2 cpt envoi.
     */
    public function getQimg2CptEnvoi() {
        return $this->qimg2CptEnvoi;
    }

    /**
     * Set the qimg2 cpt envoi.
     *
     * @param int $qimg2CptEnvoi The qimg2 cpt envoi.
     */
    public function setQimg2CptEnvoi($qimg2CptEnvoi) {
        $this->qimg2CptEnvoi = $qimg2CptEnvoi;
        return $this;
    }
}
