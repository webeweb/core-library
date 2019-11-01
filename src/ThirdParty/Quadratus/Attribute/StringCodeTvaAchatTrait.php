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
 * Code tva achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaAchatTrait {

    /**
     * Code tva achat.
     *
     * @var string
     */
    private $codeTvaAchat;

    /**
     * Get the code tva achat.
     *
     * @return string Returns the code tva achat.
     */
    public function getCodeTvaAchat() {
        return $this->codeTvaAchat;
    }

    /**
     * Set the code tva achat.
     *
     * @param string $codeTvaAchat The code tva achat.
     */
    public function setCodeTvaAchat($codeTvaAchat) {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }
}
