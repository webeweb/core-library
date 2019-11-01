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
 * Crr151 motif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCrr151MotifTrait {

    /**
     * Crr151 motif.
     *
     * @var bool
     */
    private $crr151Motif;

    /**
     * Get the crr151 motif.
     *
     * @return bool Returns the crr151 motif.
     */
    public function getCrr151Motif() {
        return $this->crr151Motif;
    }

    /**
     * Set the crr151 motif.
     *
     * @param bool $crr151Motif The crr151 motif.
     */
    public function setCrr151Motif($crr151Motif) {
        $this->crr151Motif = $crr151Motif;
        return $this;
    }
}
