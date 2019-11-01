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
 * Duree societe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDureeSocieteTrait {

    /**
     * Duree societe.
     *
     * @var string
     */
    private $dureeSociete;

    /**
     * Get the duree societe.
     *
     * @return string Returns the duree societe.
     */
    public function getDureeSociete() {
        return $this->dureeSociete;
    }

    /**
     * Set the duree societe.
     *
     * @param string $dureeSociete The duree societe.
     */
    public function setDureeSociete($dureeSociete) {
        $this->dureeSociete = $dureeSociete;
        return $this;
    }
}
