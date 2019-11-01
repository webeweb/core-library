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
 * Msg client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMsgClientTrait {

    /**
     * Msg client.
     *
     * @var string
     */
    private $msgClient;

    /**
     * Get the msg client.
     *
     * @return string Returns the msg client.
     */
    public function getMsgClient() {
        return $this->msgClient;
    }

    /**
     * Set the msg client.
     *
     * @param string $msgClient The msg client.
     */
    public function setMsgClient($msgClient) {
        $this->msgClient = $msgClient;
        return $this;
    }
}
