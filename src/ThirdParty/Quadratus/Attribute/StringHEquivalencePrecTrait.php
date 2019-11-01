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
 * H equivalence prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHEquivalencePrecTrait {

    /**
     * H equivalence prec.
     *
     * @var string
     */
    private $hEquivalencePrec;

    /**
     * Get the h equivalence prec.
     *
     * @return string Returns the h equivalence prec.
     */
    public function getHEquivalencePrec() {
        return $this->hEquivalencePrec;
    }

    /**
     * Set the h equivalence prec.
     *
     * @param string $hEquivalencePrec The h equivalence prec.
     */
    public function setHEquivalencePrec($hEquivalencePrec) {
        $this->hEquivalencePrec = $hEquivalencePrec;
        return $this;
    }
}
