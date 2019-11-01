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
 * Fait isr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitIsrTrait {

    /**
     * Fait isr.
     *
     * @var string
     */
    private $faitIsr;

    /**
     * Get the fait isr.
     *
     * @return string Returns the fait isr.
     */
    public function getFaitIsr() {
        return $this->faitIsr;
    }

    /**
     * Set the fait isr.
     *
     * @param string $faitIsr The fait isr.
     */
    public function setFaitIsr($faitIsr) {
        $this->faitIsr = $faitIsr;
        return $this;
    }
}
