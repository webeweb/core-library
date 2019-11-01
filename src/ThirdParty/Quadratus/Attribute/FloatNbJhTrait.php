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
 * Nb jh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJhTrait {

    /**
     * Nb jh.
     *
     * @var float
     */
    private $nbJh;

    /**
     * Get the nb jh.
     *
     * @return float Returns the nb jh.
     */
    public function getNbJh() {
        return $this->nbJh;
    }

    /**
     * Set the nb jh.
     *
     * @param float $nbJh The nb jh.
     */
    public function setNbJh($nbJh) {
        $this->nbJh = $nbJh;
        return $this;
    }
}
