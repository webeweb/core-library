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
 * Personne a prevenir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPersonneAPrevenirTrait {

    /**
     * Personne a prevenir.
     *
     * @var string
     */
    private $personneAPrevenir;

    /**
     * Get the personne a prevenir.
     *
     * @return string Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir() {
        return $this->personneAPrevenir;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string $personneAPrevenir The personne a prevenir.
     */
    public function setPersonneAPrevenir($personneAPrevenir) {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }
}
