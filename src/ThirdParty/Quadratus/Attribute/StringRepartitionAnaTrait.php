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
 * Repartition ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRepartitionAnaTrait {

    /**
     * Repartition ana.
     *
     * @var string
     */
    private $repartitionAna;

    /**
     * Get the repartition ana.
     *
     * @return string Returns the repartition ana.
     */
    public function getRepartitionAna() {
        return $this->repartitionAna;
    }

    /**
     * Set the repartition ana.
     *
     * @param string $repartitionAna The repartition ana.
     */
    public function setRepartitionAna($repartitionAna) {
        $this->repartitionAna = $repartitionAna;
        return $this;
    }
}
