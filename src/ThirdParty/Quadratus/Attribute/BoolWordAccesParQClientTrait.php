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
 * Word acces par q client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolWordAccesParQClientTrait {

    /**
     * Word acces par q client.
     *
     * @var bool
     */
    private $wordAccesParQClient;

    /**
     * Get the word acces par q client.
     *
     * @return bool Returns the word acces par q client.
     */
    public function getWordAccesParQClient() {
        return $this->wordAccesParQClient;
    }

    /**
     * Set the word acces par q client.
     *
     * @param bool $wordAccesParQClient The word acces par q client.
     */
    public function setWordAccesParQClient($wordAccesParQClient) {
        $this->wordAccesParQClient = $wordAccesParQClient;
        return $this;
    }
}
