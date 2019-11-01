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
 * Groupe qualifiant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeQualifiantTrait {

    /**
     * Groupe qualifiant.
     *
     * @var string
     */
    private $groupeQualifiant;

    /**
     * Get the groupe qualifiant.
     *
     * @return string Returns the groupe qualifiant.
     */
    public function getGroupeQualifiant() {
        return $this->groupeQualifiant;
    }

    /**
     * Set the groupe qualifiant.
     *
     * @param string $groupeQualifiant The groupe qualifiant.
     */
    public function setGroupeQualifiant($groupeQualifiant) {
        $this->groupeQualifiant = $groupeQualifiant;
        return $this;
    }
}
