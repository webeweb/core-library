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
 * Num cpt caution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptCautionTrait {

    /**
     * Num cpt caution.
     *
     * @var string
     */
    private $numCptCaution;

    /**
     * Get the num cpt caution.
     *
     * @return string Returns the num cpt caution.
     */
    public function getNumCptCaution() {
        return $this->numCptCaution;
    }

    /**
     * Set the num cpt caution.
     *
     * @param string $numCptCaution The num cpt caution.
     */
    public function setNumCptCaution($numCptCaution) {
        $this->numCptCaution = $numCptCaution;
        return $this;
    }
}
