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
 * Exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoTrait {

    /**
     * Exo.
     *
     * @var bool
     */
    private $exo;

    /**
     * Get the exo.
     *
     * @return bool Returns the exo.
     */
    public function getExo() {
        return $this->exo;
    }

    /**
     * Set the exo.
     *
     * @param bool $exo The exo.
     */
    public function setExo($exo) {
        $this->exo = $exo;
        return $this;
    }
}
