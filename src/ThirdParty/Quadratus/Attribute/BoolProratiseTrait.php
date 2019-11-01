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
 * Proratise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProratiseTrait {

    /**
     * Proratise.
     *
     * @var bool
     */
    private $proratise;

    /**
     * Get the proratise.
     *
     * @return bool Returns the proratise.
     */
    public function getProratise() {
        return $this->proratise;
    }

    /**
     * Set the proratise.
     *
     * @param bool $proratise The proratise.
     */
    public function setProratise($proratise) {
        $this->proratise = $proratise;
        return $this;
    }
}
