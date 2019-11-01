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
 * Coeff sur px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCoeffSurPxAchatTrait {

    /**
     * Coeff sur px achat.
     *
     * @var string
     */
    private $coeffSurPxAchat;

    /**
     * Get the coeff sur px achat.
     *
     * @return string Returns the coeff sur px achat.
     */
    public function getCoeffSurPxAchat() {
        return $this->coeffSurPxAchat;
    }

    /**
     * Set the coeff sur px achat.
     *
     * @param string $coeffSurPxAchat The coeff sur px achat.
     */
    public function setCoeffSurPxAchat($coeffSurPxAchat) {
        $this->coeffSurPxAchat = $coeffSurPxAchat;
        return $this;
    }
}
