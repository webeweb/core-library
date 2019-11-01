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
 * H sup a comptabiliser rcit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHSupAComptabiliserRcitTrait {

    /**
     * H sup a comptabiliser rcit.
     *
     * @var float
     */
    private $hSupAComptabiliserRcit;

    /**
     * Get the h sup a comptabiliser rcit.
     *
     * @return float Returns the h sup a comptabiliser rcit.
     */
    public function getHSupAComptabiliserRcit() {
        return $this->hSupAComptabiliserRcit;
    }

    /**
     * Set the h sup a comptabiliser rcit.
     *
     * @param float $hSupAComptabiliserRcit The h sup a comptabiliser rcit.
     */
    public function setHSupAComptabiliserRcit($hSupAComptabiliserRcit) {
        $this->hSupAComptabiliserRcit = $hSupAComptabiliserRcit;
        return $this;
    }
}
