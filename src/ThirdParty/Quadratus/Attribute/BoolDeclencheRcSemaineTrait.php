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
 * Declenche rc semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDeclencheRcSemaineTrait {

    /**
     * Declenche rc semaine.
     *
     * @var bool
     */
    private $declencheRcSemaine;

    /**
     * Get the declenche rc semaine.
     *
     * @return bool Returns the declenche rc semaine.
     */
    public function getDeclencheRcSemaine() {
        return $this->declencheRcSemaine;
    }

    /**
     * Set the declenche rc semaine.
     *
     * @param bool $declencheRcSemaine The declenche rc semaine.
     */
    public function setDeclencheRcSemaine($declencheRcSemaine) {
        $this->declencheRcSemaine = $declencheRcSemaine;
        return $this;
    }
}
