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
 * Sign raison sociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignRaisonSocialeTrait {

    /**
     * Sign raison sociale.
     *
     * @var string
     */
    private $signRaisonSociale;

    /**
     * Get the sign raison sociale.
     *
     * @return string Returns the sign raison sociale.
     */
    public function getSignRaisonSociale() {
        return $this->signRaisonSociale;
    }

    /**
     * Set the sign raison sociale.
     *
     * @param string $signRaisonSociale The sign raison sociale.
     */
    public function setSignRaisonSociale($signRaisonSociale) {
        $this->signRaisonSociale = $signRaisonSociale;
        return $this;
    }
}
