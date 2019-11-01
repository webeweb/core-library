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
 * Unite date ancien poste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteDateAncienPosteTrait {

    /**
     * Unite date ancien poste.
     *
     * @var string
     */
    private $uniteDateAncienPoste;

    /**
     * Get the unite date ancien poste.
     *
     * @return string Returns the unite date ancien poste.
     */
    public function getUniteDateAncienPoste() {
        return $this->uniteDateAncienPoste;
    }

    /**
     * Set the unite date ancien poste.
     *
     * @param string $uniteDateAncienPoste The unite date ancien poste.
     */
    public function setUniteDateAncienPoste($uniteDateAncienPoste) {
        $this->uniteDateAncienPoste = $uniteDateAncienPoste;
        return $this;
    }
}
