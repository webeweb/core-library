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
 * Frp cle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFrpCleTrait {

    /**
     * Frp cle.
     *
     * @var string
     */
    private $frpCle;

    /**
     * Get the frp cle.
     *
     * @return string Returns the frp cle.
     */
    public function getFrpCle() {
        return $this->frpCle;
    }

    /**
     * Set the frp cle.
     *
     * @param string $frpCle The frp cle.
     */
    public function setFrpCle($frpCle) {
        $this->frpCle = $frpCle;
        return $this;
    }
}
