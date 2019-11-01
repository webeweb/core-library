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
 * Rff type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRffTypeTrait {

    /**
     * Rff type.
     *
     * @var int
     */
    private $rffType;

    /**
     * Get the rff type.
     *
     * @return int Returns the rff type.
     */
    public function getRffType() {
        return $this->rffType;
    }

    /**
     * Set the rff type.
     *
     * @param int $rffType The rff type.
     */
    public function setRffType($rffType) {
        $this->rffType = $rffType;
        return $this;
    }
}
