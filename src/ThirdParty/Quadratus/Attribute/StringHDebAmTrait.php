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
 * H deb am trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHDebAmTrait {

    /**
     * H deb am.
     *
     * @var string
     */
    private $hDebAm;

    /**
     * Get the h deb am.
     *
     * @return string Returns the h deb am.
     */
    public function getHDebAm() {
        return $this->hDebAm;
    }

    /**
     * Set the h deb am.
     *
     * @param string $hDebAm The h deb am.
     */
    public function setHDebAm($hDebAm) {
        $this->hDebAm = $hDebAm;
        return $this;
    }
}
