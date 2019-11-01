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
 * Groupe app clients trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeAppClientsTrait {

    /**
     * Groupe app clients.
     *
     * @var string
     */
    private $groupeAppClients;

    /**
     * Get the groupe app clients.
     *
     * @return string Returns the groupe app clients.
     */
    public function getGroupeAppClients() {
        return $this->groupeAppClients;
    }

    /**
     * Set the groupe app clients.
     *
     * @param string $groupeAppClients The groupe app clients.
     */
    public function setGroupeAppClients($groupeAppClients) {
        $this->groupeAppClients = $groupeAppClients;
        return $this;
    }
}
