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
 * H majo pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHMajoPrisTrait {

    /**
     * H majo pris.
     *
     * @var float
     */
    private $hMajoPris;

    /**
     * Get the h majo pris.
     *
     * @return float Returns the h majo pris.
     */
    public function getHMajoPris() {
        return $this->hMajoPris;
    }

    /**
     * Set the h majo pris.
     *
     * @param float $hMajoPris The h majo pris.
     */
    public function setHMajoPris($hMajoPris) {
        $this->hMajoPris = $hMajoPris;
        return $this;
    }
}
