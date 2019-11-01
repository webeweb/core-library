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
 * Indemnites euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIndemnitesEuroOuFrancTrait {

    /**
     * Indemnites euro ou franc.
     *
     * @var string
     */
    private $indemnitesEuroOuFranc;

    /**
     * Get the indemnites euro ou franc.
     *
     * @return string Returns the indemnites euro ou franc.
     */
    public function getIndemnitesEuroOuFranc() {
        return $this->indemnitesEuroOuFranc;
    }

    /**
     * Set the indemnites euro ou franc.
     *
     * @param string $indemnitesEuroOuFranc The indemnites euro ou franc.
     */
    public function setIndemnitesEuroOuFranc($indemnitesEuroOuFranc) {
        $this->indemnitesEuroOuFranc = $indemnitesEuroOuFranc;
        return $this;
    }
}
