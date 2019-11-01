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
 * Priorite saisie aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrioriteSaisieAffTrait {

    /**
     * Priorite saisie aff.
     *
     * @var int
     */
    private $prioriteSaisieAff;

    /**
     * Get the priorite saisie aff.
     *
     * @return int Returns the priorite saisie aff.
     */
    public function getPrioriteSaisieAff() {
        return $this->prioriteSaisieAff;
    }

    /**
     * Set the priorite saisie aff.
     *
     * @param int $prioriteSaisieAff The priorite saisie aff.
     */
    public function setPrioriteSaisieAff($prioriteSaisieAff) {
        $this->prioriteSaisieAff = $prioriteSaisieAff;
        return $this;
    }
}
