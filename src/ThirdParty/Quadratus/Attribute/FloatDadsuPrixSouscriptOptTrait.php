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
 * Dadsu prix souscript opt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDadsuPrixSouscriptOptTrait {

    /**
     * Dadsu prix souscript opt.
     *
     * @var float
     */
    private $dadsuPrixSouscriptOpt;

    /**
     * Get the dadsu prix souscript opt.
     *
     * @return float Returns the dadsu prix souscript opt.
     */
    public function getDadsuPrixSouscriptOpt() {
        return $this->dadsuPrixSouscriptOpt;
    }

    /**
     * Set the dadsu prix souscript opt.
     *
     * @param float $dadsuPrixSouscriptOpt The dadsu prix souscript opt.
     */
    public function setDadsuPrixSouscriptOpt($dadsuPrixSouscriptOpt) {
        $this->dadsuPrixSouscriptOpt = $dadsuPrixSouscriptOpt;
        return $this;
    }
}
