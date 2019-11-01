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
 * Preavis effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreavisEffectueTrait {

    /**
     * Preavis effectue.
     *
     * @var bool
     */
    private $preavisEffectue;

    /**
     * Get the preavis effectue.
     *
     * @return bool Returns the preavis effectue.
     */
    public function getPreavisEffectue() {
        return $this->preavisEffectue;
    }

    /**
     * Set the preavis effectue.
     *
     * @param bool $preavisEffectue The preavis effectue.
     */
    public function setPreavisEffectue($preavisEffectue) {
        $this->preavisEffectue = $preavisEffectue;
        return $this;
    }
}
