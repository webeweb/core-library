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
 * Nb jours abs proratisation dcp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJoursAbsProratisationDcpTrait {

    /**
     * Nb jours abs proratisation dcp.
     *
     * @var int
     */
    private $nbJoursAbsProratisationDcp;

    /**
     * Get the nb jours abs proratisation dcp.
     *
     * @return int Returns the nb jours abs proratisation dcp.
     */
    public function getNbJoursAbsProratisationDcp() {
        return $this->nbJoursAbsProratisationDcp;
    }

    /**
     * Set the nb jours abs proratisation dcp.
     *
     * @param int $nbJoursAbsProratisationDcp The nb jours abs proratisation dcp.
     */
    public function setNbJoursAbsProratisationDcp($nbJoursAbsProratisationDcp) {
        $this->nbJoursAbsProratisationDcp = $nbJoursAbsProratisationDcp;
        return $this;
    }
}
