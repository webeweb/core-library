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
 * Rbt navigo non proratise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRbtNavigoNonProratiseTrait {

    /**
     * Rbt navigo non proratise.
     *
     * @var bool
     */
    private $rbtNavigoNonProratise;

    /**
     * Get the rbt navigo non proratise.
     *
     * @return bool Returns the rbt navigo non proratise.
     */
    public function getRbtNavigoNonProratise() {
        return $this->rbtNavigoNonProratise;
    }

    /**
     * Set the rbt navigo non proratise.
     *
     * @param bool $rbtNavigoNonProratise The rbt navigo non proratise.
     */
    public function setRbtNavigoNonProratise($rbtNavigoNonProratise) {
        $this->rbtNavigoNonProratise = $rbtNavigoNonProratise;
        return $this;
    }
}
