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
 * Liaison proprete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLiaisonPropreteTrait {

    /**
     * Liaison proprete.
     *
     * @var bool
     */
    private $liaisonProprete;

    /**
     * Get the liaison proprete.
     *
     * @return bool Returns the liaison proprete.
     */
    public function getLiaisonProprete() {
        return $this->liaisonProprete;
    }

    /**
     * Set the liaison proprete.
     *
     * @param bool $liaisonProprete The liaison proprete.
     */
    public function setLiaisonProprete($liaisonProprete) {
        $this->liaisonProprete = $liaisonProprete;
        return $this;
    }
}
