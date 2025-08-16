<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests;

use DOMDocument;
use WBW\Library\Common\Tests\AbstractTestCase as BaseTestCase;
use WBW\Library\XmlTv\Model\Actor;
use WBW\Library\XmlTv\Model\Adapter;
use WBW\Library\XmlTv\Model\Aspect;
use WBW\Library\XmlTv\Model\Audio;
use WBW\Library\XmlTv\Model\Category;
use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Model\Colour;
use WBW\Library\XmlTv\Model\Commentator;
use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Model\Country;
use WBW\Library\XmlTv\Model\Credits;
use WBW\Library\XmlTv\Model\Date;
use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Model\DisplayName;
use WBW\Library\XmlTv\Model\Editor;
use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Model\Guest;
use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Model\Keyword;
use WBW\Library\XmlTv\Model\Language;
use WBW\Library\XmlTv\Model\LastChance;
use WBW\Library\XmlTv\Model\Length;
use WBW\Library\XmlTv\Model\OrigLanguage;
use WBW\Library\XmlTv\Model\Premiere;
use WBW\Library\XmlTv\Model\Present;
use WBW\Library\XmlTv\Model\Presenter;
use WBW\Library\XmlTv\Model\PreviouslyShown;
use WBW\Library\XmlTv\Model\Producer;
use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Model\Quality;
use WBW\Library\XmlTv\Model\Rating;
use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Model\SecondaryTitle;
use WBW\Library\XmlTv\Model\StarRating;
use WBW\Library\XmlTv\Model\Stereo;
use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Model\Title;
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Model\Url;
use WBW\Library\XmlTv\Model\Value;
use WBW\Library\XmlTv\Model\Video;
use WBW\Library\XmlTv\Model\Writer;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests
 * @abstract
 */
abstract class AbstractTestCase extends BaseTestCase {

    /**
     * Actor.
     *
     * @var Actor|null
     */
    protected $actor;

    /**
     * Adapter.
     *
     * @var Adapter|null
     */
    protected $adapter;

    /**
     * Aspect.
     *
     * @var Aspect|null
     */
    protected $aspect;

    /**
     * Audio.
     *
     * @var Audio|null
     */
    protected $audio;

    /**
     * Category.
     *
     * @var Category|null
     */
    protected $category;

    /**
     * Channel.
     *
     * @var Channel|null
     */
    protected $channel;

    /**
     * Colour.
     *
     * @var Colour|null
     */
    protected $colour;

    /**
     * Commentator.
     *
     * @var Commentator|null
     */
    protected $commentator;

    /**
     * Composer.
     *
     * @var Composer|null
     */
    protected $composer;

    /**
     * Country.
     *
     * @var Country|null
     */
    protected $country;

    /**
     * Credits.
     *
     * @var Credits|null
     */
    protected $credits;

    /**
     * Date.
     *
     * @var Date|null
     */
    protected $date;

    /**
     * Description.
     *
     * @var Desc|null
     */
    protected $desc;

    /**
     * Director.
     *
     * @var Director|null
     */
    protected $director;

    /**
     * Display name.
     *
     * @var DisplayName|null
     */
    protected $displayName;

    /**
     * DOM Document.
     *
     * @var DOMDocument|null
     */
    protected $document;

    /**
     * Editor.
     *
     * @var Editor|null
     */
    protected $editor;

    /**
     * Episode number.
     *
     * @var EpisodeNum|null
     */
    protected $episodeNum;

    /**
     * Filename.
     *
     * @var string|null
     */
    protected $filename;

    /**
     * Guest.
     *
     * @var Guest|null
     */
    protected $guest;

    /**
     * Icon.
     *
     * @var Icon|null
     */
    protected $icon;

    /**
     * Keyword.
     *
     * @var Keyword|null
     */
    protected $keyword;

    /**
     * Language.
     *
     * @var Language|null
     */
    protected $language;

    /**
     * Last chance.
     *
     * @var LastChance|null
     */
    protected $lastChance;

    /**
     * Length.
     *
     * @var Length|null
     */
    protected $length;

    /**
     * Original language.
     *
     * @var OrigLanguage|null
     */
    protected $origLanguage;

    /**
     * Premiere.
     *
     * @var Premiere|null
     */
    protected $premiere;

    /**
     * Present.
     *
     * @var Present|null
     */
    protected $present;

    /**
     * Presenter.
     *
     * @var Presenter|null
     */
    protected $presenter;

    /**
     * Previously shown.
     *
     * @var PreviouslyShown|null
     */
    protected $previouslyShown;

    /**
     * Producer.
     *
     * @var Producer|null
     */
    protected $producer;

    /**
     * Programme.
     *
     * @var Programme|null
     */
    protected $programme;

    /**
     * Quality.
     *
     * @var Quality|null
     */
    protected $quality;

    /**
     * Rating.
     *
     * @var Rating|null
     */
    protected $rating;

    /**
     * Review.
     *
     * @var Review|null
     */
    protected $review;

    /**
     * Secondary title.
     *
     * @var SecondaryTitle|null
     */
    protected $secondaryTitle;

    /**
     * Star rating.
     *
     * @var StarRating|null
     */
    protected $starRating;

    /**
     * Stereo.
     *
     * @var Stereo|null
     */
    protected $stereo;

    /**
     * Subtitles.
     *
     * @var Subtitles|null
     */
    protected $subtitles;

    /**
     * Title.
     *
     * @var Title|null
     */
    protected $title;

    /**
     * Tv.
     *
     * @var Tv|null
     */
    protected $tv;

    /**
     * Url.
     *
     * @var Url|null
     */
    protected $url;

    /**
     * Value.
     *
     * @var Value|null
     */
    protected $value;

    /**
     * Video.
     *
     * @var Video|null
     */
    protected $video;

    /**
     * Writer.
     *
     * @var Writer|null
     */
    protected $writer;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $this->filename = realpath(__DIR__ . "/Fixtures/xmltv.xml");

        // Set a DOM document mock.
        $this->document = new DOMDocument;
        $this->document->load($this->filename);

        // Set an Actor mock.
        $this->actor = new Actor();

        // Set an Adapter mock.
        $this->adapter = new Adapter();

        // Set an Aspect mock.
        $this->aspect = new Aspect();

        // Set an Audio mock.
        $this->audio = new Audio();

        // Set a Category mock.
        $this->category = new Category();

        // Set a Channel mock.
        $this->channel = new Channel();

        // Set a Colour mock.
        $this->colour = new Colour();

        // Set a Commentator mock.
        $this->commentator = new Commentator();

        // Set a Composer mock.
        $this->composer = new Composer();

        // Set a Country mock.
        $this->country = new Country();

        // Set a Credits mock.
        $this->credits = new Credits();

        // Set a Date mock.
        $this->date = new Date();

        // Set a Desc mock.
        $this->desc = new Desc();

        // Set a Director mock.
        $this->director = new Director();

        // Set a Display name mock.
        $this->displayName = new DisplayName();

        // Set an Editor mock.
        $this->editor = new Editor();

        // Set an Episode number mock.
        $this->episodeNum = new EpisodeNum();

        // Set a Guest mock.
        $this->guest = new Guest();

        // Set an Icon mock.
        $this->icon = new Icon();

        // Set a Keyword mock.
        $this->keyword = new Keyword();

        // Set a Language mock.
        $this->language = new Language();

        // Set a Last chance mock.
        $this->lastChance = new LastChance();

        // Set a Length mock.
        $this->length = new Length();

        // Set an Original language mock.
        $this->origLanguage = new OrigLanguage();

        // Set a Premiere mock.
        $this->premiere = new Premiere();

        // Set a Presenter mock.
        $this->presenter = new Presenter();

        // Set a Present mock.
        $this->present = new Present();

        // Set a Previously shown mock.
        $this->previouslyShown = new PreviouslyShown();

        // Set a Producer mock.
        $this->producer = new Producer();

        // Set a Programme mock.
        $this->programme = new Programme();

        // Set a Quality mock.
        $this->quality = new Quality();

        // Set a Rating mock.
        $this->rating = new Rating();

        // Set a Review mock.
        $this->review = new Review();

        // Set a Secondary title mock.
        $this->secondaryTitle = new SecondaryTitle();

        // Set a Star rating mock.
        $this->starRating = new StarRating();

        // Set a Stereo mock.
        $this->stereo = new Stereo();

        // Set a Subtitles mock.
        $this->subtitles = new Subtitles();

        // Set a Title mock.
        $this->title = new Title();

        // Set a Tv mock.
        $this->tv = new Tv();

        // Set a URL mock.
        $this->url = new Url();

        // Set a Value mock.
        $this->value = new Value();

        // Set a Video mock.
        $this->video = new Video();

        // Set a Writer mock.
        $this->writer = new Writer();
    }
}
