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
 * Compte tva achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvaAchatTrait {

    /**
     * Compte tva achat.
     *
     * @var string
     */
    private $compteTvaAchat;

    /**
     * Get the compte tva achat.
     *
     * @return string Returns the compte tva achat.
     */
    public function getCompteTvaAchat() {
        return $this->compteTvaAchat;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string $compteTvaAchat The compte tva achat.
     */
    public function setCompteTvaAchat($compteTvaAchat) {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }
}
