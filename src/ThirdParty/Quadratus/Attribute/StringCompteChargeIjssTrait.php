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
 * Compte charge ijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeIjssTrait {

    /**
     * Compte charge ijss.
     *
     * @var string
     */
    private $compteChargeIjss;

    /**
     * Get the compte charge ijss.
     *
     * @return string Returns the compte charge ijss.
     */
    public function getCompteChargeIjss() {
        return $this->compteChargeIjss;
    }

    /**
     * Set the compte charge ijss.
     *
     * @param string $compteChargeIjss The compte charge ijss.
     */
    public function setCompteChargeIjss($compteChargeIjss) {
        $this->compteChargeIjss = $compteChargeIjss;
        return $this;
    }
}
