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
 * Maj dernier prix achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajDernierPrixAchatTrait {

    /**
     * Maj dernier prix achat.
     *
     * @var bool
     */
    private $majDernierPrixAchat;

    /**
     * Get the maj dernier prix achat.
     *
     * @return bool Returns the maj dernier prix achat.
     */
    public function getMajDernierPrixAchat() {
        return $this->majDernierPrixAchat;
    }

    /**
     * Set the maj dernier prix achat.
     *
     * @param bool $majDernierPrixAchat The maj dernier prix achat.
     */
    public function setMajDernierPrixAchat($majDernierPrixAchat) {
        $this->majDernierPrixAchat = $majDernierPrixAchat;
        return $this;
    }
}
