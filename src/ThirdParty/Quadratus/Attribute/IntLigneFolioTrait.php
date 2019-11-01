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
 * Ligne folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLigneFolioTrait {

    /**
     * Ligne folio.
     *
     * @var int
     */
    private $ligneFolio;

    /**
     * Get the ligne folio.
     *
     * @return int Returns the ligne folio.
     */
    public function getLigneFolio() {
        return $this->ligneFolio;
    }

    /**
     * Set the ligne folio.
     *
     * @param int $ligneFolio The ligne folio.
     */
    public function setLigneFolio($ligneFolio) {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }
}
