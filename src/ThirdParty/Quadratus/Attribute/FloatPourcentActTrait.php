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
 * Pourcent act trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentActTrait {

    /**
     * Pourcent act.
     *
     * @var float
     */
    private $pourcentAct;

    /**
     * Get the pourcent act.
     *
     * @return float Returns the pourcent act.
     */
    public function getPourcentAct() {
        return $this->pourcentAct;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }
}
