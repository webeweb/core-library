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
 * Client prospect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolClientProspectTrait {

    /**
     * Client prospect.
     *
     * @var bool
     */
    private $clientProspect;

    /**
     * Get the client prospect.
     *
     * @return bool Returns the client prospect.
     */
    public function getClientProspect() {
        return $this->clientProspect;
    }

    /**
     * Set the client prospect.
     *
     * @param bool $clientProspect The client prospect.
     */
    public function setClientProspect($clientProspect) {
        $this->clientProspect = $clientProspect;
        return $this;
    }
}
