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
 * Nb attes assedic a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesAssedicADeduireTrait {

    /**
     * Nb attes assedic a deduire.
     *
     * @var int
     */
    private $nbAttesAssedicADeduire;

    /**
     * Get the nb attes assedic a deduire.
     *
     * @return int Returns the nb attes assedic a deduire.
     */
    public function getNbAttesAssedicADeduire() {
        return $this->nbAttesAssedicADeduire;
    }

    /**
     * Set the nb attes assedic a deduire.
     *
     * @param int $nbAttesAssedicADeduire The nb attes assedic a deduire.
     */
    public function setNbAttesAssedicADeduire($nbAttesAssedicADeduire) {
        $this->nbAttesAssedicADeduire = $nbAttesAssedicADeduire;
        return $this;
    }
}
