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
 * Preavis non effectue paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreavisNonEffectuePayeTrait {

    /**
     * Preavis non effectue paye.
     *
     * @var bool
     */
    private $preavisNonEffectuePaye;

    /**
     * Get the preavis non effectue paye.
     *
     * @return bool Returns the preavis non effectue paye.
     */
    public function getPreavisNonEffectuePaye() {
        return $this->preavisNonEffectuePaye;
    }

    /**
     * Set the preavis non effectue paye.
     *
     * @param bool $preavisNonEffectuePaye The preavis non effectue paye.
     */
    public function setPreavisNonEffectuePaye($preavisNonEffectuePaye) {
        $this->preavisNonEffectuePaye = $preavisNonEffectuePaye;
        return $this;
    }
}
