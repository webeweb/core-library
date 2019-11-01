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
 * Affectations cli frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAffectationsCliFrnTrait {

    /**
     * Affectations cli frn.
     *
     * @var bool
     */
    private $affectationsCliFrn;

    /**
     * Get the affectations cli frn.
     *
     * @return bool Returns the affectations cli frn.
     */
    public function getAffectationsCliFrn() {
        return $this->affectationsCliFrn;
    }

    /**
     * Set the affectations cli frn.
     *
     * @param bool $affectationsCliFrn The affectations cli frn.
     */
    public function setAffectationsCliFrn($affectationsCliFrn) {
        $this->affectationsCliFrn = $affectationsCliFrn;
        return $this;
    }
}
