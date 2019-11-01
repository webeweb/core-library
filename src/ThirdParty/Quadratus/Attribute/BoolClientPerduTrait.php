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
 * Client perdu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolClientPerduTrait {

    /**
     * Client perdu.
     *
     * @var bool
     */
    private $clientPerdu;

    /**
     * Get the client perdu.
     *
     * @return bool Returns the client perdu.
     */
    public function getClientPerdu() {
        return $this->clientPerdu;
    }

    /**
     * Set the client perdu.
     *
     * @param bool $clientPerdu The client perdu.
     */
    public function setClientPerdu($clientPerdu) {
        $this->clientPerdu = $clientPerdu;
        return $this;
    }
}
