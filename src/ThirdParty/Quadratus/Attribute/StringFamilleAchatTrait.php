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
 * Famille achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamilleAchatTrait {

    /**
     * Famille achat.
     *
     * @var string
     */
    private $familleAchat;

    /**
     * Get the famille achat.
     *
     * @return string Returns the famille achat.
     */
    public function getFamilleAchat() {
        return $this->familleAchat;
    }

    /**
     * Set the famille achat.
     *
     * @param string $familleAchat The famille achat.
     */
    public function setFamilleAchat($familleAchat) {
        $this->familleAchat = $familleAchat;
        return $this;
    }
}
