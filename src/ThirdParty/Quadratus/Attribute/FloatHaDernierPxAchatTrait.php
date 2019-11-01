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
 * Ha dernier px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaDernierPxAchatTrait {

    /**
     * Ha dernier px achat.
     *
     * @var float
     */
    private $haDernierPxAchat;

    /**
     * Get the ha dernier px achat.
     *
     * @return float Returns the ha dernier px achat.
     */
    public function getHaDernierPxAchat() {
        return $this->haDernierPxAchat;
    }

    /**
     * Set the ha dernier px achat.
     *
     * @param float $haDernierPxAchat The ha dernier px achat.
     */
    public function setHaDernierPxAchat($haDernierPxAchat) {
        $this->haDernierPxAchat = $haDernierPxAchat;
        return $this;
    }
}
