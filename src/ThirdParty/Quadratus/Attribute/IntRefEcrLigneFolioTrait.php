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
 * Ref ecr ligne folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefEcrLigneFolioTrait {

    /**
     * Ref ecr ligne folio.
     *
     * @var int
     */
    private $refEcrLigneFolio;

    /**
     * Get the ref ecr ligne folio.
     *
     * @return int Returns the ref ecr ligne folio.
     */
    public function getRefEcrLigneFolio() {
        return $this->refEcrLigneFolio;
    }

    /**
     * Set the ref ecr ligne folio.
     *
     * @param int $refEcrLigneFolio The ref ecr ligne folio.
     */
    public function setRefEcrLigneFolio($refEcrLigneFolio) {
        $this->refEcrLigneFolio = $refEcrLigneFolio;
        return $this;
    }
}
