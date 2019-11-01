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
 * Ss famille achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSsFamilleAchatTrait {

    /**
     * Ss famille achat.
     *
     * @var string
     */
    private $ssFamilleAchat;

    /**
     * Get the ss famille achat.
     *
     * @return string Returns the ss famille achat.
     */
    public function getSsFamilleAchat() {
        return $this->ssFamilleAchat;
    }

    /**
     * Set the ss famille achat.
     *
     * @param string $ssFamilleAchat The ss famille achat.
     */
    public function setSsFamilleAchat($ssFamilleAchat) {
        $this->ssFamilleAchat = $ssFamilleAchat;
        return $this;
    }
}
