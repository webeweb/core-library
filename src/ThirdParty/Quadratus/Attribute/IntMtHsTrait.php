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
 * Mt hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtHsTrait {

    /**
     * Mt hs.
     *
     * @var int
     */
    private $mtHs;

    /**
     * Get the mt hs.
     *
     * @return int Returns the mt hs.
     */
    public function getMtHs() {
        return $this->mtHs;
    }

    /**
     * Set the mt hs.
     *
     * @param int $mtHs The mt hs.
     */
    public function setMtHs($mtHs) {
        $this->mtHs = $mtHs;
        return $this;
    }
}
