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
 * Preavis effectue paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreavisEffectuePayeTrait {

    /**
     * Preavis effectue paye.
     *
     * @var bool
     */
    private $preavisEffectuePaye;

    /**
     * Get the preavis effectue paye.
     *
     * @return bool Returns the preavis effectue paye.
     */
    public function getPreavisEffectuePaye() {
        return $this->preavisEffectuePaye;
    }

    /**
     * Set the preavis effectue paye.
     *
     * @param bool $preavisEffectuePaye The preavis effectue paye.
     */
    public function setPreavisEffectuePaye($preavisEffectuePaye) {
        $this->preavisEffectuePaye = $preavisEffectuePaye;
        return $this;
    }
}
