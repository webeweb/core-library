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
 * Rff cpt regul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRffCptRegulTrait {

    /**
     * Rff cpt regul.
     *
     * @var string
     */
    private $rffCptRegul;

    /**
     * Get the rff cpt regul.
     *
     * @return string Returns the rff cpt regul.
     */
    public function getRffCptRegul() {
        return $this->rffCptRegul;
    }

    /**
     * Set the rff cpt regul.
     *
     * @param string $rffCptRegul The rff cpt regul.
     */
    public function setRffCptRegul($rffCptRegul) {
        $this->rffCptRegul = $rffCptRegul;
        return $this;
    }
}
