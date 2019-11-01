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
 * Bt valide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBtValideTrait {

    /**
     * Bt valide.
     *
     * @var bool
     */
    private $btValide;

    /**
     * Get the bt valide.
     *
     * @return bool Returns the bt valide.
     */
    public function getBtValide() {
        return $this->btValide;
    }

    /**
     * Set the bt valide.
     *
     * @param bool $btValide The bt valide.
     */
    public function setBtValide($btValide) {
        $this->btValide = $btValide;
        return $this;
    }
}
