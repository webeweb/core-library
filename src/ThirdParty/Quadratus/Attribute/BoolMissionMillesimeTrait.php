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
 * Mission millesime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMissionMillesimeTrait {

    /**
     * Mission millesime.
     *
     * @var bool
     */
    private $missionMillesime;

    /**
     * Get the mission millesime.
     *
     * @return bool Returns the mission millesime.
     */
    public function getMissionMillesime() {
        return $this->missionMillesime;
    }

    /**
     * Set the mission millesime.
     *
     * @param bool $missionMillesime The mission millesime.
     */
    public function setMissionMillesime($missionMillesime) {
        $this->missionMillesime = $missionMillesime;
        return $this;
    }
}
