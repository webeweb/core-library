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
 * Personne physique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPersonnePhysiqueTrait {

    /**
     * Personne physique.
     *
     * @var bool
     */
    private $personnePhysique;

    /**
     * Get the personne physique.
     *
     * @return bool Returns the personne physique.
     */
    public function getPersonnePhysique() {
        return $this->personnePhysique;
    }

    /**
     * Set the personne physique.
     *
     * @param bool $personnePhysique The personne physique.
     */
    public function setPersonnePhysique($personnePhysique) {
        $this->personnePhysique = $personnePhysique;
        return $this;
    }
}
