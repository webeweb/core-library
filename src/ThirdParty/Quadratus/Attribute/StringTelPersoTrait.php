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
 * Tel perso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPersoTrait {

    /**
     * Tel perso.
     *
     * @var string
     */
    private $telPerso;

    /**
     * Get the tel perso.
     *
     * @return string Returns the tel perso.
     */
    public function getTelPerso() {
        return $this->telPerso;
    }

    /**
     * Set the tel perso.
     *
     * @param string $telPerso The tel perso.
     */
    public function setTelPerso($telPerso) {
        $this->telPerso = $telPerso;
        return $this;
    }
}
