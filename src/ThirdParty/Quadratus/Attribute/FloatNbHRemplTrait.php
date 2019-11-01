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
 * Nb h rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRemplTrait {

    /**
     * Nb h rempl.
     *
     * @var float
     */
    private $nbHRempl;

    /**
     * Get the nb h rempl.
     *
     * @return float Returns the nb h rempl.
     */
    public function getNbHRempl() {
        return $this->nbHRempl;
    }

    /**
     * Set the nb h rempl.
     *
     * @param float $nbHRempl The nb h rempl.
     */
    public function setNbHRempl($nbHRempl) {
        $this->nbHRempl = $nbHRempl;
        return $this;
    }
}
