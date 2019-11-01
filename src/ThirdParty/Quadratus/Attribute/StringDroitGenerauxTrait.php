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
 * Droit generaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitGenerauxTrait {

    /**
     * Droit generaux.
     *
     * @var string
     */
    private $droitGeneraux;

    /**
     * Get the droit generaux.
     *
     * @return string Returns the droit generaux.
     */
    public function getDroitGeneraux() {
        return $this->droitGeneraux;
    }

    /**
     * Set the droit generaux.
     *
     * @param string $droitGeneraux The droit generaux.
     */
    public function setDroitGeneraux($droitGeneraux) {
        $this->droitGeneraux = $droitGeneraux;
        return $this;
    }
}
