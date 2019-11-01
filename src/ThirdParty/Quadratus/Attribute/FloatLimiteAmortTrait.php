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
 * Limite amort trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatLimiteAmortTrait {

    /**
     * Limite amort.
     *
     * @var float
     */
    private $limiteAmort;

    /**
     * Get the limite amort.
     *
     * @return float Returns the limite amort.
     */
    public function getLimiteAmort() {
        return $this->limiteAmort;
    }

    /**
     * Set the limite amort.
     *
     * @param float $limiteAmort The limite amort.
     */
    public function setLimiteAmort($limiteAmort) {
        $this->limiteAmort = $limiteAmort;
        return $this;
    }
}
