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
 * Lib ecr caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibEcrCaisseTrait {

    /**
     * Lib ecr caisse.
     *
     * @var string
     */
    private $libEcrCaisse;

    /**
     * Get the lib ecr caisse.
     *
     * @return string Returns the lib ecr caisse.
     */
    public function getLibEcrCaisse() {
        return $this->libEcrCaisse;
    }

    /**
     * Set the lib ecr caisse.
     *
     * @param string $libEcrCaisse The lib ecr caisse.
     */
    public function setLibEcrCaisse($libEcrCaisse) {
        $this->libEcrCaisse = $libEcrCaisse;
        return $this;
    }
}
