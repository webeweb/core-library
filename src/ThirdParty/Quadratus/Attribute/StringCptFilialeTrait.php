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
 * Cpt filiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFilialeTrait {

    /**
     * Cpt filiale.
     *
     * @var string
     */
    private $cptFiliale;

    /**
     * Get the cpt filiale.
     *
     * @return string Returns the cpt filiale.
     */
    public function getCptFiliale() {
        return $this->cptFiliale;
    }

    /**
     * Set the cpt filiale.
     *
     * @param string $cptFiliale The cpt filiale.
     */
    public function setCptFiliale($cptFiliale) {
        $this->cptFiliale = $cptFiliale;
        return $this;
    }
}
