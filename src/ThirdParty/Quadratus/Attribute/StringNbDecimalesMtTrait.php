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
 * Nb decimales mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecimalesMtTrait {

    /**
     * Nb decimales mt.
     *
     * @var string
     */
    private $nbDecimalesMt;

    /**
     * Get the nb decimales mt.
     *
     * @return string Returns the nb decimales mt.
     */
    public function getNbDecimalesMt() {
        return $this->nbDecimalesMt;
    }

    /**
     * Set the nb decimales mt.
     *
     * @param string $nbDecimalesMt The nb decimales mt.
     */
    public function setNbDecimalesMt($nbDecimalesMt) {
        $this->nbDecimalesMt = $nbDecimalesMt;
        return $this;
    }
}
