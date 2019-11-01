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
 * Euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEuroTrait {

    /**
     * Euro.
     *
     * @var bool
     */
    private $euro;

    /**
     * Get the euro.
     *
     * @return bool Returns the euro.
     */
    public function getEuro() {
        return $this->euro;
    }

    /**
     * Set the euro.
     *
     * @param bool $euro The euro.
     */
    public function setEuro($euro) {
        $this->euro = $euro;
        return $this;
    }
}
