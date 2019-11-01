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
 * Type evt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEvtTrait {

    /**
     * Type evt.
     *
     * @var string
     */
    private $typeEvt;

    /**
     * Get the type evt.
     *
     * @return string Returns the type evt.
     */
    public function getTypeEvt() {
        return $this->typeEvt;
    }

    /**
     * Set the type evt.
     *
     * @param string $typeEvt The type evt.
     */
    public function setTypeEvt($typeEvt) {
        $this->typeEvt = $typeEvt;
        return $this;
    }
}
