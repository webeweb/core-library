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
 * En euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnEuroTrait {

    /**
     * En euro.
     *
     * @var bool
     */
    private $enEuro;

    /**
     * Get the en euro.
     *
     * @return bool Returns the en euro.
     */
    public function getEnEuro() {
        return $this->enEuro;
    }

    /**
     * Set the en euro.
     *
     * @param bool $enEuro The en euro.
     */
    public function setEnEuro($enEuro) {
        $this->enEuro = $enEuro;
        return $this;
    }
}
