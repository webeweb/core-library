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
 * Num compte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCompteAchatTrait {

    /**
     * Num compte achat.
     *
     * @var string
     */
    private $numCompteAchat;

    /**
     * Get the num compte achat.
     *
     * @return string Returns the num compte achat.
     */
    public function getNumCompteAchat() {
        return $this->numCompteAchat;
    }

    /**
     * Set the num compte achat.
     *
     * @param string $numCompteAchat The num compte achat.
     */
    public function setNumCompteAchat($numCompteAchat) {
        $this->numCompteAchat = $numCompteAchat;
        return $this;
    }
}
