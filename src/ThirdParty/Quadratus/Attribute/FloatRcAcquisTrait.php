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
 * Rc acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRcAcquisTrait {

    /**
     * Rc acquis.
     *
     * @var float
     */
    private $rcAcquis;

    /**
     * Get the rc acquis.
     *
     * @return float Returns the rc acquis.
     */
    public function getRcAcquis() {
        return $this->rcAcquis;
    }

    /**
     * Set the rc acquis.
     *
     * @param float $rcAcquis The rc acquis.
     */
    public function setRcAcquis($rcAcquis) {
        $this->rcAcquis = $rcAcquis;
        return $this;
    }
}
