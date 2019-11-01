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
 * Chaine publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChainePublicationTrait {

    /**
     * Chaine publication.
     *
     * @var string
     */
    private $chainePublication;

    /**
     * Get the chaine publication.
     *
     * @return string Returns the chaine publication.
     */
    public function getChainePublication() {
        return $this->chainePublication;
    }

    /**
     * Set the chaine publication.
     *
     * @param string $chainePublication The chaine publication.
     */
    public function setChainePublication($chainePublication) {
        $this->chainePublication = $chainePublication;
        return $this;
    }
}
