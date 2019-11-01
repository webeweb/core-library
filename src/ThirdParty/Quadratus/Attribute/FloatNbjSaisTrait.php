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
 * Nbj sais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbjSaisTrait {

    /**
     * Nbj sais.
     *
     * @var float
     */
    private $nbjSais;

    /**
     * Get the nbj sais.
     *
     * @return float Returns the nbj sais.
     */
    public function getNbjSais() {
        return $this->nbjSais;
    }

    /**
     * Set the nbj sais.
     *
     * @param float $nbjSais The nbj sais.
     */
    public function setNbjSais($nbjSais) {
        $this->nbjSais = $nbjSais;
        return $this;
    }
}
