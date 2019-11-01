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
 * H fin am trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHFinAmTrait {

    /**
     * H fin am.
     *
     * @var string
     */
    private $hFinAm;

    /**
     * Get the h fin am.
     *
     * @return string Returns the h fin am.
     */
    public function getHFinAm() {
        return $this->hFinAm;
    }

    /**
     * Set the h fin am.
     *
     * @param string $hFinAm The h fin am.
     */
    public function setHFinAm($hFinAm) {
        $this->hFinAm = $hFinAm;
        return $this;
    }
}
