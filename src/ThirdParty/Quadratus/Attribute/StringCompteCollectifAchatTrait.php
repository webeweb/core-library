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
 * Compte collectif achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCollectifAchatTrait {

    /**
     * Compte collectif achat.
     *
     * @var string
     */
    private $compteCollectifAchat;

    /**
     * Get the compte collectif achat.
     *
     * @return string Returns the compte collectif achat.
     */
    public function getCompteCollectifAchat() {
        return $this->compteCollectifAchat;
    }

    /**
     * Set the compte collectif achat.
     *
     * @param string $compteCollectifAchat The compte collectif achat.
     */
    public function setCompteCollectifAchat($compteCollectifAchat) {
        $this->compteCollectifAchat = $compteCollectifAchat;
        return $this;
    }
}
