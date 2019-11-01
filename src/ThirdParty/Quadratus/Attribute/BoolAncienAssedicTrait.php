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
 * Ancien assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAncienAssedicTrait {

    /**
     * Ancien assedic.
     *
     * @var bool
     */
    private $ancienAssedic;

    /**
     * Get the ancien assedic.
     *
     * @return bool Returns the ancien assedic.
     */
    public function getAncienAssedic() {
        return $this->ancienAssedic;
    }

    /**
     * Set the ancien assedic.
     *
     * @param bool $ancienAssedic The ancien assedic.
     */
    public function setAncienAssedic($ancienAssedic) {
        $this->ancienAssedic = $ancienAssedic;
        return $this;
    }
}
