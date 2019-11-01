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
 * Type message trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMessageTrait {

    /**
     * Type message.
     *
     * @var string
     */
    private $typeMessage;

    /**
     * Get the type message.
     *
     * @return string Returns the type message.
     */
    public function getTypeMessage() {
        return $this->typeMessage;
    }

    /**
     * Set the type message.
     *
     * @param string $typeMessage The type message.
     */
    public function setTypeMessage($typeMessage) {
        $this->typeMessage = $typeMessage;
        return $this;
    }
}
