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
 * Facture vm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFactureVmTrait {

    /**
     * Facture vm.
     *
     * @var bool
     */
    private $factureVm;

    /**
     * Get the facture vm.
     *
     * @return bool Returns the facture vm.
     */
    public function getFactureVm() {
        return $this->factureVm;
    }

    /**
     * Set the facture vm.
     *
     * @param bool $factureVm The facture vm.
     */
    public function setFactureVm($factureVm) {
        $this->factureVm = $factureVm;
        return $this;
    }
}
