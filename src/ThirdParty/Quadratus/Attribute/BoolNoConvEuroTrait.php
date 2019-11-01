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
 * No conv euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNoConvEuroTrait {

    /**
     * No conv euro.
     *
     * @var bool
     */
    private $noConvEuro;

    /**
     * Get the no conv euro.
     *
     * @return bool Returns the no conv euro.
     */
    public function getNoConvEuro() {
        return $this->noConvEuro;
    }

    /**
     * Set the no conv euro.
     *
     * @param bool $noConvEuro The no conv euro.
     */
    public function setNoConvEuro($noConvEuro) {
        $this->noConvEuro = $noConvEuro;
        return $this;
    }
}
