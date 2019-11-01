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
 * Nb jh exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJhExoTrait {

    /**
     * Nb jh exo.
     *
     * @var float
     */
    private $nbJhExo;

    /**
     * Get the nb jh exo.
     *
     * @return float Returns the nb jh exo.
     */
    public function getNbJhExo() {
        return $this->nbJhExo;
    }

    /**
     * Set the nb jh exo.
     *
     * @param float $nbJhExo The nb jh exo.
     */
    public function setNbJhExo($nbJhExo) {
        $this->nbJhExo = $nbJhExo;
        return $this;
    }
}
