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
 * Tva methode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaMethodeTrait {

    /**
     * Tva methode.
     *
     * @var string
     */
    private $tvaMethode;

    /**
     * Get the tva methode.
     *
     * @return string Returns the tva methode.
     */
    public function getTvaMethode() {
        return $this->tvaMethode;
    }

    /**
     * Set the tva methode.
     *
     * @param string $tvaMethode The tva methode.
     */
    public function setTvaMethode($tvaMethode) {
        $this->tvaMethode = $tvaMethode;
        return $this;
    }
}
