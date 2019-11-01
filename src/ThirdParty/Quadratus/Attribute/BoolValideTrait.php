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
 * Valide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolValideTrait {

    /**
     * Valide.
     *
     * @var bool
     */
    private $valide;

    /**
     * Get the valide.
     *
     * @return bool Returns the valide.
     */
    public function getValide() {
        return $this->valide;
    }

    /**
     * Set the valide.
     *
     * @param bool $valide The valide.
     */
    public function setValide($valide) {
        $this->valide = $valide;
        return $this;
    }
}
