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
 * Nb jour base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourBaseTrait {

    /**
     * Nb jour base.
     *
     * @var float
     */
    private $nbJourBase;

    /**
     * Get the nb jour base.
     *
     * @return float Returns the nb jour base.
     */
    public function getNbJourBase() {
        return $this->nbJourBase;
    }

    /**
     * Set the nb jour base.
     *
     * @param float $nbJourBase The nb jour base.
     */
    public function setNbJourBase($nbJourBase) {
        $this->nbJourBase = $nbJourBase;
        return $this;
    }
}
