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
 * Nb h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHComplTrait {

    /**
     * Nb h compl.
     *
     * @var float
     */
    private $nbHCompl;

    /**
     * Get the nb h compl.
     *
     * @return float Returns the nb h compl.
     */
    public function getNbHCompl() {
        return $this->nbHCompl;
    }

    /**
     * Set the nb h compl.
     *
     * @param float $nbHCompl The nb h compl.
     */
    public function setNbHCompl($nbHCompl) {
        $this->nbHCompl = $nbHCompl;
        return $this;
    }
}
