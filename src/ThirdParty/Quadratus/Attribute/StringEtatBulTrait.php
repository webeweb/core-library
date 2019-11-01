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
 * Etat bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatBulTrait {

    /**
     * Etat bul.
     *
     * @var string
     */
    private $etatBul;

    /**
     * Get the etat bul.
     *
     * @return string Returns the etat bul.
     */
    public function getEtatBul() {
        return $this->etatBul;
    }

    /**
     * Set the etat bul.
     *
     * @param string $etatBul The etat bul.
     */
    public function setEtatBul($etatBul) {
        $this->etatBul = $etatBul;
        return $this;
    }
}
