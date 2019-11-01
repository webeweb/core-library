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
 * Heure sup influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureSupInfluCassationTrait {

    /**
     * Heure sup influ cassation.
     *
     * @var string
     */
    private $heureSupInfluCassation;

    /**
     * Get the heure sup influ cassation.
     *
     * @return string Returns the heure sup influ cassation.
     */
    public function getHeureSupInfluCassation() {
        return $this->heureSupInfluCassation;
    }

    /**
     * Set the heure sup influ cassation.
     *
     * @param string $heureSupInfluCassation The heure sup influ cassation.
     */
    public function setHeureSupInfluCassation($heureSupInfluCassation) {
        $this->heureSupInfluCassation = $heureSupInfluCassation;
        return $this;
    }
}
