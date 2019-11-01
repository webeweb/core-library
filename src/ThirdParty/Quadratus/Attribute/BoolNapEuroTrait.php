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
 * Nap euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNapEuroTrait {

    /**
     * Nap euro.
     *
     * @var bool
     */
    private $napEuro;

    /**
     * Get the nap euro.
     *
     * @return bool Returns the nap euro.
     */
    public function getNapEuro() {
        return $this->napEuro;
    }

    /**
     * Set the nap euro.
     *
     * @param bool $napEuro The nap euro.
     */
    public function setNapEuro($napEuro) {
        $this->napEuro = $napEuro;
        return $this;
    }
}
