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
 * Sous fam client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSousFamClientTrait {

    /**
     * Sous fam client.
     *
     * @var string
     */
    private $sousFamClient;

    /**
     * Get the sous fam client.
     *
     * @return string Returns the sous fam client.
     */
    public function getSousFamClient() {
        return $this->sousFamClient;
    }

    /**
     * Set the sous fam client.
     *
     * @param string $sousFamClient The sous fam client.
     */
    public function setSousFamClient($sousFamClient) {
        $this->sousFamClient = $sousFamClient;
        return $this;
    }
}
