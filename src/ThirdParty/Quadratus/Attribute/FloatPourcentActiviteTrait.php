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
 * Pourcent activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentActiviteTrait {

    /**
     * Pourcent activite.
     *
     * @var float
     */
    private $pourcentActivite;

    /**
     * Get the pourcent activite.
     *
     * @return float Returns the pourcent activite.
     */
    public function getPourcentActivite() {
        return $this->pourcentActivite;
    }

    /**
     * Set the pourcent activite.
     *
     * @param float $pourcentActivite The pourcent activite.
     */
    public function setPourcentActivite($pourcentActivite) {
        $this->pourcentActivite = $pourcentActivite;
        return $this;
    }
}
