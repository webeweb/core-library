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
 * Preavis non effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreavisNonEffectueTrait {

    /**
     * Preavis non effectue.
     *
     * @var bool
     */
    private $preavisNonEffectue;

    /**
     * Get the preavis non effectue.
     *
     * @return bool Returns the preavis non effectue.
     */
    public function getPreavisNonEffectue() {
        return $this->preavisNonEffectue;
    }

    /**
     * Set the preavis non effectue.
     *
     * @param bool $preavisNonEffectue The preavis non effectue.
     */
    public function setPreavisNonEffectue($preavisNonEffectue) {
        $this->preavisNonEffectue = $preavisNonEffectue;
        return $this;
    }
}
