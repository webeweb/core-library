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
 * Nb attes assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesAssedicTrait {

    /**
     * Nb attes assedic.
     *
     * @var int
     */
    private $nbAttesAssedic;

    /**
     * Get the nb attes assedic.
     *
     * @return int Returns the nb attes assedic.
     */
    public function getNbAttesAssedic() {
        return $this->nbAttesAssedic;
    }

    /**
     * Set the nb attes assedic.
     *
     * @param int $nbAttesAssedic The nb attes assedic.
     */
    public function setNbAttesAssedic($nbAttesAssedic) {
        $this->nbAttesAssedic = $nbAttesAssedic;
        return $this;
    }
}
