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
 * Msg redir auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMsgRedirAutoTrait {

    /**
     * Msg redir auto.
     *
     * @var bool
     */
    private $msgRedirAuto;

    /**
     * Get the msg redir auto.
     *
     * @return bool Returns the msg redir auto.
     */
    public function getMsgRedirAuto() {
        return $this->msgRedirAuto;
    }

    /**
     * Set the msg redir auto.
     *
     * @param bool $msgRedirAuto The msg redir auto.
     */
    public function setMsgRedirAuto($msgRedirAuto) {
        $this->msgRedirAuto = $msgRedirAuto;
        return $this;
    }
}
