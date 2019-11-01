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
 * Caisse cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCaisseCpTrait {

    /**
     * Caisse cp.
     *
     * @var string
     */
    private $caisseCp;

    /**
     * Get the caisse cp.
     *
     * @return string Returns the caisse cp.
     */
    public function getCaisseCp() {
        return $this->caisseCp;
    }

    /**
     * Set the caisse cp.
     *
     * @param string $caisseCp The caisse cp.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }
}
