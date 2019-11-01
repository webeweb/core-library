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
 * Liaison tda trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLiaisonTdaTrait {

    /**
     * Liaison tda.
     *
     * @var bool
     */
    private $liaisonTda;

    /**
     * Get the liaison tda.
     *
     * @return bool Returns the liaison tda.
     */
    public function getLiaisonTda() {
        return $this->liaisonTda;
    }

    /**
     * Set the liaison tda.
     *
     * @param bool $liaisonTda The liaison tda.
     */
    public function setLiaisonTda($liaisonTda) {
        $this->liaisonTda = $liaisonTda;
        return $this;
    }
}
