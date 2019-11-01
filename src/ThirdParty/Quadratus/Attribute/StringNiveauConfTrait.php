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
 * Niveau conf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauConfTrait {

    /**
     * Niveau conf.
     *
     * @var string
     */
    private $niveauConf;

    /**
     * Get the niveau conf.
     *
     * @return string Returns the niveau conf.
     */
    public function getNiveauConf() {
        return $this->niveauConf;
    }

    /**
     * Set the niveau conf.
     *
     * @param string $niveauConf The niveau conf.
     */
    public function setNiveauConf($niveauConf) {
        $this->niveauConf = $niveauConf;
        return $this;
    }
}
