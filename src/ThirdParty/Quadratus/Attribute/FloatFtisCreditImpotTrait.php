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
 * Ftis credit impot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFtisCreditImpotTrait {

    /**
     * Ftis credit impot.
     *
     * @var float
     */
    private $ftisCreditImpot;

    /**
     * Get the ftis credit impot.
     *
     * @return float Returns the ftis credit impot.
     */
    public function getFtisCreditImpot() {
        return $this->ftisCreditImpot;
    }

    /**
     * Set the ftis credit impot.
     *
     * @param float $ftisCreditImpot The ftis credit impot.
     */
    public function setFtisCreditImpot($ftisCreditImpot) {
        $this->ftisCreditImpot = $ftisCreditImpot;
        return $this;
    }
}
