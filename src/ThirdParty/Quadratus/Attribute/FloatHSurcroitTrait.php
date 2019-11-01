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
 * H surcroit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHSurcroitTrait {

    /**
     * H surcroit.
     *
     * @var float
     */
    private $hSurcroit;

    /**
     * Get the h surcroit.
     *
     * @return float Returns the h surcroit.
     */
    public function getHSurcroit() {
        return $this->hSurcroit;
    }

    /**
     * Set the h surcroit.
     *
     * @param float $hSurcroit The h surcroit.
     */
    public function setHSurcroit($hSurcroit) {
        $this->hSurcroit = $hSurcroit;
        return $this;
    }
}
