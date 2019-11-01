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
 * Nb prelevements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbPrelevementsTrait {

    /**
     * Nb prelevements.
     *
     * @var int
     */
    private $nbPrelevements;

    /**
     * Get the nb prelevements.
     *
     * @return int Returns the nb prelevements.
     */
    public function getNbPrelevements() {
        return $this->nbPrelevements;
    }

    /**
     * Set the nb prelevements.
     *
     * @param int $nbPrelevements The nb prelevements.
     */
    public function setNbPrelevements($nbPrelevements) {
        $this->nbPrelevements = $nbPrelevements;
        return $this;
    }
}
