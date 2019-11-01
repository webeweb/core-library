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
 * Fam client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamClientTrait {

    /**
     * Fam client.
     *
     * @var string
     */
    private $famClient;

    /**
     * Get the fam client.
     *
     * @return string Returns the fam client.
     */
    public function getFamClient() {
        return $this->famClient;
    }

    /**
     * Set the fam client.
     *
     * @param string $famClient The fam client.
     */
    public function setFamClient($famClient) {
        $this->famClient = $famClient;
        return $this;
    }
}
