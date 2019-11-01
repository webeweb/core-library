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
 * Calcul nombre messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculNombreMessagesTrait {

    /**
     * Calcul nombre messages.
     *
     * @var bool
     */
    private $calculNombreMessages;

    /**
     * Get the calcul nombre messages.
     *
     * @return bool Returns the calcul nombre messages.
     */
    public function getCalculNombreMessages() {
        return $this->calculNombreMessages;
    }

    /**
     * Set the calcul nombre messages.
     *
     * @param bool $calculNombreMessages The calcul nombre messages.
     */
    public function setCalculNombreMessages($calculNombreMessages) {
        $this->calculNombreMessages = $calculNombreMessages;
        return $this;
    }
}
