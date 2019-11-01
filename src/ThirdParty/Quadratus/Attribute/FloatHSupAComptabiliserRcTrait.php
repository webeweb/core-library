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
 * H sup a comptabiliser rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHSupAComptabiliserRcTrait {

    /**
     * H sup a comptabiliser rc.
     *
     * @var float
     */
    private $hSupAComptabiliserRc;

    /**
     * Get the h sup a comptabiliser rc.
     *
     * @return float Returns the h sup a comptabiliser rc.
     */
    public function getHSupAComptabiliserRc() {
        return $this->hSupAComptabiliserRc;
    }

    /**
     * Set the h sup a comptabiliser rc.
     *
     * @param float $hSupAComptabiliserRc The h sup a comptabiliser rc.
     */
    public function setHSupAComptabiliserRc($hSupAComptabiliserRc) {
        $this->hSupAComptabiliserRc = $hSupAComptabiliserRc;
        return $this;
    }
}
