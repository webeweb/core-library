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
 * Mt base acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtBaseAcompteTrait {

    /**
     * Mt base acompte.
     *
     * @var float
     */
    private $mtBaseAcompte;

    /**
     * Get the mt base acompte.
     *
     * @return float Returns the mt base acompte.
     */
    public function getMtBaseAcompte() {
        return $this->mtBaseAcompte;
    }

    /**
     * Set the mt base acompte.
     *
     * @param float $mtBaseAcompte The mt base acompte.
     */
    public function setMtBaseAcompte($mtBaseAcompte) {
        $this->mtBaseAcompte = $mtBaseAcompte;
        return $this;
    }
}
