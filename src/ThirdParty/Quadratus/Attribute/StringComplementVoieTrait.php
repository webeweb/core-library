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
 * Complement voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplementVoieTrait {

    /**
     * Complement voie.
     *
     * @var string
     */
    private $complementVoie;

    /**
     * Get the complement voie.
     *
     * @return string Returns the complement voie.
     */
    public function getComplementVoie() {
        return $this->complementVoie;
    }

    /**
     * Set the complement voie.
     *
     * @param string $complementVoie The complement voie.
     */
    public function setComplementVoie($complementVoie) {
        $this->complementVoie = $complementVoie;
        return $this;
    }
}
