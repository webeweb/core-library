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
 * Mt csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtCsgTrait {

    /**
     * Mt csg.
     *
     * @var int
     */
    private $mtCsg;

    /**
     * Get the mt csg.
     *
     * @return int Returns the mt csg.
     */
    public function getMtCsg() {
        return $this->mtCsg;
    }

    /**
     * Set the mt csg.
     *
     * @param int $mtCsg The mt csg.
     */
    public function setMtCsg($mtCsg) {
        $this->mtCsg = $mtCsg;
        return $this;
    }
}
