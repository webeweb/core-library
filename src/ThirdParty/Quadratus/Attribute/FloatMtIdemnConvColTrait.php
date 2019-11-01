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
 * Mt idemn conv col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIdemnConvColTrait {

    /**
     * Mt idemn conv col.
     *
     * @var float
     */
    private $mtIdemnConvCol;

    /**
     * Get the mt idemn conv col.
     *
     * @return float Returns the mt idemn conv col.
     */
    public function getMtIdemnConvCol() {
        return $this->mtIdemnConvCol;
    }

    /**
     * Set the mt idemn conv col.
     *
     * @param float $mtIdemnConvCol The mt idemn conv col.
     */
    public function setMtIdemnConvCol($mtIdemnConvCol) {
        $this->mtIdemnConvCol = $mtIdemnConvCol;
        return $this;
    }
}
