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
 * A publier espace client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAPublierEspaceClientTrait {

    /**
     * A publier espace client.
     *
     * @var bool
     */
    private $aPublierEspaceClient;

    /**
     * Get the a publier espace client.
     *
     * @return bool Returns the a publier espace client.
     */
    public function getAPublierEspaceClient() {
        return $this->aPublierEspaceClient;
    }

    /**
     * Set the a publier espace client.
     *
     * @param bool $aPublierEspaceClient The a publier espace client.
     */
    public function setAPublierEspaceClient($aPublierEspaceClient) {
        $this->aPublierEspaceClient = $aPublierEspaceClient;
        return $this;
    }
}
