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
 * Fact num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactNumVoieTrait {

    /**
     * Fact num voie.
     *
     * @var string
     */
    private $factNumVoie;

    /**
     * Get the fact num voie.
     *
     * @return string Returns the fact num voie.
     */
    public function getFactNumVoie() {
        return $this->factNumVoie;
    }

    /**
     * Set the fact num voie.
     *
     * @param string $factNumVoie The fact num voie.
     */
    public function setFactNumVoie($factNumVoie) {
        $this->factNumVoie = $factNumVoie;
        return $this;
    }
}
