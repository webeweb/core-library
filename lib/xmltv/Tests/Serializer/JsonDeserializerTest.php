<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Serializer;

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
use WBW\Library\XmlTv\Serializer\JsonDeserializer;
use WBW\Library\XmlTv\Serializer\XmlDeserializer;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * JSON deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Serializer
 */
class JsonDeserializerTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the TV mock.
        $this->tv = XmlDeserializer::deserializeTv($this->document->documentElement);
    }

    /**
     * Test deserializeActor()
     *
     * @return void
     */
    public function testDeserializeActor(): void {

        // tv > programme > credits > actor
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getActors()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeActor($data);
        $this->assertInstanceOf(Actor::class, $res);

        $this->assertEquals("role", $res->getRole());
        $this->assertEquals("Actor", $res->getContent());
    }

    /**
     * Test deserializeAdapter()
     *
     * @return void
     */
    public function testDeserializeAdapter(): void {

        // tv > programme > credits > adapter
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getAdapters()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAdapter($data);
        $this->assertInstanceOf(Adapter::class, $res);

        $this->assertEquals("Adapter", $res->getContent());
    }

    /**
     * Test deserializeAspect()
     *
     * @return void
     */
    public function testDeserializeAspect(): void {

        // tv > programme > video > aspect
        $json = json_encode($this->tv->getProgrammes()[0]->getVideo()->getAspect());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAspect($data);
        $this->assertInstanceOf(Aspect::class, $res);

        $this->assertEquals("Aspect", $res->getContent());
    }

    /**
     * Test deserializeAudio()
     *
     * @return void
     */
    public function testDeserializeAudio(): void {

        // tv > programme > audio
        $json = json_encode($this->tv->getProgrammes()[0]->getAudio());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAudio($data);
        $this->assertInstanceOf(Audio::class, $res);

        $this->assertInstanceOf(Present::class, $res->getPresent());
        $this->assertInstanceOf(Stereo::class, $res->getStereo());
    }

    /**
     * Test deserializeCategory()
     *
     * @return void
     */
    public function testDeserializeCategory(): void {

        // tv > programme > category
        $json = json_encode($this->tv->getProgrammes()[0]->getCategories()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCategory($data);
        $this->assertInstanceOf(Category::class, $res);

        $this->assertEquals("category-lang", $res->getLang());
        $this->assertEquals("Category", $res->getContent());
    }

    /**
     * Test deserializeChannel()
     *
     * @return void
     */
    public function testDeserializeChannel(): void {

        // tv > channel
        $json = json_encode($this->tv->getChannels()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeChannel($data);
        $this->assertInstanceOf(Channel::class, $res);

        $this->assertInstanceOf(DisplayName::class, $res->getDisplayNames()[0]);
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
        $this->assertInstanceOf(Url::class, $res->getUrls()[0]);
    }

    /**
     * Test deserializeColour()
     *
     * @return void
     */
    public function testDeserializeColour(): void {

        // tv > programme > video > colour
        $json = json_encode($this->tv->getProgrammes()[0]->getVideo()->getColour());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeColour($data);
        $this->assertInstanceOf(Colour::class, $res);

        $this->assertEquals("Colour", $res->getContent());
    }

    /**
     * Test deserializeCommentator()
     *
     * @return void
     */
    public function testDeserializeCommentator(): void {

        // tv > programme > credits > commentator
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getCommentators()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCommentator($data);
        $this->assertInstanceOf(Commentator::class, $res);

        $this->assertEquals("Commentator", $res->getContent());
    }

    /**
     * Test deserializeComposer()
     *
     * @return void
     */
    public function testDeserializeComposer(): void {

        // tv > programme > credits > composer
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getComposers()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeComposer($data);
        $this->assertInstanceOf(Composer::class, $res);

        $this->assertEquals("Composer", $res->getContent());
    }

    /**
     * Test deserializeCountry()
     *
     * @return void
     */
    public function testDeserializeCountry(): void {

        // tv > programme > country
        $json = json_encode($this->tv->getProgrammes()[0]->getCountries()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCountry($data);
        $this->assertInstanceOf(Country::class, $res);

        $this->assertEquals("country-lang", $res->getLang());
        $this->assertEquals("Country", $res->getContent());
    }

    /**
     * Test deserializeCredits()
     *
     * @return void
     */
    public function testDeserializeCredits(): void {

        // tv > programme > credits
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCredits($data);
        $this->assertInstanceOf(Credits::class, $res);

        $this->assertInstanceOf(Director::class, $res->getDirectors()[0]);
        $this->assertInstanceOf(Actor::class, $res->getActors()[0]);
        $this->assertInstanceOf(Writer::class, $res->getWriters()[0]);
        $this->assertInstanceOf(Adapter::class, $res->getAdapters()[0]);
        $this->assertInstanceOf(Producer::class, $res->getProducers()[0]);
        $this->assertInstanceOf(Composer::class, $res->getComposers()[0]);
        $this->assertInstanceOf(Editor::class, $res->getEditors()[0]);
        $this->assertInstanceOf(Presenter::class, $res->getPresenters()[0]);
        $this->assertInstanceOf(Commentator::class, $res->getCommentators()[0]);
        $this->assertInstanceOf(Guest::class, $res->getGuests()[0]);
    }

    /**
     * Test deserializeDate()
     *
     * @return void
     */
    public function testDeserializeDate(): void {

        // tv > programme > date
        $json = json_encode($this->tv->getProgrammes()[0]->getDate());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDate($data);
        $this->assertInstanceOf(Date::class, $res);

        $this->assertEquals(1970, $res->getContent());
    }

    /**
     * Test deserializeDesc()
     *
     * @return void
     */
    public function testDeserializeDesc(): void {

        // tv > programme > desc
        $json = json_encode($this->tv->getProgrammes()[0]->getDescs()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDesc($data);
        $this->assertInstanceOf(Desc::class, $res);

        $this->assertEquals("desc-lang", $res->getLang());
        $this->assertEquals("Desc", $res->getContent());
    }

    /**
     * Test deserializeDirector()
     *
     * @return void
     */
    public function testDeserializeDirector(): void {

        // tv > programme > credits > director
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getDirectors()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDirector($data);
        $this->assertInstanceOf(Director::class, $res);

        $this->assertEquals("Director", $res->getContent());
    }

    /**
     * Test deserializeDisplayName()
     *
     * @return void
     */
    public function testDeserializeDisplayName(): void {

        // tv > channel > display-name
        $json = json_encode($this->tv->getChannels()[0]->getDisplayNames()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDisplayName($data);
        $this->assertInstanceOf(DisplayName::class, $res);

        $this->assertEquals("display-name-lang", $res->getLang());
        $this->assertEquals("Display name", $res->getContent());
    }

    /**
     * Test deserializeEditor()
     *
     * @return void
     */
    public function testDeserializeEditor(): void {

        // tv > programme > credits > editor
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getEditors()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeEditor($data);
        $this->assertInstanceOf(Editor::class, $res);

        $this->assertEquals("Editor", $res->getContent());
    }

    /**
     * Test deserializeEpisodeNum()
     *
     * @return void
     */
    public function testDeserializeEpisodeNum(): void {

        // tv > programme > episode-num
        $json = json_encode($this->tv->getProgrammes()[0]->getEpisodeNums()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeEpisodeNum($data);
        $this->assertInstanceOf(EpisodeNum::class, $res);

        $this->assertEquals("onscreen", $res->getSystem());
        $this->assertEquals("Episode num", $res->getContent());
    }

    /**
     * Test deserializeGuest()
     *
     * @return void
     */
    public function testDeserializeGuest(): void {

        // tv > programme > credits > guest
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getGuests()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeGuest($data);
        $this->assertInstanceOf(Guest::class, $res);

        $this->assertEquals("Guest", $res->getContent());
    }

    /**
     * Test deserializeIcon()
     *
     * @return void
     */
    public function testDeserializeIcon(): void {

        // tv > channel > icon
        $json = json_encode($this->tv->getChannels()[0]->getIcons()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeIcon($data);
        $this->assertInstanceOf(Icon::class, $res);

        $this->assertEquals("src", $res->getSrc());
        $this->assertEquals(1920, $res->getWidth());
        $this->assertEquals(1080, $res->getHeight());
    }

    /**
     * Test deserializeKeyword()
     *
     * @return void
     */
    public function testDeserializeKeyword(): void {

        // tv > programme > keyword
        $json = json_encode($this->tv->getProgrammes()[0]->getKeywords()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeKeyword($data);
        $this->assertInstanceOf(Keyword::class, $res);

        $this->assertEquals("keyword-lang", $res->getLang());
        $this->assertEquals("Keyword", $res->getContent());
    }

    /**
     * Test deserializeLanguage()
     *
     * @return void
     */
    public function testDeserializeLanguage(): void {

        // tv > programme > language
        $json = json_encode($this->tv->getProgrammes()[0]->getLanguage());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeLanguage($data);
        $this->assertInstanceOf(Language::class, $res);

        $this->assertEquals("language-lang", $res->getLang());
        $this->assertEquals("Language", $res->getContent());
    }

    /**
     * Test deserializeLastChance()
     *
     * @return void
     */
    public function testDeserializeLastChance(): void {

        // tv > programme > last-chance
        $json = json_encode($this->tv->getProgrammes()[0]->getLastChance());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeLastChance($data);
        $this->assertInstanceOf(LastChance::class, $res);

        $this->assertEquals("last-chance-lang", $res->getLang());
        $this->assertEquals("Last chance", $res->getContent());
    }

    /**
     * Test deserializeLength()
     *
     * @return void
     */
    public function testDeserializeLength(): void {

        // tv > programme > length
        $json = json_encode($this->tv->getProgrammes()[0]->getLength());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeLength($data);
        $this->assertInstanceOf(Length::class, $res);

        $this->assertEquals("minutes", $res->getUnits());
        $this->assertEquals(90, $res->getContent());
    }

    /**
     * Test deserializeOrigLanguage()
     *
     * @return void
     */
    public function testDeserializeOrigLanguage(): void {

        // tv > programme > orig-language
        $json = json_encode($this->tv->getProgrammes()[0]->getOrigLanguage());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeOrigLanguage($data);
        $this->assertInstanceOf(OrigLanguage::class, $res);

        $this->assertEquals("orig-language-lang", $res->getLang());
        $this->assertEquals("Orig language", $res->getContent());
    }

    /**
     * Test deserializePremiere()
     *
     * @return void
     */
    public function testDeserializePremiere(): void {

        // tv > programme > premiere
        $json = json_encode($this->tv->getProgrammes()[0]->getPremiere());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePremiere($data);
        $this->assertInstanceOf(Premiere::class, $res);

        $this->assertEquals("premiere-lang", $res->getLang());
        $this->assertEquals("Premiere", $res->getContent());
    }

    /**
     * Test deserializePresent()
     *
     * @return void
     */
    public function testDeserializePresent(): void {

        // tv > programme > video > present
        $json = json_encode($this->tv->getProgrammes()[0]->getAudio()->getPresent());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePresent($data);
        $this->assertInstanceOf(Present::class, $res);

        $this->assertEquals("Present", $res->getContent());
    }

    /**
     * Test deserializePresenter()
     *
     * @return void
     */
    public function testDeserializePresenter(): void {

        // tv > programme > credits > presenter
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getPresenters()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePresenter($data);
        $this->assertInstanceOf(Presenter::class, $res);

        $this->assertEquals("Presenter", $res->getContent());
    }

    /**
     * Test deserializePreviouslyShown()
     *
     * @return void
     */
    public function testDeserializePreviouslyShown(): void {

        // tv > programme > previously-shown
        $json = json_encode($this->tv->getProgrammes()[0]->getPreviouslyShown());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePreviouslyShown($data);
        $this->assertInstanceOf(PreviouslyShown::class, $res);

        $this->assertEquals("channel-id", $res->getChannel());
        $this->assertEquals("previously-shown-start", $res->getStart());
    }

    /**
     * Test deserializeProducer()
     *
     * @return void
     */
    public function testDeserializeProducer(): void {

        // tv > programme > credits > producer
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getProducers()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeProducer($data);
        $this->assertInstanceOf(Producer::class, $res);

        $this->assertEquals("Producer", $res->getContent());
    }

    /**
     * Test deserializeProgramme()
     *
     * @return void
     */
    public function testDeserializeProgramme(): void {

        // tv > programme
        $json = json_encode($this->tv->getProgrammes()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeProgramme($data);
        $this->assertInstanceOf(Programme::class, $res);

        $this->assertEquals("20190730200000 +0200", $res->getStart());
        $this->assertEquals("20190730220000 +0200", $res->getStop());
        $this->assertEquals("20190730200000 +0100", $res->getPdcStart());
        $this->assertEquals("20190730200000 -0100", $res->getVpsStart());
        $this->assertEquals("showview", $res->getShowView());
        $this->assertEquals("videoplus", $res->getVideoPlus());
        $this->assertEquals("channel-id", $res->getChannel());
        $this->assertEquals("clumpidx", $res->getClumpIdx());
        $this->assertInstanceOf(Title::class, $res->getTitles()[0]);
        $this->assertInstanceOf(SecondaryTitle::class, $res->getSecondaryTitles()[0]);
        $this->assertInstanceOf(Desc::class, $res->getDescs()[0]);
        $this->assertInstanceOf(Credits::class, $res->getCredits());
        $this->assertInstanceOf(Date::class, $res->getDate());
        $this->assertInstanceOf(Category::class, $res->getCategories()[0]);
        $this->assertInstanceOf(Keyword::class, $res->getKeywords()[0]);
        $this->assertInstanceOf(Language::class, $res->getLanguage());
        $this->assertInstanceOf(OrigLanguage::class, $res->getOrigLanguage());
        $this->assertInstanceOf(Length::class, $res->getLength());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
        $this->assertInstanceOf(Url::class, $res->getUrls()[0]);
        $this->assertCount(1, $res->getCountries());
        $this->assertInstanceOf(Country::class, $res->getCountries()[0]);
        $this->assertInstanceOf(EpisodeNum::class, $res->getEpisodeNums()[0]);
        $this->assertInstanceOf(Video::class, $res->getVideo());
        $this->assertInstanceOf(Audio::class, $res->getAudio());
        $this->assertInstanceOf(PreviouslyShown::class, $res->getPreviouslyShown());
        $this->assertInstanceOf(Premiere::class, $res->getPremiere());
        $this->assertInstanceOf(LastChance::class, $res->getLastChance());
        $this->assertTrue($res->getNew());
        $this->assertInstanceOf(Subtitles::class, $res->getSubtitles()[0]);
        $this->assertInstanceOf(Rating::class, $res->getRatings()[0]);
        $this->assertInstanceOf(StarRating::class, $res->getStarRatings()[0]);
        $this->assertInstanceOf(Review::class, $res->getReviews()[0]);
    }

    /**
     * Test deserializeQuality()
     *
     * @return void
     */
    public function testDeserializeQuality(): void {

        // tv > programme > video > quality
        $json = json_encode($this->tv->getProgrammes()[0]->getVideo()->getQuality());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeQuality($data);
        $this->assertInstanceOf(Quality::class, $res);

        $this->assertEquals("Quality", $res->getContent());
    }

    /**
     * Test deserializeRating()
     *
     * @return void
     */
    public function testDeserializeRating(): void {

        // tv > programme > rating
        $json = json_encode($this->tv->getProgrammes()[0]->getRatings()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeRating($data);
        $this->assertInstanceOf(Rating::class, $res);

        $this->assertEquals("rating-system", $res->getSystem());
        $this->assertInstanceOf(Value::class, $res->getValue());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
    }

    /**
     * Test deserializeReview()
     *
     * @return void
     */
    public function testDeserializeReview(): void {

        // tv > programme > review
        $json = json_encode($this->tv->getProgrammes()[0]->getReviews()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeReview($data);
        $this->assertInstanceOf(Review::class, $res);

        $this->assertEquals("text", $res->getType());
        $this->assertEquals("source", $res->getSource());
        $this->assertEquals("reviewer", $res->getReviewer());
        $this->assertEquals("review-lang", $res->getLang());
    }

    /**
     * Test deserializeSecondaryTitle()
     *
     * @return void
     */
    public function testDeserializeSecondaryTitle(): void {

        // tv > programme > sub-title
        $json = json_encode($this->tv->getProgrammes()[0]->getSecondaryTitles()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSecondaryTitle($data);
        $this->assertInstanceOf(SecondaryTitle::class, $res);

        $this->assertEquals("secondary-title-lang", $res->getLang());
        $this->assertEquals("Secondary title", $res->getContent());
    }

    /**
     * Test deserializeStarRating()
     *
     * @return void
     */
    public function testDeserializeStarRating(): void {

        // tv > programme > star-rating
        $json = json_encode($this->tv->getProgrammes()[0]->getStarRatings()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeStarRating($data);
        $this->assertInstanceOf(StarRating::class, $res);

        $this->assertInstanceOf(Value::class, $res->getValue());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
    }

    /**
     * Test deserializeStereo()
     *
     * @return void
     */
    public function testDeserializeStereo(): void {

        // tv > programme > audio > stereo
        $json = json_encode($this->tv->getProgrammes()[0]->getAudio()->getStereo());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeStereo($data);
        $this->assertInstanceOf(Stereo::class, $res);

        $this->assertEquals("Stereo", $res->getContent());
    }

    /**
     * Test deserializeSubtitles()
     *
     * @return void
     */
    public function testDeserializeSubtitles(): void {

        // tv > programme > subtitles
        $json = json_encode($this->tv->getProgrammes()[0]->getSubtitles()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSubtitles($data);
        $this->assertInstanceOf(Subtitles::class, $res);

        $this->assertEquals("deaf-signed", $res->getType());
        $this->assertInstanceOf(Language::class, $res->getLanguage());
    }

    /**
     * Test deserializeTitle()
     *
     * @return void
     */
    public function testDeserializeTitle(): void {

        // tv > programme > title
        $json = json_encode($this->tv->getProgrammes()[0]->getTitles()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeTitle($data);
        $this->assertInstanceOf(Title::class, $res);

        $this->assertEquals("title-lang", $res->getLang());
        $this->assertEquals("Title", $res->getContent());
    }

    /**
     * Test deserializeTv()
     *
     * @return void
     */
    public function testDeserializeTv(): void {

        // tv
        $json = json_encode($this->tv);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeTv($data);
        $this->assertInstanceOf(Tv::class, $res);

        $this->assertEquals("date", $res->getDate());
        $this->assertEquals("generator-info-name", $res->getGeneratorInfoName());
        $this->assertEquals("generator-info-url", $res->getGeneratorInfoUrl());
        $this->assertEquals("source-data-url", $res->getSourceDataUrl());
        $this->assertEquals("source-info-name", $res->getSourceInfoName());
        $this->assertEquals("source-info-url", $res->getSourceInfoUrl());
        $this->assertInstanceOf(Channel::class, $res->getChannels()[0]);
        $this->assertInstanceOf(Programme::class, $res->getProgrammes()[0]);
    }

    /**
     * Test deserializeUrl()
     *
     * @return void
     */
    public function testDeserializeUrl(): void {

        // tv > channel > url
        $json = json_encode($this->tv->getChannels()[0]->getUrls()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeUrl($data);
        $this->assertInstanceOf(Url::class, $res);

        $this->assertEquals("URL", $res->getContent());
    }

    /**
     * Test deserializeValue()
     *
     * @return void
     */
    public function testDeserializeValue(): void {

        // tv > programme > rating > value
        $json = json_encode($this->tv->getProgrammes()[0]->getRatings()[0]->getValue());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeValue($data);
        $this->assertInstanceOf(Value::class, $res);

        $this->assertEquals("Value", $res->getContent());
    }

    /**
     * Test deserializeVideo()
     *
     * @return void
     */
    public function testDeserializeVideo(): void {

        // tv > programme > video
        $json = json_encode($this->tv->getProgrammes()[0]->getVideo());
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeVideo($data);
        $this->assertInstanceOf(Video::class, $res);

        $this->assertInstanceOf(Present::class, $res->getPresent());
        $this->assertInstanceOf(Colour::class, $res->getColour());
        $this->assertInstanceOf(Aspect::class, $res->getAspect());
        $this->assertInstanceOf(Quality::class, $res->getQuality());
    }

    /**
     * Test deserializeWriter()
     *
     * @return void
     */
    public function testDeserializeWriter(): void {

        // tv > programme > credits > writer
        $json = json_encode($this->tv->getProgrammes()[0]->getCredits()->getWriters()[0]);
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeWriter($data);
        $this->assertInstanceOf(Writer::class, $res);

        $this->assertEquals("Writer", $res->getContent());
    }
}
