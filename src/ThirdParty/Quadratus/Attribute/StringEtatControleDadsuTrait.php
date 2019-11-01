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
 * Etat controle dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatControleDadsuTrait {

    /**
     * Etat controle dadsu.
     *
     * @var string
     */
    private $etatControleDadsu;

    /**
     * Get the etat controle dadsu.
     *
     * @return string Returns the etat controle dadsu.
     */
    public function getEtatControleDadsu() {
        return $this->etatControleDadsu;
    }

    /**
     * Set the etat controle dadsu.
     *
     * @param string $etatControleDadsu The etat controle dadsu.
     */
    public function setEtatControleDadsu($etatControleDadsu) {
        $this->etatControleDadsu = $etatControleDadsu;
        return $this;
    }
}
