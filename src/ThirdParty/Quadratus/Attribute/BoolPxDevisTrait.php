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
 * Px devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPxDevisTrait {

    /**
     * Px devis.
     *
     * @var bool
     */
    private $pxDevis;

    /**
     * Get the px devis.
     *
     * @return bool Returns the px devis.
     */
    public function getPxDevis() {
        return $this->pxDevis;
    }

    /**
     * Set the px devis.
     *
     * @param bool $pxDevis The px devis.
     */
    public function setPxDevis($pxDevis) {
        $this->pxDevis = $pxDevis;
        return $this;
    }
}
