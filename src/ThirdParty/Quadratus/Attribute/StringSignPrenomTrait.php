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
 * Sign prenom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignPrenomTrait {

    /**
     * Sign prenom.
     *
     * @var string
     */
    private $signPrenom;

    /**
     * Get the sign prenom.
     *
     * @return string Returns the sign prenom.
     */
    public function getSignPrenom() {
        return $this->signPrenom;
    }

    /**
     * Set the sign prenom.
     *
     * @param string $signPrenom The sign prenom.
     */
    public function setSignPrenom($signPrenom) {
        $this->signPrenom = $signPrenom;
        return $this;
    }
}
