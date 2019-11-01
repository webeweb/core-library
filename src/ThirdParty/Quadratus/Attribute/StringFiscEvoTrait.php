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
 * Fisc evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFiscEvoTrait {

    /**
     * Fisc evo.
     *
     * @var string
     */
    private $fiscEvo;

    /**
     * Get the fisc evo.
     *
     * @return string Returns the fisc evo.
     */
    public function getFiscEvo() {
        return $this->fiscEvo;
    }

    /**
     * Set the fisc evo.
     *
     * @param string $fiscEvo The fisc evo.
     */
    public function setFiscEvo($fiscEvo) {
        $this->fiscEvo = $fiscEvo;
        return $this;
    }
}
