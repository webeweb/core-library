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
 * Impot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImpotTrait {

    /**
     * Impot.
     *
     * @var string
     */
    private $impot;

    /**
     * Get the impot.
     *
     * @return string Returns the impot.
     */
    public function getImpot() {
        return $this->impot;
    }

    /**
     * Set the impot.
     *
     * @param string $impot The impot.
     */
    public function setImpot($impot) {
        $this->impot = $impot;
        return $this;
    }
}
