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
 * Methode calcul cicehe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeCalculCiceheTrait {

    /**
     * Methode calcul cicehe.
     *
     * @var string
     */
    private $methodeCalculCicehe;

    /**
     * Get the methode calcul cicehe.
     *
     * @return string Returns the methode calcul cicehe.
     */
    public function getMethodeCalculCicehe() {
        return $this->methodeCalculCicehe;
    }

    /**
     * Set the methode calcul cicehe.
     *
     * @param string $methodeCalculCicehe The methode calcul cicehe.
     */
    public function setMethodeCalculCicehe($methodeCalculCicehe) {
        $this->methodeCalculCicehe = $methodeCalculCicehe;
        return $this;
    }
}
