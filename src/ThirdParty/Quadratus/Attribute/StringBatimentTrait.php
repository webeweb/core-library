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
 * Batiment trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBatimentTrait {

    /**
     * Batiment.
     *
     * @var string
     */
    private $batiment;

    /**
     * Get the batiment.
     *
     * @return string Returns the batiment.
     */
    public function getBatiment() {
        return $this->batiment;
    }

    /**
     * Set the batiment.
     *
     * @param string $batiment The batiment.
     */
    public function setBatiment($batiment) {
        $this->batiment = $batiment;
        return $this;
    }
}
