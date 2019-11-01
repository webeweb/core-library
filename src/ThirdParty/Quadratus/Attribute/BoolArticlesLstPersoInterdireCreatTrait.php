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
 * Articles lst perso interdire creat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticlesLstPersoInterdireCreatTrait {

    /**
     * Articles lst perso interdire creat.
     *
     * @var bool
     */
    private $articlesLstPersoInterdireCreat;

    /**
     * Get the articles lst perso interdire creat.
     *
     * @return bool Returns the articles lst perso interdire creat.
     */
    public function getArticlesLstPersoInterdireCreat() {
        return $this->articlesLstPersoInterdireCreat;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     */
    public function setArticlesLstPersoInterdireCreat($articlesLstPersoInterdireCreat) {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }
}
