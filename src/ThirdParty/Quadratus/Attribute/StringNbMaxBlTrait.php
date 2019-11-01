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
 * Nb max bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbMaxBlTrait {

    /**
     * Nb max bl.
     *
     * @var string
     */
    private $nbMaxBl;

    /**
     * Get the nb max bl.
     *
     * @return string Returns the nb max bl.
     */
    public function getNbMaxBl() {
        return $this->nbMaxBl;
    }

    /**
     * Set the nb max bl.
     *
     * @param string $nbMaxBl The nb max bl.
     */
    public function setNbMaxBl($nbMaxBl) {
        $this->nbMaxBl = $nbMaxBl;
        return $this;
    }
}
