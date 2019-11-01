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
 * Compte charge aen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeAenTrait {

    /**
     * Compte charge aen.
     *
     * @var string
     */
    private $compteChargeAen;

    /**
     * Get the compte charge aen.
     *
     * @return string Returns the compte charge aen.
     */
    public function getCompteChargeAen() {
        return $this->compteChargeAen;
    }

    /**
     * Set the compte charge aen.
     *
     * @param string $compteChargeAen The compte charge aen.
     */
    public function setCompteChargeAen($compteChargeAen) {
        $this->compteChargeAen = $compteChargeAen;
        return $this;
    }
}
