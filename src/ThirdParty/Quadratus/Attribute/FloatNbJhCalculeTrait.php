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
 * Nb jh calcule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJhCalculeTrait {

    /**
     * Nb jh calcule.
     *
     * @var float
     */
    private $nbJhCalcule;

    /**
     * Get the nb jh calcule.
     *
     * @return float Returns the nb jh calcule.
     */
    public function getNbJhCalcule() {
        return $this->nbJhCalcule;
    }

    /**
     * Set the nb jh calcule.
     *
     * @param float $nbJhCalcule The nb jh calcule.
     */
    public function setNbJhCalcule($nbJhCalcule) {
        $this->nbJhCalcule = $nbJhCalcule;
        return $this;
    }
}
