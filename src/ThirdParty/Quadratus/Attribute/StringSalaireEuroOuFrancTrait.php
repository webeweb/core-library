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
 * Salaire euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSalaireEuroOuFrancTrait {

    /**
     * Salaire euro ou franc.
     *
     * @var string
     */
    private $salaireEuroOuFranc;

    /**
     * Get the salaire euro ou franc.
     *
     * @return string Returns the salaire euro ou franc.
     */
    public function getSalaireEuroOuFranc() {
        return $this->salaireEuroOuFranc;
    }

    /**
     * Set the salaire euro ou franc.
     *
     * @param string $salaireEuroOuFranc The salaire euro ou franc.
     */
    public function setSalaireEuroOuFranc($salaireEuroOuFranc) {
        $this->salaireEuroOuFranc = $salaireEuroOuFranc;
        return $this;
    }
}
