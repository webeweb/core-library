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
 * Multi ech client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiEchClientTrait {

    /**
     * Multi ech client.
     *
     * @var bool
     */
    private $multiEchClient;

    /**
     * Get the multi ech client.
     *
     * @return bool Returns the multi ech client.
     */
    public function getMultiEchClient() {
        return $this->multiEchClient;
    }

    /**
     * Set the multi ech client.
     *
     * @param bool $multiEchClient The multi ech client.
     */
    public function setMultiEchClient($multiEchClient) {
        $this->multiEchClient = $multiEchClient;
        return $this;
    }
}
