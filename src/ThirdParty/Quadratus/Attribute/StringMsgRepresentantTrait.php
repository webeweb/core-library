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
 * Msg representant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMsgRepresentantTrait {

    /**
     * Msg representant.
     *
     * @var string
     */
    private $msgRepresentant;

    /**
     * Get the msg representant.
     *
     * @return string Returns the msg representant.
     */
    public function getMsgRepresentant() {
        return $this->msgRepresentant;
    }

    /**
     * Set the msg representant.
     *
     * @param string $msgRepresentant The msg representant.
     */
    public function setMsgRepresentant($msgRepresentant) {
        $this->msgRepresentant = $msgRepresentant;
        return $this;
    }
}
