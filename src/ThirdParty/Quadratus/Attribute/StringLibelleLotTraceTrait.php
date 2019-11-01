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
 * Libelle lot trace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleLotTraceTrait {

    /**
     * Libelle lot trace.
     *
     * @var string
     */
    private $libelleLotTrace;

    /**
     * Get the libelle lot trace.
     *
     * @return string Returns the libelle lot trace.
     */
    public function getLibelleLotTrace() {
        return $this->libelleLotTrace;
    }

    /**
     * Set the libelle lot trace.
     *
     * @param string $libelleLotTrace The libelle lot trace.
     */
    public function setLibelleLotTrace($libelleLotTrace) {
        $this->libelleLotTrace = $libelleLotTrace;
        return $this;
    }
}
