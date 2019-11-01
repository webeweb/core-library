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
 * Ligne bul euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLigneBulEuroTrait {

    /**
     * Ligne bul euro.
     *
     * @var bool
     */
    private $ligneBulEuro;

    /**
     * Get the ligne bul euro.
     *
     * @return bool Returns the ligne bul euro.
     */
    public function getLigneBulEuro() {
        return $this->ligneBulEuro;
    }

    /**
     * Set the ligne bul euro.
     *
     * @param bool $ligneBulEuro The ligne bul euro.
     */
    public function setLigneBulEuro($ligneBulEuro) {
        $this->ligneBulEuro = $ligneBulEuro;
        return $this;
    }
}
