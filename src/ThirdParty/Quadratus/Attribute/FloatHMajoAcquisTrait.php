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
 * H majo acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHMajoAcquisTrait {

    /**
     * H majo acquis.
     *
     * @var float
     */
    private $hMajoAcquis;

    /**
     * Get the h majo acquis.
     *
     * @return float Returns the h majo acquis.
     */
    public function getHMajoAcquis() {
        return $this->hMajoAcquis;
    }

    /**
     * Set the h majo acquis.
     *
     * @param float $hMajoAcquis The h majo acquis.
     */
    public function setHMajoAcquis($hMajoAcquis) {
        $this->hMajoAcquis = $hMajoAcquis;
        return $this;
    }
}
