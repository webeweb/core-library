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
 * Niveau maxi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauMaxiTrait {

    /**
     * Niveau maxi.
     *
     * @var string
     */
    private $niveauMaxi;

    /**
     * Get the niveau maxi.
     *
     * @return string Returns the niveau maxi.
     */
    public function getNiveauMaxi() {
        return $this->niveauMaxi;
    }

    /**
     * Set the niveau maxi.
     *
     * @param string $niveauMaxi The niveau maxi.
     */
    public function setNiveauMaxi($niveauMaxi) {
        $this->niveauMaxi = $niveauMaxi;
        return $this;
    }
}
