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
 * Exclure das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureDasTrait {

    /**
     * Exclure das.
     *
     * @var bool
     */
    private $exclureDas;

    /**
     * Get the exclure das.
     *
     * @return bool Returns the exclure das.
     */
    public function getExclureDas() {
        return $this->exclureDas;
    }

    /**
     * Set the exclure das.
     *
     * @param bool $exclureDas The exclure das.
     */
    public function setExclureDas($exclureDas) {
        $this->exclureDas = $exclureDas;
        return $this;
    }
}
