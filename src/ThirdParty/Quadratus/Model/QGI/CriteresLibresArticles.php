<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Criteres libres articles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CriteresLibresArticles {

    /**
     * Case1.
     *
     * @var bool
     */
    private $case1;

    /**
     * Case10.
     *
     * @var bool
     */
    private $case10;

    /**
     * Case11.
     *
     * @var bool
     */
    private $case11;

    /**
     * Case12.
     *
     * @var bool
     */
    private $case12;

    /**
     * Case13.
     *
     * @var bool
     */
    private $case13;

    /**
     * Case14.
     *
     * @var bool
     */
    private $case14;

    /**
     * Case15.
     *
     * @var bool
     */
    private $case15;

    /**
     * Case16.
     *
     * @var bool
     */
    private $case16;

    /**
     * Case17.
     *
     * @var bool
     */
    private $case17;

    /**
     * Case18.
     *
     * @var bool
     */
    private $case18;

    /**
     * Case19.
     *
     * @var bool
     */
    private $case19;

    /**
     * Case2.
     *
     * @var bool
     */
    private $case2;

    /**
     * Case20.
     *
     * @var bool
     */
    private $case20;

    /**
     * Case21.
     *
     * @var bool
     */
    private $case21;

    /**
     * Case22.
     *
     * @var bool
     */
    private $case22;

    /**
     * Case23.
     *
     * @var bool
     */
    private $case23;

    /**
     * Case24.
     *
     * @var bool
     */
    private $case24;

    /**
     * Case25.
     *
     * @var bool
     */
    private $case25;

    /**
     * Case26.
     *
     * @var bool
     */
    private $case26;

    /**
     * Case27.
     *
     * @var bool
     */
    private $case27;

    /**
     * Case28.
     *
     * @var bool
     */
    private $case28;

    /**
     * Case29.
     *
     * @var bool
     */
    private $case29;

    /**
     * Case3.
     *
     * @var bool
     */
    private $case3;

    /**
     * Case30.
     *
     * @var bool
     */
    private $case30;

    /**
     * Case31.
     *
     * @var bool
     */
    private $case31;

    /**
     * Case32.
     *
     * @var bool
     */
    private $case32;

    /**
     * Case33.
     *
     * @var bool
     */
    private $case33;

    /**
     * Case34.
     *
     * @var bool
     */
    private $case34;

    /**
     * Case35.
     *
     * @var bool
     */
    private $case35;

    /**
     * Case36.
     *
     * @var bool
     */
    private $case36;

    /**
     * Case37.
     *
     * @var bool
     */
    private $case37;

    /**
     * Case38.
     *
     * @var bool
     */
    private $case38;

    /**
     * Case39.
     *
     * @var bool
     */
    private $case39;

    /**
     * Case4.
     *
     * @var bool
     */
    private $case4;

    /**
     * Case40.
     *
     * @var bool
     */
    private $case40;

    /**
     * Case41.
     *
     * @var bool
     */
    private $case41;

    /**
     * Case42.
     *
     * @var bool
     */
    private $case42;

    /**
     * Case43.
     *
     * @var bool
     */
    private $case43;

    /**
     * Case44.
     *
     * @var bool
     */
    private $case44;

    /**
     * Case45.
     *
     * @var bool
     */
    private $case45;

    /**
     * Case46.
     *
     * @var bool
     */
    private $case46;

    /**
     * Case47.
     *
     * @var bool
     */
    private $case47;

    /**
     * Case48.
     *
     * @var bool
     */
    private $case48;

    /**
     * Case49.
     *
     * @var bool
     */
    private $case49;

    /**
     * Case5.
     *
     * @var bool
     */
    private $case5;

    /**
     * Case50.
     *
     * @var bool
     */
    private $case50;

    /**
     * Case6.
     *
     * @var bool
     */
    private $case6;

    /**
     * Case7.
     *
     * @var bool
     */
    private $case7;

    /**
     * Case8.
     *
     * @var bool
     */
    private $case8;

    /**
     * Case9.
     *
     * @var bool
     */
    private $case9;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date10.
     *
     * @var DateTime|null
     */
    private $date10;

    /**
     * Date11.
     *
     * @var DateTime|null
     */
    private $date11;

    /**
     * Date12.
     *
     * @var DateTime|null
     */
    private $date12;

    /**
     * Date13.
     *
     * @var DateTime|null
     */
    private $date13;

    /**
     * Date14.
     *
     * @var DateTime|null
     */
    private $date14;

    /**
     * Date15.
     *
     * @var DateTime|null
     */
    private $date15;

    /**
     * Date16.
     *
     * @var DateTime|null
     */
    private $date16;

    /**
     * Date17.
     *
     * @var DateTime|null
     */
    private $date17;

    /**
     * Date18.
     *
     * @var DateTime|null
     */
    private $date18;

    /**
     * Date19.
     *
     * @var DateTime|null
     */
    private $date19;

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Date20.
     *
     * @var DateTime|null
     */
    private $date20;

    /**
     * Date21.
     *
     * @var DateTime|null
     */
    private $date21;

    /**
     * Date22.
     *
     * @var DateTime|null
     */
    private $date22;

    /**
     * Date23.
     *
     * @var DateTime|null
     */
    private $date23;

    /**
     * Date24.
     *
     * @var DateTime|null
     */
    private $date24;

    /**
     * Date25.
     *
     * @var DateTime|null
     */
    private $date25;

    /**
     * Date26.
     *
     * @var DateTime|null
     */
    private $date26;

    /**
     * Date27.
     *
     * @var DateTime|null
     */
    private $date27;

    /**
     * Date28.
     *
     * @var DateTime|null
     */
    private $date28;

    /**
     * Date29.
     *
     * @var DateTime|null
     */
    private $date29;

    /**
     * Date3.
     *
     * @var DateTime|null
     */
    private $date3;

    /**
     * Date30.
     *
     * @var DateTime|null
     */
    private $date30;

    /**
     * Date31.
     *
     * @var DateTime|null
     */
    private $date31;

    /**
     * Date32.
     *
     * @var DateTime|null
     */
    private $date32;

    /**
     * Date33.
     *
     * @var DateTime|null
     */
    private $date33;

    /**
     * Date34.
     *
     * @var DateTime|null
     */
    private $date34;

    /**
     * Date35.
     *
     * @var DateTime|null
     */
    private $date35;

    /**
     * Date36.
     *
     * @var DateTime|null
     */
    private $date36;

    /**
     * Date37.
     *
     * @var DateTime|null
     */
    private $date37;

    /**
     * Date38.
     *
     * @var DateTime|null
     */
    private $date38;

    /**
     * Date39.
     *
     * @var DateTime|null
     */
    private $date39;

    /**
     * Date4.
     *
     * @var DateTime|null
     */
    private $date4;

    /**
     * Date40.
     *
     * @var DateTime|null
     */
    private $date40;

    /**
     * Date41.
     *
     * @var DateTime|null
     */
    private $date41;

    /**
     * Date42.
     *
     * @var DateTime|null
     */
    private $date42;

    /**
     * Date43.
     *
     * @var DateTime|null
     */
    private $date43;

    /**
     * Date44.
     *
     * @var DateTime|null
     */
    private $date44;

    /**
     * Date45.
     *
     * @var DateTime|null
     */
    private $date45;

    /**
     * Date46.
     *
     * @var DateTime|null
     */
    private $date46;

    /**
     * Date47.
     *
     * @var DateTime|null
     */
    private $date47;

    /**
     * Date48.
     *
     * @var DateTime|null
     */
    private $date48;

    /**
     * Date49.
     *
     * @var DateTime|null
     */
    private $date49;

    /**
     * Date5.
     *
     * @var DateTime|null
     */
    private $date5;

    /**
     * Date50.
     *
     * @var DateTime|null
     */
    private $date50;

    /**
     * Date6.
     *
     * @var DateTime|null
     */
    private $date6;

    /**
     * Date7.
     *
     * @var DateTime|null
     */
    private $date7;

    /**
     * Date8.
     *
     * @var DateTime|null
     */
    private $date8;

    /**
     * Date9.
     *
     * @var DateTime|null
     */
    private $date9;

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Texte10.
     *
     * @var string
     */
    private $texte10;

    /**
     * Texte11.
     *
     * @var string
     */
    private $texte11;

    /**
     * Texte12.
     *
     * @var string
     */
    private $texte12;

    /**
     * Texte13.
     *
     * @var string
     */
    private $texte13;

    /**
     * Texte14.
     *
     * @var string
     */
    private $texte14;

    /**
     * Texte15.
     *
     * @var string
     */
    private $texte15;

    /**
     * Texte16.
     *
     * @var string
     */
    private $texte16;

    /**
     * Texte17.
     *
     * @var string
     */
    private $texte17;

    /**
     * Texte18.
     *
     * @var string
     */
    private $texte18;

    /**
     * Texte19.
     *
     * @var string
     */
    private $texte19;

    /**
     * Texte2.
     *
     * @var string
     */
    private $texte2;

    /**
     * Texte20.
     *
     * @var string
     */
    private $texte20;

    /**
     * Texte21.
     *
     * @var string
     */
    private $texte21;

    /**
     * Texte22.
     *
     * @var string
     */
    private $texte22;

    /**
     * Texte23.
     *
     * @var string
     */
    private $texte23;

    /**
     * Texte24.
     *
     * @var string
     */
    private $texte24;

    /**
     * Texte25.
     *
     * @var string
     */
    private $texte25;

    /**
     * Texte26.
     *
     * @var string
     */
    private $texte26;

    /**
     * Texte27.
     *
     * @var string
     */
    private $texte27;

    /**
     * Texte28.
     *
     * @var string
     */
    private $texte28;

    /**
     * Texte29.
     *
     * @var string
     */
    private $texte29;

    /**
     * Texte3.
     *
     * @var string
     */
    private $texte3;

    /**
     * Texte30.
     *
     * @var string
     */
    private $texte30;

    /**
     * Texte31.
     *
     * @var string
     */
    private $texte31;

    /**
     * Texte32.
     *
     * @var string
     */
    private $texte32;

    /**
     * Texte33.
     *
     * @var string
     */
    private $texte33;

    /**
     * Texte34.
     *
     * @var string
     */
    private $texte34;

    /**
     * Texte35.
     *
     * @var string
     */
    private $texte35;

    /**
     * Texte36.
     *
     * @var string
     */
    private $texte36;

    /**
     * Texte37.
     *
     * @var string
     */
    private $texte37;

    /**
     * Texte38.
     *
     * @var string
     */
    private $texte38;

    /**
     * Texte39.
     *
     * @var string
     */
    private $texte39;

    /**
     * Texte4.
     *
     * @var string
     */
    private $texte4;

    /**
     * Texte40.
     *
     * @var string
     */
    private $texte40;

    /**
     * Texte41.
     *
     * @var string
     */
    private $texte41;

    /**
     * Texte42.
     *
     * @var string
     */
    private $texte42;

    /**
     * Texte43.
     *
     * @var string
     */
    private $texte43;

    /**
     * Texte44.
     *
     * @var string
     */
    private $texte44;

    /**
     * Texte45.
     *
     * @var string
     */
    private $texte45;

    /**
     * Texte46.
     *
     * @var string
     */
    private $texte46;

    /**
     * Texte47.
     *
     * @var string
     */
    private $texte47;

    /**
     * Texte48.
     *
     * @var string
     */
    private $texte48;

    /**
     * Texte49.
     *
     * @var string
     */
    private $texte49;

    /**
     * Texte5.
     *
     * @var string
     */
    private $texte5;

    /**
     * Texte50.
     *
     * @var string
     */
    private $texte50;

    /**
     * Texte6.
     *
     * @var string
     */
    private $texte6;

    /**
     * Texte7.
     *
     * @var string
     */
    private $texte7;

    /**
     * Texte8.
     *
     * @var string
     */
    private $texte8;

    /**
     * Texte9.
     *
     * @var string
     */
    private $texte9;

    /**
     * Valeur1.
     *
     * @var float
     */
    private $valeur1;

    /**
     * Valeur10.
     *
     * @var float
     */
    private $valeur10;

    /**
     * Valeur11.
     *
     * @var float
     */
    private $valeur11;

    /**
     * Valeur12.
     *
     * @var float
     */
    private $valeur12;

    /**
     * Valeur13.
     *
     * @var float
     */
    private $valeur13;

    /**
     * Valeur14.
     *
     * @var float
     */
    private $valeur14;

    /**
     * Valeur15.
     *
     * @var float
     */
    private $valeur15;

    /**
     * Valeur16.
     *
     * @var float
     */
    private $valeur16;

    /**
     * Valeur17.
     *
     * @var float
     */
    private $valeur17;

    /**
     * Valeur18.
     *
     * @var float
     */
    private $valeur18;

    /**
     * Valeur19.
     *
     * @var float
     */
    private $valeur19;

    /**
     * Valeur2.
     *
     * @var float
     */
    private $valeur2;

    /**
     * Valeur20.
     *
     * @var float
     */
    private $valeur20;

    /**
     * Valeur21.
     *
     * @var float
     */
    private $valeur21;

    /**
     * Valeur22.
     *
     * @var float
     */
    private $valeur22;

    /**
     * Valeur23.
     *
     * @var float
     */
    private $valeur23;

    /**
     * Valeur24.
     *
     * @var float
     */
    private $valeur24;

    /**
     * Valeur25.
     *
     * @var float
     */
    private $valeur25;

    /**
     * Valeur26.
     *
     * @var float
     */
    private $valeur26;

    /**
     * Valeur27.
     *
     * @var float
     */
    private $valeur27;

    /**
     * Valeur28.
     *
     * @var float
     */
    private $valeur28;

    /**
     * Valeur29.
     *
     * @var float
     */
    private $valeur29;

    /**
     * Valeur3.
     *
     * @var float
     */
    private $valeur3;

    /**
     * Valeur30.
     *
     * @var float
     */
    private $valeur30;

    /**
     * Valeur31.
     *
     * @var float
     */
    private $valeur31;

    /**
     * Valeur32.
     *
     * @var float
     */
    private $valeur32;

    /**
     * Valeur33.
     *
     * @var float
     */
    private $valeur33;

    /**
     * Valeur34.
     *
     * @var float
     */
    private $valeur34;

    /**
     * Valeur35.
     *
     * @var float
     */
    private $valeur35;

    /**
     * Valeur36.
     *
     * @var float
     */
    private $valeur36;

    /**
     * Valeur37.
     *
     * @var float
     */
    private $valeur37;

    /**
     * Valeur38.
     *
     * @var float
     */
    private $valeur38;

    /**
     * Valeur39.
     *
     * @var float
     */
    private $valeur39;

    /**
     * Valeur4.
     *
     * @var float
     */
    private $valeur4;

    /**
     * Valeur40.
     *
     * @var float
     */
    private $valeur40;

    /**
     * Valeur41.
     *
     * @var float
     */
    private $valeur41;

    /**
     * Valeur42.
     *
     * @var float
     */
    private $valeur42;

    /**
     * Valeur43.
     *
     * @var float
     */
    private $valeur43;

    /**
     * Valeur44.
     *
     * @var float
     */
    private $valeur44;

    /**
     * Valeur45.
     *
     * @var float
     */
    private $valeur45;

    /**
     * Valeur46.
     *
     * @var float
     */
    private $valeur46;

    /**
     * Valeur47.
     *
     * @var float
     */
    private $valeur47;

    /**
     * Valeur48.
     *
     * @var float
     */
    private $valeur48;

    /**
     * Valeur49.
     *
     * @var float
     */
    private $valeur49;

    /**
     * Valeur5.
     *
     * @var float
     */
    private $valeur5;

    /**
     * Valeur50.
     *
     * @var float
     */
    private $valeur50;

    /**
     * Valeur6.
     *
     * @var float
     */
    private $valeur6;

    /**
     * Valeur7.
     *
     * @var float
     */
    private $valeur7;

    /**
     * Valeur8.
     *
     * @var float
     */
    private $valeur8;

    /**
     * Valeur9.
     *
     * @var float
     */
    private $valeur9;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the case1.
     *
     * @return bool Returns the case1.
     */
    public function getCase1() {
        return $this->case1;
    }

    /**
     * Get the case10.
     *
     * @return bool Returns the case10.
     */
    public function getCase10() {
        return $this->case10;
    }

    /**
     * Get the case11.
     *
     * @return bool Returns the case11.
     */
    public function getCase11() {
        return $this->case11;
    }

    /**
     * Get the case12.
     *
     * @return bool Returns the case12.
     */
    public function getCase12() {
        return $this->case12;
    }

    /**
     * Get the case13.
     *
     * @return bool Returns the case13.
     */
    public function getCase13() {
        return $this->case13;
    }

    /**
     * Get the case14.
     *
     * @return bool Returns the case14.
     */
    public function getCase14() {
        return $this->case14;
    }

    /**
     * Get the case15.
     *
     * @return bool Returns the case15.
     */
    public function getCase15() {
        return $this->case15;
    }

    /**
     * Get the case16.
     *
     * @return bool Returns the case16.
     */
    public function getCase16() {
        return $this->case16;
    }

    /**
     * Get the case17.
     *
     * @return bool Returns the case17.
     */
    public function getCase17() {
        return $this->case17;
    }

    /**
     * Get the case18.
     *
     * @return bool Returns the case18.
     */
    public function getCase18() {
        return $this->case18;
    }

    /**
     * Get the case19.
     *
     * @return bool Returns the case19.
     */
    public function getCase19() {
        return $this->case19;
    }

    /**
     * Get the case2.
     *
     * @return bool Returns the case2.
     */
    public function getCase2() {
        return $this->case2;
    }

    /**
     * Get the case20.
     *
     * @return bool Returns the case20.
     */
    public function getCase20() {
        return $this->case20;
    }

    /**
     * Get the case21.
     *
     * @return bool Returns the case21.
     */
    public function getCase21() {
        return $this->case21;
    }

    /**
     * Get the case22.
     *
     * @return bool Returns the case22.
     */
    public function getCase22() {
        return $this->case22;
    }

    /**
     * Get the case23.
     *
     * @return bool Returns the case23.
     */
    public function getCase23() {
        return $this->case23;
    }

    /**
     * Get the case24.
     *
     * @return bool Returns the case24.
     */
    public function getCase24() {
        return $this->case24;
    }

    /**
     * Get the case25.
     *
     * @return bool Returns the case25.
     */
    public function getCase25() {
        return $this->case25;
    }

    /**
     * Get the case26.
     *
     * @return bool Returns the case26.
     */
    public function getCase26() {
        return $this->case26;
    }

    /**
     * Get the case27.
     *
     * @return bool Returns the case27.
     */
    public function getCase27() {
        return $this->case27;
    }

    /**
     * Get the case28.
     *
     * @return bool Returns the case28.
     */
    public function getCase28() {
        return $this->case28;
    }

    /**
     * Get the case29.
     *
     * @return bool Returns the case29.
     */
    public function getCase29() {
        return $this->case29;
    }

    /**
     * Get the case3.
     *
     * @return bool Returns the case3.
     */
    public function getCase3() {
        return $this->case3;
    }

    /**
     * Get the case30.
     *
     * @return bool Returns the case30.
     */
    public function getCase30() {
        return $this->case30;
    }

    /**
     * Get the case31.
     *
     * @return bool Returns the case31.
     */
    public function getCase31() {
        return $this->case31;
    }

    /**
     * Get the case32.
     *
     * @return bool Returns the case32.
     */
    public function getCase32() {
        return $this->case32;
    }

    /**
     * Get the case33.
     *
     * @return bool Returns the case33.
     */
    public function getCase33() {
        return $this->case33;
    }

    /**
     * Get the case34.
     *
     * @return bool Returns the case34.
     */
    public function getCase34() {
        return $this->case34;
    }

    /**
     * Get the case35.
     *
     * @return bool Returns the case35.
     */
    public function getCase35() {
        return $this->case35;
    }

    /**
     * Get the case36.
     *
     * @return bool Returns the case36.
     */
    public function getCase36() {
        return $this->case36;
    }

    /**
     * Get the case37.
     *
     * @return bool Returns the case37.
     */
    public function getCase37() {
        return $this->case37;
    }

    /**
     * Get the case38.
     *
     * @return bool Returns the case38.
     */
    public function getCase38() {
        return $this->case38;
    }

    /**
     * Get the case39.
     *
     * @return bool Returns the case39.
     */
    public function getCase39() {
        return $this->case39;
    }

    /**
     * Get the case4.
     *
     * @return bool Returns the case4.
     */
    public function getCase4() {
        return $this->case4;
    }

    /**
     * Get the case40.
     *
     * @return bool Returns the case40.
     */
    public function getCase40() {
        return $this->case40;
    }

    /**
     * Get the case41.
     *
     * @return bool Returns the case41.
     */
    public function getCase41() {
        return $this->case41;
    }

    /**
     * Get the case42.
     *
     * @return bool Returns the case42.
     */
    public function getCase42() {
        return $this->case42;
    }

    /**
     * Get the case43.
     *
     * @return bool Returns the case43.
     */
    public function getCase43() {
        return $this->case43;
    }

    /**
     * Get the case44.
     *
     * @return bool Returns the case44.
     */
    public function getCase44() {
        return $this->case44;
    }

    /**
     * Get the case45.
     *
     * @return bool Returns the case45.
     */
    public function getCase45() {
        return $this->case45;
    }

    /**
     * Get the case46.
     *
     * @return bool Returns the case46.
     */
    public function getCase46() {
        return $this->case46;
    }

    /**
     * Get the case47.
     *
     * @return bool Returns the case47.
     */
    public function getCase47() {
        return $this->case47;
    }

    /**
     * Get the case48.
     *
     * @return bool Returns the case48.
     */
    public function getCase48() {
        return $this->case48;
    }

    /**
     * Get the case49.
     *
     * @return bool Returns the case49.
     */
    public function getCase49() {
        return $this->case49;
    }

    /**
     * Get the case5.
     *
     * @return bool Returns the case5.
     */
    public function getCase5() {
        return $this->case5;
    }

    /**
     * Get the case50.
     *
     * @return bool Returns the case50.
     */
    public function getCase50() {
        return $this->case50;
    }

    /**
     * Get the case6.
     *
     * @return bool Returns the case6.
     */
    public function getCase6() {
        return $this->case6;
    }

    /**
     * Get the case7.
     *
     * @return bool Returns the case7.
     */
    public function getCase7() {
        return $this->case7;
    }

    /**
     * Get the case8.
     *
     * @return bool Returns the case8.
     */
    public function getCase8() {
        return $this->case8;
    }

    /**
     * Get the case9.
     *
     * @return bool Returns the case9.
     */
    public function getCase9() {
        return $this->case9;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1() {
        return $this->date1;
    }

    /**
     * Get the date10.
     *
     * @return DateTime|null Returns the date10.
     */
    public function getDate10() {
        return $this->date10;
    }

    /**
     * Get the date11.
     *
     * @return DateTime|null Returns the date11.
     */
    public function getDate11() {
        return $this->date11;
    }

    /**
     * Get the date12.
     *
     * @return DateTime|null Returns the date12.
     */
    public function getDate12() {
        return $this->date12;
    }

    /**
     * Get the date13.
     *
     * @return DateTime|null Returns the date13.
     */
    public function getDate13() {
        return $this->date13;
    }

    /**
     * Get the date14.
     *
     * @return DateTime|null Returns the date14.
     */
    public function getDate14() {
        return $this->date14;
    }

    /**
     * Get the date15.
     *
     * @return DateTime|null Returns the date15.
     */
    public function getDate15() {
        return $this->date15;
    }

    /**
     * Get the date16.
     *
     * @return DateTime|null Returns the date16.
     */
    public function getDate16() {
        return $this->date16;
    }

    /**
     * Get the date17.
     *
     * @return DateTime|null Returns the date17.
     */
    public function getDate17() {
        return $this->date17;
    }

    /**
     * Get the date18.
     *
     * @return DateTime|null Returns the date18.
     */
    public function getDate18() {
        return $this->date18;
    }

    /**
     * Get the date19.
     *
     * @return DateTime|null Returns the date19.
     */
    public function getDate19() {
        return $this->date19;
    }

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2() {
        return $this->date2;
    }

    /**
     * Get the date20.
     *
     * @return DateTime|null Returns the date20.
     */
    public function getDate20() {
        return $this->date20;
    }

    /**
     * Get the date21.
     *
     * @return DateTime|null Returns the date21.
     */
    public function getDate21() {
        return $this->date21;
    }

    /**
     * Get the date22.
     *
     * @return DateTime|null Returns the date22.
     */
    public function getDate22() {
        return $this->date22;
    }

    /**
     * Get the date23.
     *
     * @return DateTime|null Returns the date23.
     */
    public function getDate23() {
        return $this->date23;
    }

    /**
     * Get the date24.
     *
     * @return DateTime|null Returns the date24.
     */
    public function getDate24() {
        return $this->date24;
    }

    /**
     * Get the date25.
     *
     * @return DateTime|null Returns the date25.
     */
    public function getDate25() {
        return $this->date25;
    }

    /**
     * Get the date26.
     *
     * @return DateTime|null Returns the date26.
     */
    public function getDate26() {
        return $this->date26;
    }

    /**
     * Get the date27.
     *
     * @return DateTime|null Returns the date27.
     */
    public function getDate27() {
        return $this->date27;
    }

    /**
     * Get the date28.
     *
     * @return DateTime|null Returns the date28.
     */
    public function getDate28() {
        return $this->date28;
    }

    /**
     * Get the date29.
     *
     * @return DateTime|null Returns the date29.
     */
    public function getDate29() {
        return $this->date29;
    }

    /**
     * Get the date3.
     *
     * @return DateTime|null Returns the date3.
     */
    public function getDate3() {
        return $this->date3;
    }

    /**
     * Get the date30.
     *
     * @return DateTime|null Returns the date30.
     */
    public function getDate30() {
        return $this->date30;
    }

    /**
     * Get the date31.
     *
     * @return DateTime|null Returns the date31.
     */
    public function getDate31() {
        return $this->date31;
    }

    /**
     * Get the date32.
     *
     * @return DateTime|null Returns the date32.
     */
    public function getDate32() {
        return $this->date32;
    }

    /**
     * Get the date33.
     *
     * @return DateTime|null Returns the date33.
     */
    public function getDate33() {
        return $this->date33;
    }

    /**
     * Get the date34.
     *
     * @return DateTime|null Returns the date34.
     */
    public function getDate34() {
        return $this->date34;
    }

    /**
     * Get the date35.
     *
     * @return DateTime|null Returns the date35.
     */
    public function getDate35() {
        return $this->date35;
    }

    /**
     * Get the date36.
     *
     * @return DateTime|null Returns the date36.
     */
    public function getDate36() {
        return $this->date36;
    }

    /**
     * Get the date37.
     *
     * @return DateTime|null Returns the date37.
     */
    public function getDate37() {
        return $this->date37;
    }

    /**
     * Get the date38.
     *
     * @return DateTime|null Returns the date38.
     */
    public function getDate38() {
        return $this->date38;
    }

    /**
     * Get the date39.
     *
     * @return DateTime|null Returns the date39.
     */
    public function getDate39() {
        return $this->date39;
    }

    /**
     * Get the date4.
     *
     * @return DateTime|null Returns the date4.
     */
    public function getDate4() {
        return $this->date4;
    }

    /**
     * Get the date40.
     *
     * @return DateTime|null Returns the date40.
     */
    public function getDate40() {
        return $this->date40;
    }

    /**
     * Get the date41.
     *
     * @return DateTime|null Returns the date41.
     */
    public function getDate41() {
        return $this->date41;
    }

    /**
     * Get the date42.
     *
     * @return DateTime|null Returns the date42.
     */
    public function getDate42() {
        return $this->date42;
    }

    /**
     * Get the date43.
     *
     * @return DateTime|null Returns the date43.
     */
    public function getDate43() {
        return $this->date43;
    }

    /**
     * Get the date44.
     *
     * @return DateTime|null Returns the date44.
     */
    public function getDate44() {
        return $this->date44;
    }

    /**
     * Get the date45.
     *
     * @return DateTime|null Returns the date45.
     */
    public function getDate45() {
        return $this->date45;
    }

    /**
     * Get the date46.
     *
     * @return DateTime|null Returns the date46.
     */
    public function getDate46() {
        return $this->date46;
    }

    /**
     * Get the date47.
     *
     * @return DateTime|null Returns the date47.
     */
    public function getDate47() {
        return $this->date47;
    }

    /**
     * Get the date48.
     *
     * @return DateTime|null Returns the date48.
     */
    public function getDate48() {
        return $this->date48;
    }

    /**
     * Get the date49.
     *
     * @return DateTime|null Returns the date49.
     */
    public function getDate49() {
        return $this->date49;
    }

    /**
     * Get the date5.
     *
     * @return DateTime|null Returns the date5.
     */
    public function getDate5() {
        return $this->date5;
    }

    /**
     * Get the date50.
     *
     * @return DateTime|null Returns the date50.
     */
    public function getDate50() {
        return $this->date50;
    }

    /**
     * Get the date6.
     *
     * @return DateTime|null Returns the date6.
     */
    public function getDate6() {
        return $this->date6;
    }

    /**
     * Get the date7.
     *
     * @return DateTime|null Returns the date7.
     */
    public function getDate7() {
        return $this->date7;
    }

    /**
     * Get the date8.
     *
     * @return DateTime|null Returns the date8.
     */
    public function getDate8() {
        return $this->date8;
    }

    /**
     * Get the date9.
     *
     * @return DateTime|null Returns the date9.
     */
    public function getDate9() {
        return $this->date9;
    }

    /**
     * Get the texte1.
     *
     * @return string Returns the texte1.
     */
    public function getTexte1() {
        return $this->texte1;
    }

    /**
     * Get the texte10.
     *
     * @return string Returns the texte10.
     */
    public function getTexte10() {
        return $this->texte10;
    }

    /**
     * Get the texte11.
     *
     * @return string Returns the texte11.
     */
    public function getTexte11() {
        return $this->texte11;
    }

    /**
     * Get the texte12.
     *
     * @return string Returns the texte12.
     */
    public function getTexte12() {
        return $this->texte12;
    }

    /**
     * Get the texte13.
     *
     * @return string Returns the texte13.
     */
    public function getTexte13() {
        return $this->texte13;
    }

    /**
     * Get the texte14.
     *
     * @return string Returns the texte14.
     */
    public function getTexte14() {
        return $this->texte14;
    }

    /**
     * Get the texte15.
     *
     * @return string Returns the texte15.
     */
    public function getTexte15() {
        return $this->texte15;
    }

    /**
     * Get the texte16.
     *
     * @return string Returns the texte16.
     */
    public function getTexte16() {
        return $this->texte16;
    }

    /**
     * Get the texte17.
     *
     * @return string Returns the texte17.
     */
    public function getTexte17() {
        return $this->texte17;
    }

    /**
     * Get the texte18.
     *
     * @return string Returns the texte18.
     */
    public function getTexte18() {
        return $this->texte18;
    }

    /**
     * Get the texte19.
     *
     * @return string Returns the texte19.
     */
    public function getTexte19() {
        return $this->texte19;
    }

    /**
     * Get the texte2.
     *
     * @return string Returns the texte2.
     */
    public function getTexte2() {
        return $this->texte2;
    }

    /**
     * Get the texte20.
     *
     * @return string Returns the texte20.
     */
    public function getTexte20() {
        return $this->texte20;
    }

    /**
     * Get the texte21.
     *
     * @return string Returns the texte21.
     */
    public function getTexte21() {
        return $this->texte21;
    }

    /**
     * Get the texte22.
     *
     * @return string Returns the texte22.
     */
    public function getTexte22() {
        return $this->texte22;
    }

    /**
     * Get the texte23.
     *
     * @return string Returns the texte23.
     */
    public function getTexte23() {
        return $this->texte23;
    }

    /**
     * Get the texte24.
     *
     * @return string Returns the texte24.
     */
    public function getTexte24() {
        return $this->texte24;
    }

    /**
     * Get the texte25.
     *
     * @return string Returns the texte25.
     */
    public function getTexte25() {
        return $this->texte25;
    }

    /**
     * Get the texte26.
     *
     * @return string Returns the texte26.
     */
    public function getTexte26() {
        return $this->texte26;
    }

    /**
     * Get the texte27.
     *
     * @return string Returns the texte27.
     */
    public function getTexte27() {
        return $this->texte27;
    }

    /**
     * Get the texte28.
     *
     * @return string Returns the texte28.
     */
    public function getTexte28() {
        return $this->texte28;
    }

    /**
     * Get the texte29.
     *
     * @return string Returns the texte29.
     */
    public function getTexte29() {
        return $this->texte29;
    }

    /**
     * Get the texte3.
     *
     * @return string Returns the texte3.
     */
    public function getTexte3() {
        return $this->texte3;
    }

    /**
     * Get the texte30.
     *
     * @return string Returns the texte30.
     */
    public function getTexte30() {
        return $this->texte30;
    }

    /**
     * Get the texte31.
     *
     * @return string Returns the texte31.
     */
    public function getTexte31() {
        return $this->texte31;
    }

    /**
     * Get the texte32.
     *
     * @return string Returns the texte32.
     */
    public function getTexte32() {
        return $this->texte32;
    }

    /**
     * Get the texte33.
     *
     * @return string Returns the texte33.
     */
    public function getTexte33() {
        return $this->texte33;
    }

    /**
     * Get the texte34.
     *
     * @return string Returns the texte34.
     */
    public function getTexte34() {
        return $this->texte34;
    }

    /**
     * Get the texte35.
     *
     * @return string Returns the texte35.
     */
    public function getTexte35() {
        return $this->texte35;
    }

    /**
     * Get the texte36.
     *
     * @return string Returns the texte36.
     */
    public function getTexte36() {
        return $this->texte36;
    }

    /**
     * Get the texte37.
     *
     * @return string Returns the texte37.
     */
    public function getTexte37() {
        return $this->texte37;
    }

    /**
     * Get the texte38.
     *
     * @return string Returns the texte38.
     */
    public function getTexte38() {
        return $this->texte38;
    }

    /**
     * Get the texte39.
     *
     * @return string Returns the texte39.
     */
    public function getTexte39() {
        return $this->texte39;
    }

    /**
     * Get the texte4.
     *
     * @return string Returns the texte4.
     */
    public function getTexte4() {
        return $this->texte4;
    }

    /**
     * Get the texte40.
     *
     * @return string Returns the texte40.
     */
    public function getTexte40() {
        return $this->texte40;
    }

    /**
     * Get the texte41.
     *
     * @return string Returns the texte41.
     */
    public function getTexte41() {
        return $this->texte41;
    }

    /**
     * Get the texte42.
     *
     * @return string Returns the texte42.
     */
    public function getTexte42() {
        return $this->texte42;
    }

    /**
     * Get the texte43.
     *
     * @return string Returns the texte43.
     */
    public function getTexte43() {
        return $this->texte43;
    }

    /**
     * Get the texte44.
     *
     * @return string Returns the texte44.
     */
    public function getTexte44() {
        return $this->texte44;
    }

    /**
     * Get the texte45.
     *
     * @return string Returns the texte45.
     */
    public function getTexte45() {
        return $this->texte45;
    }

    /**
     * Get the texte46.
     *
     * @return string Returns the texte46.
     */
    public function getTexte46() {
        return $this->texte46;
    }

    /**
     * Get the texte47.
     *
     * @return string Returns the texte47.
     */
    public function getTexte47() {
        return $this->texte47;
    }

    /**
     * Get the texte48.
     *
     * @return string Returns the texte48.
     */
    public function getTexte48() {
        return $this->texte48;
    }

    /**
     * Get the texte49.
     *
     * @return string Returns the texte49.
     */
    public function getTexte49() {
        return $this->texte49;
    }

    /**
     * Get the texte5.
     *
     * @return string Returns the texte5.
     */
    public function getTexte5() {
        return $this->texte5;
    }

    /**
     * Get the texte50.
     *
     * @return string Returns the texte50.
     */
    public function getTexte50() {
        return $this->texte50;
    }

    /**
     * Get the texte6.
     *
     * @return string Returns the texte6.
     */
    public function getTexte6() {
        return $this->texte6;
    }

    /**
     * Get the texte7.
     *
     * @return string Returns the texte7.
     */
    public function getTexte7() {
        return $this->texte7;
    }

    /**
     * Get the texte8.
     *
     * @return string Returns the texte8.
     */
    public function getTexte8() {
        return $this->texte8;
    }

    /**
     * Get the texte9.
     *
     * @return string Returns the texte9.
     */
    public function getTexte9() {
        return $this->texte9;
    }

    /**
     * Get the valeur1.
     *
     * @return float Returns the valeur1.
     */
    public function getValeur1() {
        return $this->valeur1;
    }

    /**
     * Get the valeur10.
     *
     * @return float Returns the valeur10.
     */
    public function getValeur10() {
        return $this->valeur10;
    }

    /**
     * Get the valeur11.
     *
     * @return float Returns the valeur11.
     */
    public function getValeur11() {
        return $this->valeur11;
    }

    /**
     * Get the valeur12.
     *
     * @return float Returns the valeur12.
     */
    public function getValeur12() {
        return $this->valeur12;
    }

    /**
     * Get the valeur13.
     *
     * @return float Returns the valeur13.
     */
    public function getValeur13() {
        return $this->valeur13;
    }

    /**
     * Get the valeur14.
     *
     * @return float Returns the valeur14.
     */
    public function getValeur14() {
        return $this->valeur14;
    }

    /**
     * Get the valeur15.
     *
     * @return float Returns the valeur15.
     */
    public function getValeur15() {
        return $this->valeur15;
    }

    /**
     * Get the valeur16.
     *
     * @return float Returns the valeur16.
     */
    public function getValeur16() {
        return $this->valeur16;
    }

    /**
     * Get the valeur17.
     *
     * @return float Returns the valeur17.
     */
    public function getValeur17() {
        return $this->valeur17;
    }

    /**
     * Get the valeur18.
     *
     * @return float Returns the valeur18.
     */
    public function getValeur18() {
        return $this->valeur18;
    }

    /**
     * Get the valeur19.
     *
     * @return float Returns the valeur19.
     */
    public function getValeur19() {
        return $this->valeur19;
    }

    /**
     * Get the valeur2.
     *
     * @return float Returns the valeur2.
     */
    public function getValeur2() {
        return $this->valeur2;
    }

    /**
     * Get the valeur20.
     *
     * @return float Returns the valeur20.
     */
    public function getValeur20() {
        return $this->valeur20;
    }

    /**
     * Get the valeur21.
     *
     * @return float Returns the valeur21.
     */
    public function getValeur21() {
        return $this->valeur21;
    }

    /**
     * Get the valeur22.
     *
     * @return float Returns the valeur22.
     */
    public function getValeur22() {
        return $this->valeur22;
    }

    /**
     * Get the valeur23.
     *
     * @return float Returns the valeur23.
     */
    public function getValeur23() {
        return $this->valeur23;
    }

    /**
     * Get the valeur24.
     *
     * @return float Returns the valeur24.
     */
    public function getValeur24() {
        return $this->valeur24;
    }

    /**
     * Get the valeur25.
     *
     * @return float Returns the valeur25.
     */
    public function getValeur25() {
        return $this->valeur25;
    }

    /**
     * Get the valeur26.
     *
     * @return float Returns the valeur26.
     */
    public function getValeur26() {
        return $this->valeur26;
    }

    /**
     * Get the valeur27.
     *
     * @return float Returns the valeur27.
     */
    public function getValeur27() {
        return $this->valeur27;
    }

    /**
     * Get the valeur28.
     *
     * @return float Returns the valeur28.
     */
    public function getValeur28() {
        return $this->valeur28;
    }

    /**
     * Get the valeur29.
     *
     * @return float Returns the valeur29.
     */
    public function getValeur29() {
        return $this->valeur29;
    }

    /**
     * Get the valeur3.
     *
     * @return float Returns the valeur3.
     */
    public function getValeur3() {
        return $this->valeur3;
    }

    /**
     * Get the valeur30.
     *
     * @return float Returns the valeur30.
     */
    public function getValeur30() {
        return $this->valeur30;
    }

    /**
     * Get the valeur31.
     *
     * @return float Returns the valeur31.
     */
    public function getValeur31() {
        return $this->valeur31;
    }

    /**
     * Get the valeur32.
     *
     * @return float Returns the valeur32.
     */
    public function getValeur32() {
        return $this->valeur32;
    }

    /**
     * Get the valeur33.
     *
     * @return float Returns the valeur33.
     */
    public function getValeur33() {
        return $this->valeur33;
    }

    /**
     * Get the valeur34.
     *
     * @return float Returns the valeur34.
     */
    public function getValeur34() {
        return $this->valeur34;
    }

    /**
     * Get the valeur35.
     *
     * @return float Returns the valeur35.
     */
    public function getValeur35() {
        return $this->valeur35;
    }

    /**
     * Get the valeur36.
     *
     * @return float Returns the valeur36.
     */
    public function getValeur36() {
        return $this->valeur36;
    }

    /**
     * Get the valeur37.
     *
     * @return float Returns the valeur37.
     */
    public function getValeur37() {
        return $this->valeur37;
    }

    /**
     * Get the valeur38.
     *
     * @return float Returns the valeur38.
     */
    public function getValeur38() {
        return $this->valeur38;
    }

    /**
     * Get the valeur39.
     *
     * @return float Returns the valeur39.
     */
    public function getValeur39() {
        return $this->valeur39;
    }

    /**
     * Get the valeur4.
     *
     * @return float Returns the valeur4.
     */
    public function getValeur4() {
        return $this->valeur4;
    }

    /**
     * Get the valeur40.
     *
     * @return float Returns the valeur40.
     */
    public function getValeur40() {
        return $this->valeur40;
    }

    /**
     * Get the valeur41.
     *
     * @return float Returns the valeur41.
     */
    public function getValeur41() {
        return $this->valeur41;
    }

    /**
     * Get the valeur42.
     *
     * @return float Returns the valeur42.
     */
    public function getValeur42() {
        return $this->valeur42;
    }

    /**
     * Get the valeur43.
     *
     * @return float Returns the valeur43.
     */
    public function getValeur43() {
        return $this->valeur43;
    }

    /**
     * Get the valeur44.
     *
     * @return float Returns the valeur44.
     */
    public function getValeur44() {
        return $this->valeur44;
    }

    /**
     * Get the valeur45.
     *
     * @return float Returns the valeur45.
     */
    public function getValeur45() {
        return $this->valeur45;
    }

    /**
     * Get the valeur46.
     *
     * @return float Returns the valeur46.
     */
    public function getValeur46() {
        return $this->valeur46;
    }

    /**
     * Get the valeur47.
     *
     * @return float Returns the valeur47.
     */
    public function getValeur47() {
        return $this->valeur47;
    }

    /**
     * Get the valeur48.
     *
     * @return float Returns the valeur48.
     */
    public function getValeur48() {
        return $this->valeur48;
    }

    /**
     * Get the valeur49.
     *
     * @return float Returns the valeur49.
     */
    public function getValeur49() {
        return $this->valeur49;
    }

    /**
     * Get the valeur5.
     *
     * @return float Returns the valeur5.
     */
    public function getValeur5() {
        return $this->valeur5;
    }

    /**
     * Get the valeur50.
     *
     * @return float Returns the valeur50.
     */
    public function getValeur50() {
        return $this->valeur50;
    }

    /**
     * Get the valeur6.
     *
     * @return float Returns the valeur6.
     */
    public function getValeur6() {
        return $this->valeur6;
    }

    /**
     * Get the valeur7.
     *
     * @return float Returns the valeur7.
     */
    public function getValeur7() {
        return $this->valeur7;
    }

    /**
     * Get the valeur8.
     *
     * @return float Returns the valeur8.
     */
    public function getValeur8() {
        return $this->valeur8;
    }

    /**
     * Get the valeur9.
     *
     * @return float Returns the valeur9.
     */
    public function getValeur9() {
        return $this->valeur9;
    }

    /**
     * Set the case1.
     *
     * @param bool $case1 The case1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase1($case1) {
        $this->case1 = $case1;
        return $this;
    }

    /**
     * Set the case10.
     *
     * @param bool $case10 The case10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase10($case10) {
        $this->case10 = $case10;
        return $this;
    }

    /**
     * Set the case11.
     *
     * @param bool $case11 The case11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase11($case11) {
        $this->case11 = $case11;
        return $this;
    }

    /**
     * Set the case12.
     *
     * @param bool $case12 The case12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase12($case12) {
        $this->case12 = $case12;
        return $this;
    }

    /**
     * Set the case13.
     *
     * @param bool $case13 The case13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase13($case13) {
        $this->case13 = $case13;
        return $this;
    }

    /**
     * Set the case14.
     *
     * @param bool $case14 The case14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase14($case14) {
        $this->case14 = $case14;
        return $this;
    }

    /**
     * Set the case15.
     *
     * @param bool $case15 The case15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase15($case15) {
        $this->case15 = $case15;
        return $this;
    }

    /**
     * Set the case16.
     *
     * @param bool $case16 The case16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase16($case16) {
        $this->case16 = $case16;
        return $this;
    }

    /**
     * Set the case17.
     *
     * @param bool $case17 The case17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase17($case17) {
        $this->case17 = $case17;
        return $this;
    }

    /**
     * Set the case18.
     *
     * @param bool $case18 The case18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase18($case18) {
        $this->case18 = $case18;
        return $this;
    }

    /**
     * Set the case19.
     *
     * @param bool $case19 The case19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase19($case19) {
        $this->case19 = $case19;
        return $this;
    }

    /**
     * Set the case2.
     *
     * @param bool $case2 The case2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase2($case2) {
        $this->case2 = $case2;
        return $this;
    }

    /**
     * Set the case20.
     *
     * @param bool $case20 The case20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase20($case20) {
        $this->case20 = $case20;
        return $this;
    }

    /**
     * Set the case21.
     *
     * @param bool $case21 The case21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase21($case21) {
        $this->case21 = $case21;
        return $this;
    }

    /**
     * Set the case22.
     *
     * @param bool $case22 The case22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase22($case22) {
        $this->case22 = $case22;
        return $this;
    }

    /**
     * Set the case23.
     *
     * @param bool $case23 The case23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase23($case23) {
        $this->case23 = $case23;
        return $this;
    }

    /**
     * Set the case24.
     *
     * @param bool $case24 The case24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase24($case24) {
        $this->case24 = $case24;
        return $this;
    }

    /**
     * Set the case25.
     *
     * @param bool $case25 The case25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase25($case25) {
        $this->case25 = $case25;
        return $this;
    }

    /**
     * Set the case26.
     *
     * @param bool $case26 The case26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase26($case26) {
        $this->case26 = $case26;
        return $this;
    }

    /**
     * Set the case27.
     *
     * @param bool $case27 The case27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase27($case27) {
        $this->case27 = $case27;
        return $this;
    }

    /**
     * Set the case28.
     *
     * @param bool $case28 The case28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase28($case28) {
        $this->case28 = $case28;
        return $this;
    }

    /**
     * Set the case29.
     *
     * @param bool $case29 The case29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase29($case29) {
        $this->case29 = $case29;
        return $this;
    }

    /**
     * Set the case3.
     *
     * @param bool $case3 The case3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase3($case3) {
        $this->case3 = $case3;
        return $this;
    }

    /**
     * Set the case30.
     *
     * @param bool $case30 The case30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase30($case30) {
        $this->case30 = $case30;
        return $this;
    }

    /**
     * Set the case31.
     *
     * @param bool $case31 The case31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase31($case31) {
        $this->case31 = $case31;
        return $this;
    }

    /**
     * Set the case32.
     *
     * @param bool $case32 The case32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase32($case32) {
        $this->case32 = $case32;
        return $this;
    }

    /**
     * Set the case33.
     *
     * @param bool $case33 The case33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase33($case33) {
        $this->case33 = $case33;
        return $this;
    }

    /**
     * Set the case34.
     *
     * @param bool $case34 The case34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase34($case34) {
        $this->case34 = $case34;
        return $this;
    }

    /**
     * Set the case35.
     *
     * @param bool $case35 The case35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase35($case35) {
        $this->case35 = $case35;
        return $this;
    }

    /**
     * Set the case36.
     *
     * @param bool $case36 The case36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase36($case36) {
        $this->case36 = $case36;
        return $this;
    }

    /**
     * Set the case37.
     *
     * @param bool $case37 The case37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase37($case37) {
        $this->case37 = $case37;
        return $this;
    }

    /**
     * Set the case38.
     *
     * @param bool $case38 The case38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase38($case38) {
        $this->case38 = $case38;
        return $this;
    }

    /**
     * Set the case39.
     *
     * @param bool $case39 The case39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase39($case39) {
        $this->case39 = $case39;
        return $this;
    }

    /**
     * Set the case4.
     *
     * @param bool $case4 The case4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase4($case4) {
        $this->case4 = $case4;
        return $this;
    }

    /**
     * Set the case40.
     *
     * @param bool $case40 The case40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase40($case40) {
        $this->case40 = $case40;
        return $this;
    }

    /**
     * Set the case41.
     *
     * @param bool $case41 The case41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase41($case41) {
        $this->case41 = $case41;
        return $this;
    }

    /**
     * Set the case42.
     *
     * @param bool $case42 The case42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase42($case42) {
        $this->case42 = $case42;
        return $this;
    }

    /**
     * Set the case43.
     *
     * @param bool $case43 The case43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase43($case43) {
        $this->case43 = $case43;
        return $this;
    }

    /**
     * Set the case44.
     *
     * @param bool $case44 The case44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase44($case44) {
        $this->case44 = $case44;
        return $this;
    }

    /**
     * Set the case45.
     *
     * @param bool $case45 The case45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase45($case45) {
        $this->case45 = $case45;
        return $this;
    }

    /**
     * Set the case46.
     *
     * @param bool $case46 The case46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase46($case46) {
        $this->case46 = $case46;
        return $this;
    }

    /**
     * Set the case47.
     *
     * @param bool $case47 The case47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase47($case47) {
        $this->case47 = $case47;
        return $this;
    }

    /**
     * Set the case48.
     *
     * @param bool $case48 The case48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase48($case48) {
        $this->case48 = $case48;
        return $this;
    }

    /**
     * Set the case49.
     *
     * @param bool $case49 The case49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase49($case49) {
        $this->case49 = $case49;
        return $this;
    }

    /**
     * Set the case5.
     *
     * @param bool $case5 The case5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase5($case5) {
        $this->case5 = $case5;
        return $this;
    }

    /**
     * Set the case50.
     *
     * @param bool $case50 The case50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase50($case50) {
        $this->case50 = $case50;
        return $this;
    }

    /**
     * Set the case6.
     *
     * @param bool $case6 The case6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase6($case6) {
        $this->case6 = $case6;
        return $this;
    }

    /**
     * Set the case7.
     *
     * @param bool $case7 The case7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase7($case7) {
        $this->case7 = $case7;
        return $this;
    }

    /**
     * Set the case8.
     *
     * @param bool $case8 The case8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase8($case8) {
        $this->case8 = $case8;
        return $this;
    }

    /**
     * Set the case9.
     *
     * @param bool $case9 The case9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase9($case9) {
        $this->case9 = $case9;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate1(DateTime $date1 = null) {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate10(DateTime $date10 = null) {
        $this->date10 = $date10;
        return $this;
    }

    /**
     * Set the date11.
     *
     * @param DateTime|null $date11 The date11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate11(DateTime $date11 = null) {
        $this->date11 = $date11;
        return $this;
    }

    /**
     * Set the date12.
     *
     * @param DateTime|null $date12 The date12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate12(DateTime $date12 = null) {
        $this->date12 = $date12;
        return $this;
    }

    /**
     * Set the date13.
     *
     * @param DateTime|null $date13 The date13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate13(DateTime $date13 = null) {
        $this->date13 = $date13;
        return $this;
    }

    /**
     * Set the date14.
     *
     * @param DateTime|null $date14 The date14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate14(DateTime $date14 = null) {
        $this->date14 = $date14;
        return $this;
    }

    /**
     * Set the date15.
     *
     * @param DateTime|null $date15 The date15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate15(DateTime $date15 = null) {
        $this->date15 = $date15;
        return $this;
    }

    /**
     * Set the date16.
     *
     * @param DateTime|null $date16 The date16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate16(DateTime $date16 = null) {
        $this->date16 = $date16;
        return $this;
    }

    /**
     * Set the date17.
     *
     * @param DateTime|null $date17 The date17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate17(DateTime $date17 = null) {
        $this->date17 = $date17;
        return $this;
    }

    /**
     * Set the date18.
     *
     * @param DateTime|null $date18 The date18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate18(DateTime $date18 = null) {
        $this->date18 = $date18;
        return $this;
    }

    /**
     * Set the date19.
     *
     * @param DateTime|null $date19 The date19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate19(DateTime $date19 = null) {
        $this->date19 = $date19;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate2(DateTime $date2 = null) {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the date20.
     *
     * @param DateTime|null $date20 The date20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate20(DateTime $date20 = null) {
        $this->date20 = $date20;
        return $this;
    }

    /**
     * Set the date21.
     *
     * @param DateTime|null $date21 The date21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate21(DateTime $date21 = null) {
        $this->date21 = $date21;
        return $this;
    }

    /**
     * Set the date22.
     *
     * @param DateTime|null $date22 The date22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate22(DateTime $date22 = null) {
        $this->date22 = $date22;
        return $this;
    }

    /**
     * Set the date23.
     *
     * @param DateTime|null $date23 The date23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate23(DateTime $date23 = null) {
        $this->date23 = $date23;
        return $this;
    }

    /**
     * Set the date24.
     *
     * @param DateTime|null $date24 The date24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate24(DateTime $date24 = null) {
        $this->date24 = $date24;
        return $this;
    }

    /**
     * Set the date25.
     *
     * @param DateTime|null $date25 The date25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate25(DateTime $date25 = null) {
        $this->date25 = $date25;
        return $this;
    }

    /**
     * Set the date26.
     *
     * @param DateTime|null $date26 The date26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate26(DateTime $date26 = null) {
        $this->date26 = $date26;
        return $this;
    }

    /**
     * Set the date27.
     *
     * @param DateTime|null $date27 The date27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate27(DateTime $date27 = null) {
        $this->date27 = $date27;
        return $this;
    }

    /**
     * Set the date28.
     *
     * @param DateTime|null $date28 The date28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate28(DateTime $date28 = null) {
        $this->date28 = $date28;
        return $this;
    }

    /**
     * Set the date29.
     *
     * @param DateTime|null $date29 The date29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate29(DateTime $date29 = null) {
        $this->date29 = $date29;
        return $this;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate3(DateTime $date3 = null) {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Set the date30.
     *
     * @param DateTime|null $date30 The date30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate30(DateTime $date30 = null) {
        $this->date30 = $date30;
        return $this;
    }

    /**
     * Set the date31.
     *
     * @param DateTime|null $date31 The date31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate31(DateTime $date31 = null) {
        $this->date31 = $date31;
        return $this;
    }

    /**
     * Set the date32.
     *
     * @param DateTime|null $date32 The date32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate32(DateTime $date32 = null) {
        $this->date32 = $date32;
        return $this;
    }

    /**
     * Set the date33.
     *
     * @param DateTime|null $date33 The date33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate33(DateTime $date33 = null) {
        $this->date33 = $date33;
        return $this;
    }

    /**
     * Set the date34.
     *
     * @param DateTime|null $date34 The date34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate34(DateTime $date34 = null) {
        $this->date34 = $date34;
        return $this;
    }

    /**
     * Set the date35.
     *
     * @param DateTime|null $date35 The date35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate35(DateTime $date35 = null) {
        $this->date35 = $date35;
        return $this;
    }

    /**
     * Set the date36.
     *
     * @param DateTime|null $date36 The date36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate36(DateTime $date36 = null) {
        $this->date36 = $date36;
        return $this;
    }

    /**
     * Set the date37.
     *
     * @param DateTime|null $date37 The date37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate37(DateTime $date37 = null) {
        $this->date37 = $date37;
        return $this;
    }

    /**
     * Set the date38.
     *
     * @param DateTime|null $date38 The date38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate38(DateTime $date38 = null) {
        $this->date38 = $date38;
        return $this;
    }

    /**
     * Set the date39.
     *
     * @param DateTime|null $date39 The date39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate39(DateTime $date39 = null) {
        $this->date39 = $date39;
        return $this;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate4(DateTime $date4 = null) {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Set the date40.
     *
     * @param DateTime|null $date40 The date40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate40(DateTime $date40 = null) {
        $this->date40 = $date40;
        return $this;
    }

    /**
     * Set the date41.
     *
     * @param DateTime|null $date41 The date41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate41(DateTime $date41 = null) {
        $this->date41 = $date41;
        return $this;
    }

    /**
     * Set the date42.
     *
     * @param DateTime|null $date42 The date42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate42(DateTime $date42 = null) {
        $this->date42 = $date42;
        return $this;
    }

    /**
     * Set the date43.
     *
     * @param DateTime|null $date43 The date43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate43(DateTime $date43 = null) {
        $this->date43 = $date43;
        return $this;
    }

    /**
     * Set the date44.
     *
     * @param DateTime|null $date44 The date44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate44(DateTime $date44 = null) {
        $this->date44 = $date44;
        return $this;
    }

    /**
     * Set the date45.
     *
     * @param DateTime|null $date45 The date45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate45(DateTime $date45 = null) {
        $this->date45 = $date45;
        return $this;
    }

    /**
     * Set the date46.
     *
     * @param DateTime|null $date46 The date46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate46(DateTime $date46 = null) {
        $this->date46 = $date46;
        return $this;
    }

    /**
     * Set the date47.
     *
     * @param DateTime|null $date47 The date47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate47(DateTime $date47 = null) {
        $this->date47 = $date47;
        return $this;
    }

    /**
     * Set the date48.
     *
     * @param DateTime|null $date48 The date48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate48(DateTime $date48 = null) {
        $this->date48 = $date48;
        return $this;
    }

    /**
     * Set the date49.
     *
     * @param DateTime|null $date49 The date49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate49(DateTime $date49 = null) {
        $this->date49 = $date49;
        return $this;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate5(DateTime $date5 = null) {
        $this->date5 = $date5;
        return $this;
    }

    /**
     * Set the date50.
     *
     * @param DateTime|null $date50 The date50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate50(DateTime $date50 = null) {
        $this->date50 = $date50;
        return $this;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate6(DateTime $date6 = null) {
        $this->date6 = $date6;
        return $this;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate7(DateTime $date7 = null) {
        $this->date7 = $date7;
        return $this;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate8(DateTime $date8 = null) {
        $this->date8 = $date8;
        return $this;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate9(DateTime $date9 = null) {
        $this->date9 = $date9;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string $texte1 The texte1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte1($texte1) {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte10.
     *
     * @param string $texte10 The texte10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte10($texte10) {
        $this->texte10 = $texte10;
        return $this;
    }

    /**
     * Set the texte11.
     *
     * @param string $texte11 The texte11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte11($texte11) {
        $this->texte11 = $texte11;
        return $this;
    }

    /**
     * Set the texte12.
     *
     * @param string $texte12 The texte12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte12($texte12) {
        $this->texte12 = $texte12;
        return $this;
    }

    /**
     * Set the texte13.
     *
     * @param string $texte13 The texte13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte13($texte13) {
        $this->texte13 = $texte13;
        return $this;
    }

    /**
     * Set the texte14.
     *
     * @param string $texte14 The texte14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte14($texte14) {
        $this->texte14 = $texte14;
        return $this;
    }

    /**
     * Set the texte15.
     *
     * @param string $texte15 The texte15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte15($texte15) {
        $this->texte15 = $texte15;
        return $this;
    }

    /**
     * Set the texte16.
     *
     * @param string $texte16 The texte16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte16($texte16) {
        $this->texte16 = $texte16;
        return $this;
    }

    /**
     * Set the texte17.
     *
     * @param string $texte17 The texte17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte17($texte17) {
        $this->texte17 = $texte17;
        return $this;
    }

    /**
     * Set the texte18.
     *
     * @param string $texte18 The texte18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte18($texte18) {
        $this->texte18 = $texte18;
        return $this;
    }

    /**
     * Set the texte19.
     *
     * @param string $texte19 The texte19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte19($texte19) {
        $this->texte19 = $texte19;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string $texte2 The texte2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte2($texte2) {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte20.
     *
     * @param string $texte20 The texte20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte20($texte20) {
        $this->texte20 = $texte20;
        return $this;
    }

    /**
     * Set the texte21.
     *
     * @param string $texte21 The texte21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte21($texte21) {
        $this->texte21 = $texte21;
        return $this;
    }

    /**
     * Set the texte22.
     *
     * @param string $texte22 The texte22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte22($texte22) {
        $this->texte22 = $texte22;
        return $this;
    }

    /**
     * Set the texte23.
     *
     * @param string $texte23 The texte23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte23($texte23) {
        $this->texte23 = $texte23;
        return $this;
    }

    /**
     * Set the texte24.
     *
     * @param string $texte24 The texte24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte24($texte24) {
        $this->texte24 = $texte24;
        return $this;
    }

    /**
     * Set the texte25.
     *
     * @param string $texte25 The texte25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte25($texte25) {
        $this->texte25 = $texte25;
        return $this;
    }

    /**
     * Set the texte26.
     *
     * @param string $texte26 The texte26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte26($texte26) {
        $this->texte26 = $texte26;
        return $this;
    }

    /**
     * Set the texte27.
     *
     * @param string $texte27 The texte27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte27($texte27) {
        $this->texte27 = $texte27;
        return $this;
    }

    /**
     * Set the texte28.
     *
     * @param string $texte28 The texte28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte28($texte28) {
        $this->texte28 = $texte28;
        return $this;
    }

    /**
     * Set the texte29.
     *
     * @param string $texte29 The texte29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte29($texte29) {
        $this->texte29 = $texte29;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string $texte3 The texte3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte3($texte3) {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte30.
     *
     * @param string $texte30 The texte30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte30($texte30) {
        $this->texte30 = $texte30;
        return $this;
    }

    /**
     * Set the texte31.
     *
     * @param string $texte31 The texte31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte31($texte31) {
        $this->texte31 = $texte31;
        return $this;
    }

    /**
     * Set the texte32.
     *
     * @param string $texte32 The texte32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte32($texte32) {
        $this->texte32 = $texte32;
        return $this;
    }

    /**
     * Set the texte33.
     *
     * @param string $texte33 The texte33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte33($texte33) {
        $this->texte33 = $texte33;
        return $this;
    }

    /**
     * Set the texte34.
     *
     * @param string $texte34 The texte34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte34($texte34) {
        $this->texte34 = $texte34;
        return $this;
    }

    /**
     * Set the texte35.
     *
     * @param string $texte35 The texte35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte35($texte35) {
        $this->texte35 = $texte35;
        return $this;
    }

    /**
     * Set the texte36.
     *
     * @param string $texte36 The texte36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte36($texte36) {
        $this->texte36 = $texte36;
        return $this;
    }

    /**
     * Set the texte37.
     *
     * @param string $texte37 The texte37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte37($texte37) {
        $this->texte37 = $texte37;
        return $this;
    }

    /**
     * Set the texte38.
     *
     * @param string $texte38 The texte38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte38($texte38) {
        $this->texte38 = $texte38;
        return $this;
    }

    /**
     * Set the texte39.
     *
     * @param string $texte39 The texte39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte39($texte39) {
        $this->texte39 = $texte39;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string $texte4 The texte4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte4($texte4) {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte40.
     *
     * @param string $texte40 The texte40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte40($texte40) {
        $this->texte40 = $texte40;
        return $this;
    }

    /**
     * Set the texte41.
     *
     * @param string $texte41 The texte41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte41($texte41) {
        $this->texte41 = $texte41;
        return $this;
    }

    /**
     * Set the texte42.
     *
     * @param string $texte42 The texte42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte42($texte42) {
        $this->texte42 = $texte42;
        return $this;
    }

    /**
     * Set the texte43.
     *
     * @param string $texte43 The texte43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte43($texte43) {
        $this->texte43 = $texte43;
        return $this;
    }

    /**
     * Set the texte44.
     *
     * @param string $texte44 The texte44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte44($texte44) {
        $this->texte44 = $texte44;
        return $this;
    }

    /**
     * Set the texte45.
     *
     * @param string $texte45 The texte45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte45($texte45) {
        $this->texte45 = $texte45;
        return $this;
    }

    /**
     * Set the texte46.
     *
     * @param string $texte46 The texte46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte46($texte46) {
        $this->texte46 = $texte46;
        return $this;
    }

    /**
     * Set the texte47.
     *
     * @param string $texte47 The texte47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte47($texte47) {
        $this->texte47 = $texte47;
        return $this;
    }

    /**
     * Set the texte48.
     *
     * @param string $texte48 The texte48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte48($texte48) {
        $this->texte48 = $texte48;
        return $this;
    }

    /**
     * Set the texte49.
     *
     * @param string $texte49 The texte49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte49($texte49) {
        $this->texte49 = $texte49;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string $texte5 The texte5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte5($texte5) {
        $this->texte5 = $texte5;
        return $this;
    }

    /**
     * Set the texte50.
     *
     * @param string $texte50 The texte50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte50($texte50) {
        $this->texte50 = $texte50;
        return $this;
    }

    /**
     * Set the texte6.
     *
     * @param string $texte6 The texte6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte6($texte6) {
        $this->texte6 = $texte6;
        return $this;
    }

    /**
     * Set the texte7.
     *
     * @param string $texte7 The texte7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte7($texte7) {
        $this->texte7 = $texte7;
        return $this;
    }

    /**
     * Set the texte8.
     *
     * @param string $texte8 The texte8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte8($texte8) {
        $this->texte8 = $texte8;
        return $this;
    }

    /**
     * Set the texte9.
     *
     * @param string $texte9 The texte9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte9($texte9) {
        $this->texte9 = $texte9;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float $valeur1 The valeur1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur1($valeur1) {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur10.
     *
     * @param float $valeur10 The valeur10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur10($valeur10) {
        $this->valeur10 = $valeur10;
        return $this;
    }

    /**
     * Set the valeur11.
     *
     * @param float $valeur11 The valeur11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur11($valeur11) {
        $this->valeur11 = $valeur11;
        return $this;
    }

    /**
     * Set the valeur12.
     *
     * @param float $valeur12 The valeur12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur12($valeur12) {
        $this->valeur12 = $valeur12;
        return $this;
    }

    /**
     * Set the valeur13.
     *
     * @param float $valeur13 The valeur13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur13($valeur13) {
        $this->valeur13 = $valeur13;
        return $this;
    }

    /**
     * Set the valeur14.
     *
     * @param float $valeur14 The valeur14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur14($valeur14) {
        $this->valeur14 = $valeur14;
        return $this;
    }

    /**
     * Set the valeur15.
     *
     * @param float $valeur15 The valeur15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur15($valeur15) {
        $this->valeur15 = $valeur15;
        return $this;
    }

    /**
     * Set the valeur16.
     *
     * @param float $valeur16 The valeur16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur16($valeur16) {
        $this->valeur16 = $valeur16;
        return $this;
    }

    /**
     * Set the valeur17.
     *
     * @param float $valeur17 The valeur17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur17($valeur17) {
        $this->valeur17 = $valeur17;
        return $this;
    }

    /**
     * Set the valeur18.
     *
     * @param float $valeur18 The valeur18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur18($valeur18) {
        $this->valeur18 = $valeur18;
        return $this;
    }

    /**
     * Set the valeur19.
     *
     * @param float $valeur19 The valeur19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur19($valeur19) {
        $this->valeur19 = $valeur19;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float $valeur2 The valeur2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur2($valeur2) {
        $this->valeur2 = $valeur2;
        return $this;
    }

    /**
     * Set the valeur20.
     *
     * @param float $valeur20 The valeur20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur20($valeur20) {
        $this->valeur20 = $valeur20;
        return $this;
    }

    /**
     * Set the valeur21.
     *
     * @param float $valeur21 The valeur21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur21($valeur21) {
        $this->valeur21 = $valeur21;
        return $this;
    }

    /**
     * Set the valeur22.
     *
     * @param float $valeur22 The valeur22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur22($valeur22) {
        $this->valeur22 = $valeur22;
        return $this;
    }

    /**
     * Set the valeur23.
     *
     * @param float $valeur23 The valeur23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur23($valeur23) {
        $this->valeur23 = $valeur23;
        return $this;
    }

    /**
     * Set the valeur24.
     *
     * @param float $valeur24 The valeur24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur24($valeur24) {
        $this->valeur24 = $valeur24;
        return $this;
    }

    /**
     * Set the valeur25.
     *
     * @param float $valeur25 The valeur25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur25($valeur25) {
        $this->valeur25 = $valeur25;
        return $this;
    }

    /**
     * Set the valeur26.
     *
     * @param float $valeur26 The valeur26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur26($valeur26) {
        $this->valeur26 = $valeur26;
        return $this;
    }

    /**
     * Set the valeur27.
     *
     * @param float $valeur27 The valeur27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur27($valeur27) {
        $this->valeur27 = $valeur27;
        return $this;
    }

    /**
     * Set the valeur28.
     *
     * @param float $valeur28 The valeur28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur28($valeur28) {
        $this->valeur28 = $valeur28;
        return $this;
    }

    /**
     * Set the valeur29.
     *
     * @param float $valeur29 The valeur29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur29($valeur29) {
        $this->valeur29 = $valeur29;
        return $this;
    }

    /**
     * Set the valeur3.
     *
     * @param float $valeur3 The valeur3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur3($valeur3) {
        $this->valeur3 = $valeur3;
        return $this;
    }

    /**
     * Set the valeur30.
     *
     * @param float $valeur30 The valeur30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur30($valeur30) {
        $this->valeur30 = $valeur30;
        return $this;
    }

    /**
     * Set the valeur31.
     *
     * @param float $valeur31 The valeur31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur31($valeur31) {
        $this->valeur31 = $valeur31;
        return $this;
    }

    /**
     * Set the valeur32.
     *
     * @param float $valeur32 The valeur32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur32($valeur32) {
        $this->valeur32 = $valeur32;
        return $this;
    }

    /**
     * Set the valeur33.
     *
     * @param float $valeur33 The valeur33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur33($valeur33) {
        $this->valeur33 = $valeur33;
        return $this;
    }

    /**
     * Set the valeur34.
     *
     * @param float $valeur34 The valeur34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur34($valeur34) {
        $this->valeur34 = $valeur34;
        return $this;
    }

    /**
     * Set the valeur35.
     *
     * @param float $valeur35 The valeur35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur35($valeur35) {
        $this->valeur35 = $valeur35;
        return $this;
    }

    /**
     * Set the valeur36.
     *
     * @param float $valeur36 The valeur36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur36($valeur36) {
        $this->valeur36 = $valeur36;
        return $this;
    }

    /**
     * Set the valeur37.
     *
     * @param float $valeur37 The valeur37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur37($valeur37) {
        $this->valeur37 = $valeur37;
        return $this;
    }

    /**
     * Set the valeur38.
     *
     * @param float $valeur38 The valeur38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur38($valeur38) {
        $this->valeur38 = $valeur38;
        return $this;
    }

    /**
     * Set the valeur39.
     *
     * @param float $valeur39 The valeur39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur39($valeur39) {
        $this->valeur39 = $valeur39;
        return $this;
    }

    /**
     * Set the valeur4.
     *
     * @param float $valeur4 The valeur4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur4($valeur4) {
        $this->valeur4 = $valeur4;
        return $this;
    }

    /**
     * Set the valeur40.
     *
     * @param float $valeur40 The valeur40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur40($valeur40) {
        $this->valeur40 = $valeur40;
        return $this;
    }

    /**
     * Set the valeur41.
     *
     * @param float $valeur41 The valeur41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur41($valeur41) {
        $this->valeur41 = $valeur41;
        return $this;
    }

    /**
     * Set the valeur42.
     *
     * @param float $valeur42 The valeur42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur42($valeur42) {
        $this->valeur42 = $valeur42;
        return $this;
    }

    /**
     * Set the valeur43.
     *
     * @param float $valeur43 The valeur43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur43($valeur43) {
        $this->valeur43 = $valeur43;
        return $this;
    }

    /**
     * Set the valeur44.
     *
     * @param float $valeur44 The valeur44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur44($valeur44) {
        $this->valeur44 = $valeur44;
        return $this;
    }

    /**
     * Set the valeur45.
     *
     * @param float $valeur45 The valeur45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur45($valeur45) {
        $this->valeur45 = $valeur45;
        return $this;
    }

    /**
     * Set the valeur46.
     *
     * @param float $valeur46 The valeur46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur46($valeur46) {
        $this->valeur46 = $valeur46;
        return $this;
    }

    /**
     * Set the valeur47.
     *
     * @param float $valeur47 The valeur47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur47($valeur47) {
        $this->valeur47 = $valeur47;
        return $this;
    }

    /**
     * Set the valeur48.
     *
     * @param float $valeur48 The valeur48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur48($valeur48) {
        $this->valeur48 = $valeur48;
        return $this;
    }

    /**
     * Set the valeur49.
     *
     * @param float $valeur49 The valeur49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur49($valeur49) {
        $this->valeur49 = $valeur49;
        return $this;
    }

    /**
     * Set the valeur5.
     *
     * @param float $valeur5 The valeur5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur5($valeur5) {
        $this->valeur5 = $valeur5;
        return $this;
    }

    /**
     * Set the valeur50.
     *
     * @param float $valeur50 The valeur50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur50($valeur50) {
        $this->valeur50 = $valeur50;
        return $this;
    }

    /**
     * Set the valeur6.
     *
     * @param float $valeur6 The valeur6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur6($valeur6) {
        $this->valeur6 = $valeur6;
        return $this;
    }

    /**
     * Set the valeur7.
     *
     * @param float $valeur7 The valeur7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur7($valeur7) {
        $this->valeur7 = $valeur7;
        return $this;
    }

    /**
     * Set the valeur8.
     *
     * @param float $valeur8 The valeur8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur8($valeur8) {
        $this->valeur8 = $valeur8;
        return $this;
    }

    /**
     * Set the valeur9.
     *
     * @param float $valeur9 The valeur9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur9($valeur9) {
        $this->valeur9 = $valeur9;
        return $this;
    }
}
