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
 * Avec code barre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecCodeBarreTrait {

    /**
     * Avec code barre.
     *
     * @var bool
     */
    private $avecCodeBarre;

    /**
     * Get the avec code barre.
     *
     * @return bool Returns the avec code barre.
     */
    public function getAvecCodeBarre() {
        return $this->avecCodeBarre;
    }

    /**
     * Set the avec code barre.
     *
     * @param bool $avecCodeBarre The avec code barre.
     */
    public function setAvecCodeBarre($avecCodeBarre) {
        $this->avecCodeBarre = $avecCodeBarre;
        return $this;
    }
}
