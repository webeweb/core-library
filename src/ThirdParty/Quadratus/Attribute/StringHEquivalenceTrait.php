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
 * H equivalence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHEquivalenceTrait {

    /**
     * H equivalence.
     *
     * @var string
     */
    private $hEquivalence;

    /**
     * Get the h equivalence.
     *
     * @return string Returns the h equivalence.
     */
    public function getHEquivalence() {
        return $this->hEquivalence;
    }

    /**
     * Set the h equivalence.
     *
     * @param string $hEquivalence The h equivalence.
     */
    public function setHEquivalence($hEquivalence) {
        $this->hEquivalence = $hEquivalence;
        return $this;
    }
}
