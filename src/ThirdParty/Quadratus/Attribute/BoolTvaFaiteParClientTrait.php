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
 * Tva faite par client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaFaiteParClientTrait {

    /**
     * Tva faite par client.
     *
     * @var bool
     */
    private $tvaFaiteParClient;

    /**
     * Get the tva faite par client.
     *
     * @return bool Returns the tva faite par client.
     */
    public function getTvaFaiteParClient() {
        return $this->tvaFaiteParClient;
    }

    /**
     * Set the tva faite par client.
     *
     * @param bool $tvaFaiteParClient The tva faite par client.
     */
    public function setTvaFaiteParClient($tvaFaiteParClient) {
        $this->tvaFaiteParClient = $tvaFaiteParClient;
        return $this;
    }
}
