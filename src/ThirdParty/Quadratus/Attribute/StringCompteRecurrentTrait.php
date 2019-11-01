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
 * Compte recurrent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteRecurrentTrait {

    /**
     * Compte recurrent.
     *
     * @var string
     */
    private $compteRecurrent;

    /**
     * Get the compte recurrent.
     *
     * @return string Returns the compte recurrent.
     */
    public function getCompteRecurrent() {
        return $this->compteRecurrent;
    }

    /**
     * Set the compte recurrent.
     *
     * @param string $compteRecurrent The compte recurrent.
     */
    public function setCompteRecurrent($compteRecurrent) {
        $this->compteRecurrent = $compteRecurrent;
        return $this;
    }
}
