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
 * Sepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSepaTrait {

    /**
     * Sepa.
     *
     * @var bool
     */
    private $sepa;

    /**
     * Get the sepa.
     *
     * @return bool Returns the sepa.
     */
    public function getSepa() {
        return $this->sepa;
    }

    /**
     * Set the sepa.
     *
     * @param bool $sepa The sepa.
     */
    public function setSepa($sepa) {
        $this->sepa = $sepa;
        return $this;
    }
}
