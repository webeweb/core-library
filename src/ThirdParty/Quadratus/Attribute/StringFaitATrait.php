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
 * Fait a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitATrait {

    /**
     * Fait a.
     *
     * @var string
     */
    private $faitA;

    /**
     * Get the fait a.
     *
     * @return string Returns the fait a.
     */
    public function getFaitA() {
        return $this->faitA;
    }

    /**
     * Set the fait a.
     *
     * @param string $faitA The fait a.
     */
    public function setFaitA($faitA) {
        $this->faitA = $faitA;
        return $this;
    }
}
