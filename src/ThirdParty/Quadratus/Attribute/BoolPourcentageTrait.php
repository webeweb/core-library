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
 * Pourcentage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPourcentageTrait {

    /**
     * Pourcentage.
     *
     * @var bool
     */
    private $pourcentage;

    /**
     * Get the pourcentage.
     *
     * @return bool Returns the pourcentage.
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Set the pourcentage.
     *
     * @param bool $pourcentage The pourcentage.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }
}
