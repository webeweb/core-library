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
 * Desactiver filtre msg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDesactiverFiltreMsgTrait {

    /**
     * Desactiver filtre msg.
     *
     * @var bool
     */
    private $desactiverFiltreMsg;

    /**
     * Get the desactiver filtre msg.
     *
     * @return bool Returns the desactiver filtre msg.
     */
    public function getDesactiverFiltreMsg() {
        return $this->desactiverFiltreMsg;
    }

    /**
     * Set the desactiver filtre msg.
     *
     * @param bool $desactiverFiltreMsg The desactiver filtre msg.
     */
    public function setDesactiverFiltreMsg($desactiverFiltreMsg) {
        $this->desactiverFiltreMsg = $desactiverFiltreMsg;
        return $this;
    }
}
