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
 * Priorite saisie frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrioriteSaisieFrnTrait {

    /**
     * Priorite saisie frn.
     *
     * @var int
     */
    private $prioriteSaisieFrn;

    /**
     * Get the priorite saisie frn.
     *
     * @return int Returns the priorite saisie frn.
     */
    public function getPrioriteSaisieFrn() {
        return $this->prioriteSaisieFrn;
    }

    /**
     * Set the priorite saisie frn.
     *
     * @param int $prioriteSaisieFrn The priorite saisie frn.
     */
    public function setPrioriteSaisieFrn($prioriteSaisieFrn) {
        $this->prioriteSaisieFrn = $prioriteSaisieFrn;
        return $this;
    }
}
