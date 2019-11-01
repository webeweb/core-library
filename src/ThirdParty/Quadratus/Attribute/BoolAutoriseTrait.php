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
 * Autorise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriseTrait {

    /**
     * Autorise.
     *
     * @var bool
     */
    private $autorise;

    /**
     * Get the autorise.
     *
     * @return bool Returns the autorise.
     */
    public function getAutorise() {
        return $this->autorise;
    }

    /**
     * Set the autorise.
     *
     * @param bool $autorise The autorise.
     */
    public function setAutorise($autorise) {
        $this->autorise = $autorise;
        return $this;
    }
}
