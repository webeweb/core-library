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
 * Rbt non proratise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRbtNonProratiseTrait {

    /**
     * Rbt non proratise.
     *
     * @var bool
     */
    private $rbtNonProratise;

    /**
     * Get the rbt non proratise.
     *
     * @return bool Returns the rbt non proratise.
     */
    public function getRbtNonProratise() {
        return $this->rbtNonProratise;
    }

    /**
     * Set the rbt non proratise.
     *
     * @param bool $rbtNonProratise The rbt non proratise.
     */
    public function setRbtNonProratise($rbtNonProratise) {
        $this->rbtNonProratise = $rbtNonProratise;
        return $this;
    }
}
