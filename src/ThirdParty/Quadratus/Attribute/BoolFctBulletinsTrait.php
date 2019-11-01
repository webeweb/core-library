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
 * Fct bulletins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctBulletinsTrait {

    /**
     * Fct bulletins.
     *
     * @var bool
     */
    private $fctBulletins;

    /**
     * Get the fct bulletins.
     *
     * @return bool Returns the fct bulletins.
     */
    public function getFctBulletins() {
        return $this->fctBulletins;
    }

    /**
     * Set the fct bulletins.
     *
     * @param bool $fctBulletins The fct bulletins.
     */
    public function setFctBulletins($fctBulletins) {
        $this->fctBulletins = $fctBulletins;
        return $this;
    }
}
