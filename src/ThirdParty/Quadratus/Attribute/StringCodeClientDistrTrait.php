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
 * Code client distr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClientDistrTrait {

    /**
     * Code client distr.
     *
     * @var string
     */
    private $codeClientDistr;

    /**
     * Get the code client distr.
     *
     * @return string Returns the code client distr.
     */
    public function getCodeClientDistr() {
        return $this->codeClientDistr;
    }

    /**
     * Set the code client distr.
     *
     * @param string $codeClientDistr The code client distr.
     */
    public function setCodeClientDistr($codeClientDistr) {
        $this->codeClientDistr = $codeClientDistr;
        return $this;
    }
}
