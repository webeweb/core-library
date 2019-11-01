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
 * Semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSemaineTrait {

    /**
     * Semaine.
     *
     * @var string
     */
    private $semaine;

    /**
     * Get the semaine.
     *
     * @return string Returns the semaine.
     */
    public function getSemaine() {
        return $this->semaine;
    }

    /**
     * Set the semaine.
     *
     * @param string $semaine The semaine.
     */
    public function setSemaine($semaine) {
        $this->semaine = $semaine;
        return $this;
    }
}
