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
 * Numero reclam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroReclamTrait {

    /**
     * Numero reclam.
     *
     * @var int
     */
    private $numeroReclam;

    /**
     * Get the numero reclam.
     *
     * @return int Returns the numero reclam.
     */
    public function getNumeroReclam() {
        return $this->numeroReclam;
    }

    /**
     * Set the numero reclam.
     *
     * @param int $numeroReclam The numero reclam.
     */
    public function setNumeroReclam($numeroReclam) {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }
}
