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
 * Ed bordereau prep trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdBordereauPrepTrait {

    /**
     * Ed bordereau prep.
     *
     * @var bool
     */
    private $edBordereauPrep;

    /**
     * Get the ed bordereau prep.
     *
     * @return bool Returns the ed bordereau prep.
     */
    public function getEdBordereauPrep() {
        return $this->edBordereauPrep;
    }

    /**
     * Set the ed bordereau prep.
     *
     * @param bool $edBordereauPrep The ed bordereau prep.
     */
    public function setEdBordereauPrep($edBordereauPrep) {
        $this->edBordereauPrep = $edBordereauPrep;
        return $this;
    }
}
