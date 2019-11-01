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
 * Prix achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixAchatTrait {

    /**
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }
}
