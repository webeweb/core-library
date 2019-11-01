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
 * Nb ecr a facturer cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEcrAFacturerClotureTrait {

    /**
     * Nb ecr a facturer cloture.
     *
     * @var int
     */
    private $nbEcrAFacturerCloture;

    /**
     * Get the nb ecr a facturer cloture.
     *
     * @return int Returns the nb ecr a facturer cloture.
     */
    public function getNbEcrAFacturerCloture() {
        return $this->nbEcrAFacturerCloture;
    }

    /**
     * Set the nb ecr a facturer cloture.
     *
     * @param int $nbEcrAFacturerCloture The nb ecr a facturer cloture.
     */
    public function setNbEcrAFacturerCloture($nbEcrAFacturerCloture) {
        $this->nbEcrAFacturerCloture = $nbEcrAFacturerCloture;
        return $this;
    }
}
