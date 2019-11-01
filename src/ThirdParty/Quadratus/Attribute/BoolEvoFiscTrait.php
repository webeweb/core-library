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
 * Evo fisc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoFiscTrait {

    /**
     * Evo fisc.
     *
     * @var bool
     */
    private $evoFisc;

    /**
     * Get the evo fisc.
     *
     * @return bool Returns the evo fisc.
     */
    public function getEvoFisc() {
        return $this->evoFisc;
    }

    /**
     * Set the evo fisc.
     *
     * @param bool $evoFisc The evo fisc.
     */
    public function setEvoFisc($evoFisc) {
        $this->evoFisc = $evoFisc;
        return $this;
    }
}
