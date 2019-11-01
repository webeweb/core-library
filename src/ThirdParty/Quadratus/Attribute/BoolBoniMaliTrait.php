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
 * Boni mali trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBoniMaliTrait {

    /**
     * Boni mali.
     *
     * @var bool
     */
    private $boniMali;

    /**
     * Get the boni mali.
     *
     * @return bool Returns the boni mali.
     */
    public function getBoniMali() {
        return $this->boniMali;
    }

    /**
     * Set the boni mali.
     *
     * @param bool $boniMali The boni mali.
     */
    public function setBoniMali($boniMali) {
        $this->boniMali = $boniMali;
        return $this;
    }
}
