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
 * Nb jours prevus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursPrevusTrait {

    /**
     * Nb jours prevus.
     *
     * @var float
     */
    private $nbJoursPrevus;

    /**
     * Get the nb jours prevus.
     *
     * @return float Returns the nb jours prevus.
     */
    public function getNbJoursPrevus() {
        return $this->nbJoursPrevus;
    }

    /**
     * Set the nb jours prevus.
     *
     * @param float $nbJoursPrevus The nb jours prevus.
     */
    public function setNbJoursPrevus($nbJoursPrevus) {
        $this->nbJoursPrevus = $nbJoursPrevus;
        return $this;
    }
}
