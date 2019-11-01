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
 * Devis vm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDevisVmTrait {

    /**
     * Devis vm.
     *
     * @var bool
     */
    private $devisVm;

    /**
     * Get the devis vm.
     *
     * @return bool Returns the devis vm.
     */
    public function getDevisVm() {
        return $this->devisVm;
    }

    /**
     * Set the devis vm.
     *
     * @param bool $devisVm The devis vm.
     */
    public function setDevisVm($devisVm) {
        $this->devisVm = $devisVm;
        return $this;
    }
}
