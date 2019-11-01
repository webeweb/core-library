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
 * Ya taux reduit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolYaTauxReduitTrait {

    /**
     * Ya taux reduit.
     *
     * @var bool
     */
    private $yaTauxReduit;

    /**
     * Get the ya taux reduit.
     *
     * @return bool Returns the ya taux reduit.
     */
    public function getYaTauxReduit() {
        return $this->yaTauxReduit;
    }

    /**
     * Set the ya taux reduit.
     *
     * @param bool $yaTauxReduit The ya taux reduit.
     */
    public function setYaTauxReduit($yaTauxReduit) {
        $this->yaTauxReduit = $yaTauxReduit;
        return $this;
    }
}
