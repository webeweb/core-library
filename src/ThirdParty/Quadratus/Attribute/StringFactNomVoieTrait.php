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
 * Fact nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactNomVoieTrait {

    /**
     * Fact nom voie.
     *
     * @var string
     */
    private $factNomVoie;

    /**
     * Get the fact nom voie.
     *
     * @return string Returns the fact nom voie.
     */
    public function getFactNomVoie() {
        return $this->factNomVoie;
    }

    /**
     * Set the fact nom voie.
     *
     * @param string $factNomVoie The fact nom voie.
     */
    public function setFactNomVoie($factNomVoie) {
        $this->factNomVoie = $factNomVoie;
        return $this;
    }
}
