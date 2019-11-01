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
 * Nb jours anc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJoursAncTrait {

    /**
     * Nb jours anc.
     *
     * @var int
     */
    private $nbJoursAnc;

    /**
     * Get the nb jours anc.
     *
     * @return int Returns the nb jours anc.
     */
    public function getNbJoursAnc() {
        return $this->nbJoursAnc;
    }

    /**
     * Set the nb jours anc.
     *
     * @param int $nbJoursAnc The nb jours anc.
     */
    public function setNbJoursAnc($nbJoursAnc) {
        $this->nbJoursAnc = $nbJoursAnc;
        return $this;
    }
}
