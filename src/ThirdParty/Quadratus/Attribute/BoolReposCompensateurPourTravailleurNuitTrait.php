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
 * Repos compensateur pour travailleur nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReposCompensateurPourTravailleurNuitTrait {

    /**
     * Repos compensateur pour travailleur nuit.
     *
     * @var bool
     */
    private $reposCompensateurPourTravailleurNuit;

    /**
     * Get the repos compensateur pour travailleur nuit.
     *
     * @return bool Returns the repos compensateur pour travailleur nuit.
     */
    public function getReposCompensateurPourTravailleurNuit() {
        return $this->reposCompensateurPourTravailleurNuit;
    }

    /**
     * Set the repos compensateur pour travailleur nuit.
     *
     * @param bool $reposCompensateurPourTravailleurNuit The repos compensateur pour travailleur nuit.
     */
    public function setReposCompensateurPourTravailleurNuit($reposCompensateurPourTravailleurNuit) {
        $this->reposCompensateurPourTravailleurNuit = $reposCompensateurPourTravailleurNuit;
        return $this;
    }
}
