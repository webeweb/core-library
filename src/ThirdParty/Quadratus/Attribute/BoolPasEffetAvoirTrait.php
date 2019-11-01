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
 * Pas effet avoir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasEffetAvoirTrait {

    /**
     * Pas effet avoir.
     *
     * @var bool
     */
    private $pasEffetAvoir;

    /**
     * Get the pas effet avoir.
     *
     * @return bool Returns the pas effet avoir.
     */
    public function getPasEffetAvoir() {
        return $this->pasEffetAvoir;
    }

    /**
     * Set the pas effet avoir.
     *
     * @param bool $pasEffetAvoir The pas effet avoir.
     */
    public function setPasEffetAvoir($pasEffetAvoir) {
        $this->pasEffetAvoir = $pasEffetAvoir;
        return $this;
    }
}
